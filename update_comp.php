<script src="package/dist/sweetalert2.all.min.js"></script>
<?php

include('server.php'); 

 $comp_name = $_POST['comp_name'];
  $comp_status = $_POST['comp_status'];
 $comp_plob = $_POST['comp_plob'];
 $Id_comp = $_POST['Id_comp'];
               

$co = "SELECT * FROM comp_state WHERE Id_comp != '$Id_comp' AND comp_name = '$comp_name'";
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
                window.location.href="table_com.php";
            }); },500);
    </script>';    
}else{
    
    $sql1 = "UPDATE comp_state SET comp_name = '$comp_name', comp_status = '$comp_status', comp_plob = '$comp_plob' WHERE Id_comp = '$Id_comp'";

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
                    window.location.href="table_com.php";
                }); },500);
        </script>';    
      }
}

            
         
     

?>