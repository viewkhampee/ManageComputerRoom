<script src="package/dist/sweetalert2.all.min.js"></script>
<?php 
include('server.php');

                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $status = $_POST['status'];
           
                $co = "SELECT * FROM contrac WHERE name = '$name' AND phone = '$phone'";
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
                title: "ข้อมูลซ้ำ!",
                text: "ข้อมูลการติดต่อนี้มีการเพิ่มไปก่อนแล้ว",
                showConfirmButton: false,
                timer: 3000
              }).then(function() {
                window.location.href="contrac_list.php";
            }); },500);
    </script>';    

  }else{
   
                  $sql = "INSERT INTO contrac (name, phone, status) VALUES ('$name','$phone','$status')";
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
                                window.location.href="contrac_list.php";
                            }); },500);
                    </script>';    
                  }
              }
            }
  
    
  