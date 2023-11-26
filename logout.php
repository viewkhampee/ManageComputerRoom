<script src="package/dist/sweetalert2.all.min.js"></script>
<?php
session_start();
session_destroy();
echo '
        <script>
            setTimeout(function()
            {Swal.fire({
                icon: "success",
                title: "ออกจากระบบสำเร็จ",
                text: "กำลังพาคุณออกจากระบบ...",
                showConfirmButton: false,
                timer: 3000
            }).then(function() {
                    window.location.href="login/loginad.php";
                }); },500);
        </script>';
?>