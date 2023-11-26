<script src="package/dist/sweetalert2.all.min.js"></script>
<?php

include('server.php'); 

 $name = $_POST['name'];
  $phone = $_POST['phone'];
 $status = $_POST['status'];
 $id_con = $_POST['id_con'];
               

$co = "SELECT * FROM contrac WHERE id_con != '$id_con' AND name = '$name' AND phone = '$phone'";
$com = mysqli_query($conn,$co); 
$comp = mysqli_num_rows($com);
if($comp > 0){
    echo '
    <script>
        setTimeout(function()
        {Swal.fire({
                position: "mid",
                icon: "error",
                title: "ข้อมูลซ้ำ!",
                text: "ข้อมูลการติดต่อซ้ำกรุณาตรวจสอบ",
                showConfirmButton: false,
                timer: 3000
              }).then(function() {
                window.location.href="contrac_list.php";
            }); },500);
    </script>';    
}else{
    
    $sql1 = "UPDATE contrac SET name = '$name', status = '$status' WHERE id_con = '$id_con'";

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
                    window.location.href="contrac_list.php";
                }); },500);
        </script>';    
      }
}

            
         
     

?>