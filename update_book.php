<script src="package/dist/sweetalert2.all.min.js"></script>
<?php

include('server.php'); 

$start = $_POST["start"];
$end = $_POST["end"];
$duration = $_POST["duration"];
$status = $_POST["status"];


    if (empty($_POST["start"])) { 
        echo '
        <script>
            setTimeout(function()
            {Swal.fire({
                    position: "mid",
                    icon: "warning",
                    title: "ช่องเวลาเริ่มจองว่าง!",
                    html:"กรุณากรอกข้อมูลให้ครบถ้วน",
                    showConfirmButton: false,
                    timer: 3000
                  }).then(function() {
                    window.location.href="setting_book.php";
                }); },500);
        </script>';

    }else{
        if (empty($_POST["end"])) { 
            echo '
            <script>
                setTimeout(function()
                {Swal.fire({
                        position: "mid",
                        icon: "warning",
                        title: "ช่องเวลาเริ่มสิ้นสุดว่าง!",
                        html:"กรุณากรอกข้อมูลให้ครบถ้วน",
                        showConfirmButton: false,
                        timer: 3000
                      }).then(function() {
                        window.location.href="setting_book.php";
                    }); },500);
            </script>';
    
        }else{
            if (empty($_POST["duration"])) { 
                echo '
                <script>
                    setTimeout(function()
                    {Swal.fire({
                            position: "mid",
                            icon: "warning",
                            title: "ช่องระยะเวลาคิวว่าง!",
                            html:"กรุณากรอกข้อมูลให้ครบถ้วน",
                            showConfirmButton: false,
                            timer: 3000
                          }).then(function() {
                            window.location.href="setting_book.php";
                        }); },500);
                </script>';
        
            }else{

                    $sql1 = "UPDATE settingbook SET
                    start ='$start',  
                    end='$end',
                    duration ='$duration',
                    close ='$status'
                    WHERE id = 1";
                    $result1 = mysqli_query($conn, $sql1) or die ("Error in query: $sql1 " . mysqli_error());
                    mysqli_close($conn);
            
            if($result1){
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
                            window.location.href="setting_book.php";
                        }); },500);
                </script>';
        
            }

                }
            }
        }
    

?>