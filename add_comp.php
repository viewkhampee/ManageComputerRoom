<script src="package/dist/sweetalert2.all.min.js"></script>
<?php 
include('server.php');

                $comp_name = $_POST['comp_name'];
                $comp_status = $_POST['comp_status'];
                $comp_plob = $_POST['comp_plob'];
                $comroom = $_POST['comroom'];
               
                $co = "SELECT * FROM comp_state WHERE comp_name ='$comp_name'";
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
                title: "ข้อมูลคอมพิวเตอร์ซ้ำ!",
                text: "ข้อมูลคอมพิวเตอร์ซ้ำ  กรุณาตรวจสอบอีกครั้ง...",
                showConfirmButton: false,
                timer: 3000
              }).then(function() {
                window.location.href="table_com.php";
            }); },500);
    </script>';    

  }else{
   
                  $sql = "INSERT INTO comp_state (comp_name, comp_status, comp_plob) VALUES ('$comp_name','$comp_status','$comp_plob')";
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
                                window.location.href="table_com.php";
                            }); },500);
                    </script>';    
                  }
              }
            }
  
    
  