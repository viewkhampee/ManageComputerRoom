<script src="package/dist/sweetalert2.all.min.js"></script>
<?php

include('server.php');  
 $typeget = $_GET["type"];
 $mem_user = $_POST["mem_user"];
 $mem_name = $_POST["mem_name"];
 $acc_status = $_POST["acc_status"];
 $phone = $_POST["phone"];
 $type = $_POST["type"];
 $warp = $_POST["warp"];
 if($warp == 'student'){
  $warp = 'account_student.php';
 }elseif($warp == 'tech'){
  $warp = 'account.php';
 }else{
  $warp = 'account_admin.php';
 }
if($type == 'edit'){
$status = 5;
$mem_user  = $_POST["mem_user"];
            $check1 = "SELECT * FROM dd_member WHERE mem_user  = '$mem_user'";
            $result1 = mysqli_query($conn,$check1);
            $num1 = mysqli_num_rows($result1); 
            if($num1 > 1){
              echo '
              <script>
                  setTimeout(function()
                  {Swal.fire({
                          position: "mid",
                          icon: "warning",
                          title: "รหัสผู้ใช้ ซ้ำ!",
                          text: "รหัสผู้ใช้ นี้มีผู้ใช้แล้วกรุณาเปลี่ยน",
                          showConfirmButton: false,
                          timer: 3000
                        }).then(function() {
                          window.location.href="'.$warp.'";
                      }); },500);
              </script>';
                    }else{
                    $sql1 = "UPDATE dd_member SET
                    mem_name  = '$mem_name',
                    mem_status ='$status',
                    acc_state = '$acc_status',
                    phone  = '$phone'
                    WHERE mem_user  = '$mem_user'";
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
                                    window.location.href="'.$warp.'";
                                }); },500);
                        </script>';
                        
                            }
                          }
                        
}elseif($typeget == 'unban'){
  $idmem = $_POST['mem_user'];
  $sql1 = "UPDATE dd_member SET  
  mem_status ='0'
  WHERE mem_user  = '$idmem'";
  $result1 = mysqli_query($conn, $sql1) or die ("Error in query: $sql1 " . mysqli_error());
  mysqli_close($conn);
  if($result1){
      echo '
      <script>
          setTimeout(function()
          {Swal.fire({
                  position: "mid",
                  icon: "success",
                  title: "ปลดแบนสำเร็จ!",
                  html:"กำลังพาคุณกลับ รอสักครู่...",
                  showConfirmButton: false,
                  timer: 3000
                }).then(function() {
                  window.location.href="'.$warp.'";
              }); },500);
      </script>';
            }

}elseif($typeget == 'ban'){
  $idmem = $_POST['mem_user'];
  $sql1 = "UPDATE dd_member SET  
  mem_status ='9'
  WHERE mem_user  = '$idmem'";
  $result1 = mysqli_query($conn, $sql1) or die ("Error in query: $sql1 " . mysqli_error());
  mysqli_close($conn);
  if($result1){
      echo '
      <script>
          setTimeout(function()
          {Swal.fire({
                  position: "mid",
                  icon: "warning",
                  title: "แบนผู้ใช้สำเร็จ!",
                  html:"กำลังพาคุณกลับ รอสักครู่...",
                  showConfirmButton: false,
                  timer: 3000
                }).then(function() {
                  window.location.href="ban_acc.php";
              }); },500);
      </script>';
            }

}

       