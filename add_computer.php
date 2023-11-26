<script src="package/dist/sweetalert2.all.min.js"></script>
<?php
include('server.php');

$room_id = $_POST['room_id'];
$com_num = $_POST['com_name'];
$comnow = $_POST['comnow'];

if(isset($_POST['letsgo_login'])){
    for($i = $comnow; $i < $comnow + $com_num; $i++) {
        $comp_name = "คอมเครื่องที่ " . $i; // สร้างชื่อคอมเครื่อง
        $comp_status = '1'; // กำหนดค่าสถานะ (คุณต้องกำหนดค่าตามที่ต้องการ)
        $comp_plob = ''; // กำหนดค่า plobem (คุณต้องกำหนดค่าตามที่ต้องการ)
        
        $sql = "INSERT INTO comroom (com_name, status, plobem, room_id) VALUES ('$comp_name','$comp_status','$comp_plob','$room_id')";
        $query = mysqli_query($conn, $sql); 
    }
    echo '
    <script>
        setTimeout(function() {
            Swal.fire({
                position: "mid",
                icon: "success",
                title: "บันทึกข้อมูลสำเร็จ!",
                text: "ได้เพิ่มเข้าสู่ระบบแล้วรอสักครู้...",
                showConfirmButton: false,
                timer: 3000
            }).then(function() {
                window.location.href="comp_add.php?id=' . $room_id . '";
            });
        }, 500);
    </script>';
}
?>
