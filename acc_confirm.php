<script src="package/dist/sweetalert2.all.min.js"></script>
<?php

include('server.php'); 
 $id = $_GET["id"]; 

 $query = "SELECT * FROM dd_member WHERE mem_user   = '$id'";  
 $result = mysqli_query($conn, $query);  
 $nums = mysqli_num_rows($result); 

 if($nums < 1){
  echo '
  <script>
      setTimeout(function()
      {Swal.fire({
              position: "mid",
              icon: "warning",
              title: "ไม่พบผู้ใช้นี้แล้ว",
              html:"กรุณาตรวจสอบข้อมูลอีกครั้ง",
              showConfirmButton: false,
              timer: 3000
            }).then(function() {
              window.location.href="account_student.php";
          }); },500);
  </script>';

 }else{

                    $sql1 = "UPDATE dd_member SET
                    acc_state ='1'
                    WHERE mem_user   = '$id'";
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
                                window.location.href="account_student.php";
                            }); },500);
                    </script>';
                }
               
        
            }

            
   
                
    
     

?>