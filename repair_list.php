<!DOCTYPE html>
<html lang="en">
<?php echo include "top.php"; ?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

 
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

   
  <link href="assets/css/style.css" rel="stylesheet">
 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
 
</head>

<body>

<?php 
      include "top.php"; 
      include "menumem.php"; ?> 

  <main id="main">

   

    <section class="inner-page">
 
      <div class="container">
      
            <div class="col-lg-16 grid-margin col-md-20 text-center">

              <div class="card">
                <div class="card-body">
                  
                  <div class="row">
                 


<?php
date_default_timezone_set('asia/bangkok');
$user = $_SESSION['mem_user'];
$c ="SELECT * FROM repair WHERE re_user = '$user' ORDER BY re_datesucc ASC";
$com = mysqli_query($conn,$c);

// กำหนดจำนวนแถวต่อหน้า
$rows_per_page = 5;

// หาจำนวนรายการทั้งหมด
$total_rows = mysqli_num_rows($com);

// หาจำนวนหน้าทั้งหมด
$total_pages = ceil($total_rows / $rows_per_page);

// ตรวจสอบหน้าปัจจุบัน
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

// คำนวณ OFFSET
$offset = ($current_page - 1) * $rows_per_page;

// แก้ SQL เพื่อเลือกแถวที่ถูกตัดแบ่งหน้า
$sql = "SELECT * FROM repair WHERE re_user = '$user' LIMIT $rows_per_page OFFSET $offset ";
$result = mysqli_query($conn, $sql);

$numcom = $offset + 1;


?>
<section id="repair" class="repair">
<h3>ประวัติการแจ้งซ่อม</h3></br>
<div class="text-center row-center">
        <div class="col-md-12">
    
                <div class="table-responsive">
    <table class="table table-striped table-bordered datatables" id="dataTable-1">
                      <thead>
                        <tr>
                          <th>ลำดับที่</th>
                          <th>วันที่</th>
                          <th>ชื่อผู้ใช้</th>
                          <th>อุปกรณ์</th>
                          <th>ประเภท</th>
                         
                          <th>สถานะ</th>
                          <th>อัพเดต</th>
                          <th>ปรับแต่ง</th>
                          
                     
                        </tr>
                      </thead>
                      <tbody>
                        <?php while($comp = mysqli_fetch_array($result)){ 
                          $type = $comp['type'];
                      $cs ="SELECT * FROM type_repair WHERE re_id = '$type'";
                      $comst = mysqli_query($conn,$cs);
                      $comstat = mysqli_fetch_array($comst); ?>
                          <tr>
                          <td><?php echo $numcom; ?></td>
                          <td class="align-middle text-center">
                        <div class="d-flex px-4 py-1">
                            <img src="images/repair/<?php echo $comp['re_img']; ?>" class="avatar avatar-sm me-3" alt="user1" style="border-radius: 10%;width: 100%;height: 100%;">
                        </div>
                      </td>
                            <td><?php echo $comp['re_user']; ?></td>
                            
                            <td><?php echo $comp['re_name']; ?></td>
                            <td><?php echo $comstat['re_name']; ?></td>
                            
                            <td><?php if($comp['status'] == 0){
                              ?> <b  class="text-warning"><i class="mdi mdi-av-timer"></i> กำลังรอดำเนินการ</b>
                          <?php  }elseif($comp['status'] == 1){
                            ?> <b  class="text-primary"><i class="mdi mdi-worker"></i> ผู้ซ่อมรับของแล้ว</b>
                        <?php  }elseif($comp['status'] == 2){
                            ?> <b  class="text-info"><i class="mdi mdi-wrench"></i> กำลังซ่อม</b>
                        <?php  }elseif($comp['status'] == 3){
                            ?> <b  class="text-success"><i class="mdi mdi-check"></i> ซ่อมเสร็จแล้ว</b>
                        <?php  }elseif($comp['status'] == 4){
                            ?> <b  class="text-success"><i class="mdi mdi-account-check"></i> รอผู้ส่งคำร้องยืนยันรับของ 1/2</b>
                        <?php  }elseif($comp['status'] == 5){
                            ?> <b  class="text-success"><i class="mdi mdi-check"></i> คำร้องแจ้งซ่อมนี้สำเร็จแล้ว 2/2</b>
                        <?php  }elseif($comp['status'] == 9){
                            ?> <b  class="text-danger"><i class="mdi mdi-close-circle"></i> ไม่สามารถซ่อมได้</b>
                        <?php  } ?></td>
                        <td><?php echo $comp['re_datesucc']; ?></td>
                        <?php if($comp['status'] == 0){ ?>
                        <td><a class="btn btn-warning" href="repair_edit.php?id=<?php echo $comp['re_id']; ?>"><i class="bi bi-pencil-fill"></i> ปรับแต่ง</a>
                          <?php }elseif($comp['status'] == 1){ ?>
                            <td><a class="btn btn-warning" href="repair_edit.php?id=<?php echo $comp['re_id']; ?>"><i class="bi bi-pencil-fill"></i> ปรับแต่ง</a>
                          <?php }elseif($comp['status'] == 4){ ?>
                            <td><a class="btn btn-success" href="repair_edit.php?id=<?php echo $comp['re_id']; ?>"><i class="bi bi-patch-check"></i> ยันยันรับของแล้ว</a>
                          <?php }else{ ?>
                            <td><a class="btn btn-info" href="repair_edit.php?id=<?php echo $comp['re_id']; ?>"><i class="bi bi-postcard"></i> รายละเอียด</a>
                          <?php } ?>
                          </tr>
                         <?php 
                         $numcom  = $numcom +  1; 
                        } ?>
                       
                        </tbody>
                        </table>
                     
                                                  <?php
                          if ($total_pages > 1) {
                          echo '<div class="col-md-12 mb-4"> ';
                            echo '<center>';
                            echo 'หน้าที่';
                            for ($i = 1; $i <= $total_pages; $i++) {
                              if ($i == $current_page) {
                                echo '&nbsp;<span class="current text-danger">' . $i . '</span>';
                              } else {
                                echo '&nbsp;<span class="current">' . $i . '</span>';
                              }
                            }
                            echo '</br>';

                            if ($current_page > 1) {
                              echo '<a class="btn btn-dark btn btn-sm" href="repair_list.php?id='. $comroom .'&page=' . ($current_page - 1) . '"><i class="mdi mdi-chevron-double-left"></i> หน้าก่อนหน้า</a> ';
                            }
                            if ($current_page < $total_pages) {
                          
                              echo '<a class="btn btn-info btn btn-sm" href="repair_list.php?id='. $comroom .'&page=' . ($current_page + 1) . '"> หน้าถัดไป <i class="mdi mdi-chevron-double-right"></i></a> ';
                            }
                            
                            echo '</center>';
                            echo '</div>';
                            echo '</div>';
                          }
                          ?>
                              </div>
                          </div>
                   
                          

                       
                 
                </div>
              
                </div>
             
             </div>
           </div>
         </div>

         </section>   

  </main> 
  <?php include 'footer.php'; ?>

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.min.js"></script>
  <script>$(document).ready(function() {
  $('#dataTable-1').DataTable({
    searching: true, // เปิดใช้งานการค้นหา
    paging: true // เปิดใช้งานการแบ่งหน้า
  });
});
</script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

 
  <script src="assets/js/main.js"></script>

</body>

</html>