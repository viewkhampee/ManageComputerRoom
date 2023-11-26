<script src="package/dist/sweetalert2.all.min.js"></script>
<?php

include('server.php');  
$username = $_POST["username"];
$name_q = $_POST["name_q"];
$phone = $_POST["phone"];


  if ($_FILES["postimg"]["error"] != 0) { 
    if (empty($_POST["name_q"])) { 
        echo '
        <script>
            setTimeout(function()
            {Swal.fire({
                    position: "mid",
                    icon: "warning",
                    title: "ช่องชื่อผู้ใช้ว่าง!",
                    html:"กรุณากรอกข้อมูลให้ครบถ้วน",
                    showConfirmButton: false,
                    timer: 3000
                  }).then(function() {
                    window.location.href="edit_profile.php";
                }); },500);
        </script>';

    }else{
        if (empty($_POST["phone"])) { 
            echo '
            <script>
                setTimeout(function()
                {Swal.fire({
                        position: "mid",
                        icon: "warning",
                        title: "ช่องเบอร์โทรศัพท์!",
                        html:"กรุณากรอกข้อมูลให้ครบถ้วน",
                        showConfirmButton: false,
                        timer: 3000
                      }).then(function() {
                        window.location.href="edit_profile.php";
                    }); },500);
            </script>';
    
        }else{
           
                    $sql1 = "UPDATE dd_member SET  
                    mem_name='$name_q', 
                    phone='$phone'
                    WHERE mem_user = '$username'";
                    $result1 = mysqli_query($conn, $sql1) or die ("Error in query: $sql1 " . mysqli_error());
                    mysqli_close($conn);
            
            if($result1){
                echo '
                <script>
                    setTimeout(function()
                    {Swal.fire({
                            position: "mid",
                            icon: "success",
                            title: "บันทึกข้อมูลสำเร็จ1!",
                            html:"กำลังพาคุณกลับ รอสักครู่...",
                            showConfirmButton: false,
                            timer: 3000
                          }).then(function() {
                            window.location.href="edit_profile.php";
                        }); },500);
                </script>';
        
            }

                }

                }

            }else{
        if (empty($_POST["name_q"])) { 
            echo '
            <script>
                setTimeout(function()
                {Swal.fire({
                        position: "mid",
                        icon: "warning",
                        title: "ช่องชื่อผู้ใช้ว่าง!",
                        html:"กรุณากรอกข้อมูลให้ครบถ้วน",
                        showConfirmButton: false,
                        timer: 3000
                      }).then(function() {
                        window.location.href="edit_profile.php";
                    }); },500);
            </script>';
    
        }else{
            if (empty($_POST["phone"])) { 
                echo '
                <script>
                    setTimeout(function()
                    {Swal.fire({
                            position: "mid",
                            icon: "warning",
                            title: "ช่องเบอร์โทรศัพท์!",
                            html:"กรุณากรอกข้อมูลให้ครบถ้วน",
                            showConfirmButton: false,
                            timer: 3000
                          }).then(function() {
                            window.location.href="edit_profile.php";
                        }); },500);
                </script>';
        
            }else{
               
                        $namea = bin2hex(random_bytes(16)).'_profile.jpg';
                        function Upload($file,$path="images/user_img/"){
                        global $namea;
                        $newfilename= $namea.str_replace("", "", basename($_FILES["file"]["name"]));
                        if(@copy($file['tmp_name'],$path.$newfilename)){
                            @chmod($path.$file,0777);
                            return $newfilename;
                        }else{
                            return false;
                        }
                    }
                        $imgfile = Upload($_FILES['postimg']);
                        $sql2 = "UPDATE dd_member SET
                                user_img ='$imgfile', 
                                mem_name='$name_q', 
                                phone='$phone'
                                WHERE mem_user = '$username'";
                        $result2 = mysqli_query($conn, $sql2) or die ("Error in query: $sql2 " . mysqli_error());
                        mysqli_close($conn);
                        
                        if($result2){
                            echo '
                            <script>
                                setTimeout(function()
                                {Swal.fire({
                                        position: "mid",
                                        icon: "success",
                                        title: "บันทึกข้อมูลสำเร็จ2!",
                                        html:"กำลังพาคุณกลับ รอสักครู่...",
                                        showConfirmButton: false,
                                        timer: 3000
                                      }).then(function() {
                                        window.location.href="edit_profile.php";
                                    }); },500);
                            </script>';
                    
                        }
    
                    }
    
                    }
    
                }
    
     

?>