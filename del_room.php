<script src="package/dist/sweetalert2.all.min.js"></script>
<?php

    include 'server.php';
    $id = $_GET['id'];

    
    $get_del = "DELETE FROM comp_state WHERE Id_comp = '$id'";
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
                    window.location.href="table_com.php";
                }); },500);
        </script>';
    }

?>