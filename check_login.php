<script src="package/dist/sweetalert2.all.min.js"></script>
<?php 
    error_reporting(0);
    ini_set('display_errors', 0);

    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['letsgo_login'])) {
        $mem_user = $_POST['mem_user'];
        $mem_pass = $_POST['mem_pass'];
        if (empty($mem_user)) {
            echo '
                <script>
                    setTimeout(function()
                    {Swal.fire({
                            position: "mid",
                            icon: "error",
                            title: "Username ว่าง!",
                            text: "กรุณากรอกข้อมูลให้ครบถ้วน",
                            showConfirmButton: false,
                            timer: 3000
                          }).then(function() {
                            window.location.href="login/loginad.php";
                        }); },500);
                </script>';
        }else{

        if (empty($mem_pass)) {
            echo '
            <script>
                setTimeout(function()
                {Swal.fire({
                        position: "mid",
                        icon: "error",
                        title: "Password ว่าง!",
                        text: "กรุณากรอกข้อมูลให้ครบถ้วน",
                        showConfirmButton: false,
                        timer: 3000
                      }).then(function() {
                        window.location.href="login/loginad.php";
                    }); },500);
            </script>';
        }else{
            $web = "SELECT * FROM web_setting WHERE id = 1";
            $set = mysqli_query($conn, $web);
            $setting = mysqli_fetch_array($set);
            
            $query = "SELECT * FROM dd_member WHERE mem_user = '$mem_user' AND mem_pass = '$mem_pass'";
            $result = mysqli_query($conn, $query);
            $num = mysqli_num_rows($result);
            $row = mysqli_fetch_array($result);

            
            if($num != 1){ 
                echo '
                <script>
                    setTimeout(function()
                    {Swal.fire({
                            position: "mid",
                            icon: "error",
                            title: "Username หรือ Passwords ผิด!",
                            text: "กรุณาตรวจสอบความถูกต้องใหม่อีกรอบ",
                            showConfirmButton: false,
                            timer: 3000
                          }).then(function() {
                            window.location.href="login/loginad.php";
                        }); },500);
                </script>';

            }else{
                if($row['mem_status'] == 9){
                    echo '
                    <script>
                        setTimeout(function()
                        {Swal.fire({
                                position: "mid",
                                icon: "error",
                                title: "เข้าสู่ระบบไม่สำเร็จ",
                                text: "คุณได้ถูกแบนจากระบบ กรุณาติดต่อแอดมิน...",
                                showConfirmButton: false,
                                timer: 3000
                              }).then(function() {
                                window.location.href="login/loginad.php";
                            }); },500);
                    </script>';

                }else{
                    if($row['acc_state'] == 0){
                        echo '
                        <script>
                            setTimeout(function()
                            {Swal.fire({
                                    position: "mid",
                                    icon: "warning",
                                    title: "รอผู้ดูแลยืนยันบัญชีผู้ใช้",
                                    text: "กรุณาติดต่อผู้ดูแลศูนย์..",
                                    showConfirmButton: false,
                                    timer: 3000
                                  }).then(function() {
                                    window.location.href="login/loginad.php";
                                }); },500);
                        </script>';
    
                    }else{
                        if($setting['status'] == 0){
                            echo '
                            <script>
                                setTimeout(function()
                                {Swal.fire({
                                        position: "mid",
                                        icon: "warning",
                                        title: "เว็ปไซต์ได้ปิดปรับปรุงชั่วคราว",
                                        text: "กรุณาเข้าสู่ระบบใหม่ภายหลัง หรือ ติดต่อแอดมิน",
                                        showConfirmButton: false,
                                        timer: 3000
                                      }).then(function() {
                                        window.location.href="login/loginad.php";
                                    }); },500);
                            </script>';

                        }else{
                            if($row['mem_status'] == 7){
                                $_SESSION['mem_user'] = $mem_user;
                
                                $mem_user  = $_SESSION["mem_user"];
                                $mem_name = $_SESSION["mem_name"];
                
                            
                
                                echo '
                                <script>
                                    setTimeout(function()
                                    {Swal.fire({
                                            position: "mid",
                                            icon: "success",
                                            title: "เข้าสู่ระบบสำเร็จ",  
                                            html:"กำลังพาคุณ <b>'.$mem_name.'</b> เข้าสู่ระบบ รอสักครู่...",
                                            showConfirmButton: false,
                                            timer: 3000
                                          }).then(function() {
                                            window.location.href="account.php";
                                        }); },500);
                                </script>';
                                    }else{
                    if($row['mem_status'] == 0){
                        $_SESSION['mem_user'] = $mem_user;
        
                        $mem_user  = $_SESSION["mem_user"];
                        $mem_name = $_SESSION["mem_name"];
        
                    
        
                        echo '
                        <script>
                            setTimeout(function()
                            {Swal.fire({
                                    position: "mid",
                                    icon: "success",
                                    title: "เข้าสู่ระบบสำเร็จ",  
                                    html:"กำลังพาคุณ <b>'.$mem_name.'</b> เข้าสู่ระบบ รอสักครู่...",
                                    showConfirmButton: false,
                                    timer: 3000
                                  }).then(function() {
                                    window.location.href="home.php";
                                }); },500);
                        </script>';
                            }elseif($row['mem_status'] == 1){
                                $_SESSION['mem_user'] = $mem_user;
        
                                $mem_user  = $_SESSION["mem_user"];
                                $mem_name = $_SESSION["mem_name"];
                
                            
                
                                echo '
                                <script>
                                    setTimeout(function()
                                    {Swal.fire({
                                            position: "mid",
                                            icon: "success",
                                            title: "เข้าสู่ระบบสำเร็จ",  
                                            html:"กำลังพาคุณ <b>'.$mem_name.'</b> เข้าสู่ระบบ รอสักครู่...",
                                            showConfirmButton: false,
                                            timer: 3000
                                          }).then(function() {
                                            window.location.href="home.php";
                                        }); },500);
                                </script>';

                            }elseif($row['mem_status'] == 5){
                                $_SESSION['mem_user'] = $mem_user;
        
                                $mem_user  = $_SESSION["mem_user"];
                                $mem_name = $_SESSION["mem_name"];
                
                            
                
                                echo '
                                <script>
                                    setTimeout(function()
                                    {Swal.fire({
                                            position: "mid",
                                            icon: "success",
                                            title: "เข้าสู่ระบบสำเร็จ",  
                                            html:"กำลังพาคุณ <b>'.$mem_name.'</b> เข้าสู่ระบบ รอสักครู่...",
                                            showConfirmButton: false,
                                            timer: 3000
                                          }).then(function() {
                                            window.location.href="home.php";
                                        }); },500);
                                </script>';

                            }}}
                    
                }
            }
        }
        }
    }
        } 
    

?>