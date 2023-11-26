<script src="package/dist/sweetalert2.all.min.js"></script>
<?php

include('server.php'); 

$web_name = $_POST["web_name"];
$phone = $_POST["phone"];
$eng_name = $_POST["eng_name"];
$description = $_POST["description"];

  if ($_FILES["postimg"]["error"] != 0) { 
    if (empty($_POST["web_name"])) { 
        echo '
        <script>
            setTimeout(function()
            {Swal.fire({
                    position: "mid",
                    icon: "warning",
                    title: "ช่องชื่อธนาคารว่าง!",
                    html:"กรุณากรอกข้อมูลให้ครบถ้วน",
                    showConfirmButton: false,
                    timer: 3000
                  }).then(function() {
                    window.location.href="bank_edit.php?id='.$id.'";
                }); },500);
        </script>';

    }else{

                    $sql1 = "UPDATE web_setting SET
                    web_name ='$web_name',
                    eng_name ='$eng_name',
                    description ='$description',
                    phone ='$phone'
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
                            window.location.href="setting.php";
                        }); },500);
                </script>';
        
            }

                }

                }else{
        if (empty($_POST["web_name"])) { 
            echo '
            <script>
                setTimeout(function()
                {Swal.fire({
                        position: "mid",
                        icon: "warning",
                        title: "ช่องชื่อธนาคารว่าง!",
                        html:"กรุณากรอกข้อมูลให้ครบถ้วน",
                        showConfirmButton: false,
                        timer: 3000
                      }).then(function() {
                        window.location.href="setting.php";
                    }); },500);
            </script>';
    
        }else{

                        $namea = bin2hex(random_bytes(16)).'_web.jpg';
                        function Upload($file,$path="images/"){
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
                        $sql2 = "UPDATE web_setting SET
                                web_name ='$web_name',
                                eng_name ='$eng_name',
                                description ='$description',
                                phone ='$phone',
                                web_logo ='$imgfile'
                                WHERE id = 1";
                        $result2 = mysqli_query($conn, $sql2) or die ("Error in query: $sql2 " . mysqli_error());
                        mysqli_close($conn);
                        
                        if($result2){
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
                                        window.location.href="setting.php";
                                    }); },500);
                            </script>';
                    
                        }
    
                    }
    
                    }
                
    
     

?>