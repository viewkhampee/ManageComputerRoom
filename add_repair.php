<script src="package/dist/sweetalert2.all.min.js"></script>
<?php

error_reporting(0);
ini_set('display_errors', 0);

include('server.php');  

 $re_user = $_POST["re_user"];
 $re_name = $_POST["re_name"];
$re_plobem = $_POST["re_plobem"];
$re_nameuser = $_POST["re_nameuser"];
$type = $_POST["status"];
$status = 0;
$re_date = date("Y-m-d");
$lineNotifyToken = 'QIhfltxFX1WEyqPm4wDCHt3yaaYSbAHpa1UuNfAiNsI'; // โทเคน LINE Notify ของคุณ
$header =  "🛠 แจ้งเตือนการซ่อม 🛠";

  if ($_FILES["postimg"]["error"] != 0) { 
    echo '
    <script>
        setTimeout(function()
        {Swal.fire({
                position: "mid",
                icon: "warning",
                title: "กรุณาแนบรูปภาพ!",
                text: "กรุณาแนบไฟล์รูปภาพปัญหาด้วย",
                showConfirmButton: false,
                timer: 3000
              }).then(function() {
                window.location.href="repair.php";
            }); },500);
    </script>';    
  

            }else{
              $sql = "SELECT * FROM type_repair WHERE re_id = '$type'";
              $result2 = mysqli_query($conn,$sql); 
              $row2 = mysqli_fetch_array($result2);  
      
              $message = $header.
                "\n". "👤 ผู้แจ้งซ่อม: " . $re_nameuser .
                "\n". "รหัสผู้ใช้: " . $re_user .
                "\n\n". "อุปกรณ์: " . $re_name .
                "\n". "ประเภท: " . $row2['re_name'] .
                "\n". "==============================" .
                "\n". "🟢 สถานะ: ส่งเรื่องแจ้งซ่อม 🔧" .
                "\n". "ส่งเรื่องเมื่อ: " . $re_date .
                
                "\n". "** ตรวจสอบคำร้องที่รายการแจ้งซ่อม **" ; // Mention the user using '@'

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
                echo 'ส่งข้อความไปยัง LINE Notify สำเร็จ';
            } else {
                echo 'เกิดข้อผิดพลาดใส่การส่งข้อความ';
            }
                $namea = bin2hex(random_bytes(16)).'_repair.jpg';
                function Upload($file,$path="images/repair/"){
                global $namea;
                $newfilename= $namea.str_replace("", "", basename($_FILES["file"]["name"]));
                if(@copy($file['tmp_name'],$path.$newfilename)){
                    @chmod($path.$file,0777);
                    return $newfilename;
                }else{
                    return false;
                }
            }
                $imgfile = Upload($_FILES['postimg']);
               
                  $sql2 = "INSERT INTO repair ( re_user, re_name, re_plobem, status, re_img, re_date, re_nameuser, re_datesucc, type) 
                  VALUES ('$re_user','$re_name','$re_plobem','$status','$imgfile','$re_date','$re_nameuser','$re_date','$type')";
                 
                  $result2 = mysqli_query($conn, $sql2) or die ("Error in query: $sql2 " . mysqli_error());
                  mysqli_close($conn);
                  
                  if($result2){
                      echo '
                      <script>
                          setTimeout(function()
                          {Swal.fire({
                                  position: "mid",
                                  icon: "success",
                                  title: "บันทึกข้อมูลสำเร็จ!",
                                  html:"กำลังพาคุณกลับ รอสักครู่...",
                                  showConfirmButton: false,
                                  timer: 3000
                                }).then(function() {
                                  window.location.href="repair_list.php";
                              }); },500);
                      </script>';
                    }
                  }
                
                   
                      
                    
                    
        
    
                
                    

                      
     

?>