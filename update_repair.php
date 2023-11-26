<script src="package/dist/sweetalert2.all.min.js"></script>
<?php

include('server.php'); 


$re_name = $_POST["re_name"];
$re_plobem = $_POST["re_plobem"];
$re_nameuser = $_POST["re_nameuser"];
$type = $_POST["status"];
$re_id = $_POST["re_id"];


  if ($_FILES["postimg"]["error"] != 0) { 


                    $sql1 = "UPDATE repair SET
                    re_name ='$re_name',
                    re_plobem ='$re_plobem',
                    re_nameuser ='$re_nameuser',
                    type ='$type'
                    WHERE re_id = $re_id";
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
                            window.location.href="repair_edit.php?id='.$re_id.'";
                        }); },500);
                </script>';
        
            }

                }else{

                        $namea = bin2hex(random_bytes(16)).'_repair.jpg';
                        function Upload($file,$path="images/repair/"){
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
                                $sql2 = "UPDATE repair SET
                                re_name ='$re_name',
                                re_plobem ='$re_plobem',
                                re_nameuser ='$re_nameuser',
                                type ='$type',
                                re_img ='$imgfile'
                                WHERE re_id = $re_id";
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
                                        window.location.href="repair_edit.php?id='.$re_id.'";
                                    }); },500);
                            </script>';
                    
                        }
    
                    }
    
                    
                
    
     

?>