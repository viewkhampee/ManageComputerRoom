<script src="package/dist/sweetalert2.all.min.js"></script>
<?php

    include 'server.php';
    $id = $_GET['id'];
    $room = $_GET['room'];
    
    $get_del = "DELETE FROM comroom WHERE com_id = '$id'";
    $run_del = mysqli_query($conn, $get_del);
    if($run_del == true){
        echo '
        <script>
            setTimeout(function()
            {Swal.fire({
                    position: "mid",
                    icon: "error",
                    title: "ลบข้อมูลสำเร็จ!",
                    html:"กำลังพาคุณกลับ รอสักครู่...",
                    showConfirmButton: false,
                    timer: 3000
                  }).then(function() {
                    window.location.href="comp_add.php?id='. $room .'";
                }); },500);
        </script>';
    }

?>