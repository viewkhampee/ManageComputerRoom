<script src="package/dist/sweetalert2.all.min.js"></script>
<?php

include('server.php'); 
 $com_name = $_POST['com_name'];
 $status = $_POST['status'];
 $plobem = $_POST['plobem'];
 $com_id = $_POST['com_id'];
 $room_id = $_POST['room_id'];

               

$co = "SELECT * FROM comroom WHERE com_id != '$com_id' AND com_name = '$com_name' AND room_id = '$room_id'";
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
                window.location.href="cominroom_edit.php?id='.$com_id .'";
            }); },500);
    </script>';    
}else{
    
    $sql1 = "UPDATE comroom SET com_name = '$com_name', status = '$status', plobem = '$plobem' WHERE com_id = '$com_id'";

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
                    window.location.href="comp_add.php?id='.$room_id.'";
                }); },500);
        </script>';    
      }
}

            
         
     

?>