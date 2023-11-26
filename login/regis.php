<script src="../package/dist/sweetalert2.all.min.js"></script>
<?php 
include('server.php');
                $username = $_POST['username'];
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $status = $_POST['status'];
                $mem_pass = $_POST['mem_pass'];
                $mem_confrim = $_POST['mem_confrim'];
                $acc_state = '0';
               

if(isset($_POST['letsgo_login'])){
  echo 'test';
  if(empty($_POST['username'])){
    echo '
    <script>
        setTimeout(function()
        {Swal.fire({
                position: "mid",
                icon: "warning",
                title: "รหัสผู้ใช้ ว่าง!",  
                html:"กรุณากรอกข้อมูลให้ครบถ้วน",
                showConfirmButton: false,
                timer: 3000
              }).then(function() {
                window.location.href="register.php";
            }); },500);
    </script>';
  }else{
        if(empty($_POST['name'])){
          echo '
          <script>
          setTimeout(function()
          {Swal.fire({
                  position: "mid",
                  icon: "error",
                  title: "ขื่อ-นามสกุล ว่าง!",  
                  html:"กรุณากรอกข้อมูลให้ครบถ้วน",
                  showConfirmButton: false,
                  timer: 3000
                }).then(function() {
                  window.location.href="register.php";
              }); },500);
      </script>';
        }else{
          if(empty($_POST['phone'])){
            echo '
            <script>
            setTimeout(function()
            {Swal.fire({
                    position: "mid",
                    icon: "warning",
                    title: "เบอร์โทรศัพท์ ว่าง!",  
                    html:"กรุณากรอกข้อมูลให้ครบถ้วน",
                    showConfirmButton: false,
                    timer: 3000
                  }).then(function() {
                    window.location.href="register.php";
                }); },500);
        </script>';
          }else{
            if($mem_pass != $mem_confrim){
              echo '
              <script>
              setTimeout(function()
              {Swal.fire({
                      position: "mid",
                      icon: "warning",
                      title: "รหัสผ่านกับยืนยันรหัสผ่านไม่ตรงกัน!",  
                      html:"กรุณากรอกข้อมูลให้ครบถ้วน",
                      showConfirmButton: false,
                      timer: 3000
                    }).then(function() {
                      window.location.href="register.php";
                  }); },500);
          </script>';
            }else{
            $check1 = "SELECT * FROM dd_member WHERE mem_user  = '$username'";
            $result1 = mysqli_query($conn,$check1);
            $num1 = mysqli_num_rows($result1); 
            if($num1 > 0){
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
                          window.location.href="register.php";
                      }); },500);
              </script>';
              
               
            }else{
            $check3 = "SELECT * FROM dd_member WHERE phone = '$phone'";
            $result3 = mysqli_query($conn,$check3);
            $num3 = mysqli_num_rows($result3);
            if($num3 > 0){
              echo '
              <script>
                  setTimeout(function()
                  {Swal.fire({
                          position: "mid",
                          icon: "warning",
                          title: "เบอร์โทรศัพท์ ซ้ำ!",
                          text: "เบอร์โทรศัพท์ นี้มีผู้ใช้แล้วกรุณาเปลี่ยน",
                          showConfirmButton: false,
                          timer: 3000
                        }).then(function() {
                          window.location.href="register.php";
                      }); },500);
              </script>';    
              }else{
              
                    
                  $sql = "INSERT INTO dd_member (mem_user, mem_pass, mem_name, mem_status, acc_state, phone) VALUES ('$username','$mem_pass','$name','$status','$acc_state','$phone')";
                  $query = mysqli_query($conn,$sql); 
                  if($query) {
                    echo '
                    <script>
                        setTimeout(function()
                        {Swal.fire({
                                position: "mid",
                                icon: "success",
                                title: "บันทึกข้อมูลสำเร็จ!",
                                text: "ได้เพิ่ม '.$name.' เข้าสู่ระบบแล้วรอสักครู้...",
                                showConfirmButton: false,
                                timer: 3000
                              }).then(function() {
                                window.location.href="loginad.php";
                            }); },500);
                    </script>';    
                  }
              }
              }
            }
          }
        }
      }
    }
  
    
  