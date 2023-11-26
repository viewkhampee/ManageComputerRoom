<script src="package/dist/sweetalert2.all.min.js"></script>
<?php

include('server.php'); 

 $re_name = $_POST['re_name'];
  $re_id = $_POST['re_id'];
 $status = $_POST['status'];
               

$co = "SELECT * FROM type_repair WHERE re_id != '$re_id' AND re_name = '$re_name'";
$com = mysqli_query($conn,$co); 
$comp = mysqli_num_rows($com);
if($comp > 0){
    echo '
    <script>
        setTimeout(function()
        {Swal.fire({
                position: "mid",
                icon: "error",
                title: "ข้อมูลคอมพิวเตอร์ซ้ำ!",
                text: "ข้อมูลคอมพิวเตอร์ซ้ำ  กรุณาตรวจสอบอีกครั้ง...",
                showConfirmButton: false,
                timer: 3000
              }).then(function() {
                window.location.href="type_repair.php";
            }); },500);
    </script>';    
}else{
    
    $sql1 = "UPDATE type_repair SET re_name = '$re_name', status = '$status' WHERE re_id = '$re_id'";

    $result1 = mysqli_query($conn, $sql1) or die ("Error in query: $sql1 " . mysqli_error());

    if($result1 == true) {
        echo '
        <script>
            setTimeout(function()
            {Swal.fire({
                    position: "mid",
                    icon: "success",
                    title: "บันทึกข้อมูลสำเร็จ!",
                    text: "ได้เพิ่มข้อมูลเข้าสู่ระบบแล้วรอสักครู้...",
                    showConfirmButton: false,
                    timer: 3000
                  }).then(function() {
                    window.location.href="type_repair.php";
                }); },500);
        </script>';    
      }
}

            
         
     

?>