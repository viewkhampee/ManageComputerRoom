<script src="package/dist/sweetalert2.all.min.js"></script>
<?php 
include('server.php');

                $status = $_POST['status'];
                $re_name = $_POST['re_name'];
           
               
                $co = "SELECT * FROM type_repair WHERE re_name ='$re_name'";
              $com = mysqli_query($conn,$co); 
              $comp = mysqli_num_rows($com);
            

if(isset($_POST['letsgo_login'])){

  if($comp > 0){
    echo '
    <script>
        setTimeout(function()
        {Swal.fire({
                position: "mid",
                icon: "error",
                title: "ข้อมูลประเภทซ้ำ!",
                text: "ข้อมูลประเภทซ้ำ  กรุณาตรวจสอบอีกครั้ง...",
                showConfirmButton: false,
                timer: 3000
              }).then(function() {
                window.location.href="type_insert.php";
            }); },500);
    </script>';    

  }else{
   
                  $sql = "INSERT INTO type_repair (re_name, status) VALUES ('$re_name','$status')";
                  $query = mysqli_query($conn,$sql); 
                  if($query) {
                    echo '
                    <script>
                        setTimeout(function()
                        {Swal.fire({
                                position: "mid",
                                icon: "success",
                                title: "บันทึกข้อมูลสำเร็จ!",
                                text: "ได้เพิ่มข้อมูลเข้าสู่ระบบแล้วรอสักครู้...",
                                showConfirmButton: false,
                                timer: 3000
                              }).then(function() {
                                window.location.href="type_repair.php";
                            }); },500);
                    </script>';    
                  }
              }
            }
  
    
  