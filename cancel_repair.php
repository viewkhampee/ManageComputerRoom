<script src="package/dist/sweetalert2.all.min.js"></script>
<?php
// Connect to the database (replace with your database credentials)
$mysqli = new mysqli('localhost', 'root', '', 'room');
date_default_timezone_set('Asia/Bangkok');
// Check for connection errors
if ($mysqli->connect_error) {
  die('Connection failed: ' . $mysqli->connect_error);
}

// Get data from the AJAX request
$status = $_POST['status'];
$repairid = $_POST['re_id'];
$datenow = date("Y-m-d");
$type = null;
// ทำการอัพเดตข้อมูลในฐานข้อมูล "repair"
$updateStmt = $mysqli->prepare("UPDATE repair SET status = ?, re_datesucc = ? WHERE re_id = ?");
$updateStmt->bind_param('isi', $status, $datenow, $repairid);

if ($updateStmt->execute()) {
  echo 'success'; // สถานะการอัพเดตสำเร็จ
} else {
  echo 'error'; // เกิดข้อผิดพลาดในการอัพเดต
}
if ($status == 9) {
    $lineNotifyToken = '37LmnziMuZRIPzQ5uypGg4N0XngoaBEX4uNTGMTiGD2'; // โทเคน LINE Notify ของคุณ
    $header =  "🛠 แจ้งเตือนการซ่อม 🛠";
    
    // ดึงข้อมูลจากตาราง "repair" ในฐานข้อมูล
    $selectStmt = $mysqli->prepare("SELECT * FROM repair WHERE re_id = ?");
    $selectStmt->bind_param('i', $repairid);
    $selectStmt->execute();
    $result = $selectStmt->get_result();
    
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $type = $row['type'];
    }
    
    $selectStmt->close();
    
    // ตรวจสอบว่ามีข้อมูลประเภทซ่อม
    if ($type !== null) {
        $sql = $mysqli->prepare("SELECT * FROM type_repair WHERE re_id = ?");
        $sql->bind_param('i', $type);
        $sql->execute();
        $result2 = $sql->get_result();
    
        if ($result2->num_rows === 1) {
            $row2 = $result2->fetch_assoc();
          
            $message = $header.
                "\n". "👤 ผู้แจ้งซ่อม: " . $row['re_nameuser'] .
                "\n". "รหัสผู้ใช้: " . $row['re_user'] .
                "\n\n". "อุปกรณ์: " . $row['re_name'] .
                "\n". "ประเภท: " . $row2['re_name'] .
                "\n". "==============================" .
                "\n". "🔴 สถานะ: ซ่อมไม่สำเร็จ ❌" .
                "\n". "อัปเดตเมื่อ: " . $row['re_datesucc'] .
                
                "\n". "** สามารถมารับอุปกรณ์กลับได้เลย **" ; // Mention the user using '@'

            // URL สำหรับ LINE Notify API
            $lineNotifyAPI = 'https://notify-api.line.me/api/notify';

            // ส่งข้อมูลข้อความไปยัง LINE Notify
            $headers = [
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: Bearer ' . $lineNotifyToken,
            ];
            
            $data = [
                'message' => $message,
            ];
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $lineNotifyAPI);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
            $response = curl_exec($ch);
            curl_close($ch);
            
            // เช็คคำตอบจาก LINE Notify
            if ($response) {
              echo '
              <script>
                  setTimeout(function()
                  {Swal.fire({
                          position: "mid",
                          icon: "error",
                          title: "การซ่อมไม่สำเร็จ!",
                          html:"บันทึกสถานะเป็นไม่สำเร็จแล้ว",
                          showConfirmButton: false,
                          timer: 3000
                        }).then(function() {
                          window.location.href="repair_deatil.php?id='. $repairid .'";
                      }); },500);
              </script>';
            } else {
                echo 'เกิดข้อผิดพลาดใส่การส่งข้อความ';
            }
        }
        $sql->close();
    }
}

$updateStmt->close();
$mysqli->close();

    