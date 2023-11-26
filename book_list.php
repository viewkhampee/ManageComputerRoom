<!DOCTYPE html>
<html lang="en">
  <?php echo include "top.php"; ?>
<title><?php echo $setting['web_name']; ?></title>
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
      
      include "menumem.php"; ?> 

  <main id="main">

   

    <section class="inner-page">
      <div class="container">
      
            <div class="col-lg-12 grid-margin col-md-20 text-center">

              <div class="card">
                <div class="card-body">
                  
                  <div class="row">
                 
   
   <?php
      $mysqli = new mysqli('localhost', 'root', '', 'room');
     

?>

<?php
date_default_timezone_set('asia/bangkok');
$user = $_SESSION['mem_user'];
$c ="SELECT * FROM bookings WHERE mem_user = '$user' ORDER BY date DESC";
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
$sql = "SELECT * FROM bookings WHERE mem_user = '$user' LIMIT $rows_per_page OFFSET $offset";
$result = mysqli_query($conn, $sql);

$numcom = $offset + 1;


?>

<section id="history" class="history">
<h3>ประวัติการจอง</h3></br>
    <div class="text-center row-center">
        <div class="col-md-12">
    
                <div class="table-responsive">
    <table class="table table-striped table-bordered datatables" id="dataTable-1">
                      <thead>
                        <tr>
                        <th>ลำดับที่</th>
                          <th>วันที่</th>
                          <th>ชื่อผู้ใช้</th>
                          <th>ช่วงเวลา</th>
                          <th>คอมพิวเตอร์</th>
                         
                          <th>สถานะ</th>
                          <th>ยกเลิก</th>
                     
                        </tr>
                      </thead>
                      <tbody>
                        <?php while($comp = mysqli_fetch_array($result)){ 
                      $cs ="SELECT * FROM comp_state WHERE Id_comp = '".$comp['computer']."'";
                      $comst = mysqli_query($conn,$cs);
                      $comstat = mysqli_fetch_array($comst);
                         ?>
                          <tr>
                            <td><?php echo $numcom; ?></td>
                            <td><?php echo $comp['date']; ?></td>
                            <td><?php echo $comp['mem_user']; ?></td>
                            
                            <td><?php echo $comp['timeslot']; ?></td>
                            <td><?php echo $comstat['comp_name']; ?></td>
                            <?php if($comp['status'] == 1){
                              ?> <td><p class="text-info"><b><i class="bi bi-clock"></i> รอเข้าใช้งาน</b></p></td>
                               <td> <button type="button" class="btn btn-danger" onclick="confirmBooking('<?php echo $comp['id_book']; ?>')">ยกเลิก</button></td>
                             
                          <?php  }elseif($comp['status'] == 2){
                            ?> <td><p class="text-success"><b><i class="bi bi-bookmark-check"></i> เข้าใช้งานแล้ว</b></p></td>
                        <?php  } ?>
                       
                           
                   <?php $numcom  = $numcom +  1; ?>
                           
                          </tr>
                         <?php } ?>
                       
                        </tbody>
                        </table>
                                                  <?php
                          if ($total_pages > 1) {
                          echo '</br><div class="col-md-12 mb-4"> ';
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
                              echo '<a class="btn btn-dark btn btn-sm" href="book_list.php?id='. $comroom .'&page=' . ($current_page - 1) . '"><i class="mdi mdi-chevron-double-left"></i> หน้าก่อนหน้า</a> ';
                            }
                            if ($current_page < $total_pages) {
                          
                              echo '<a class="btn btn-info btn btn-sm" href="book_list.php?id='. $comroom .'&page=' . ($current_page + 1) . '"> หน้าถัดไป <i class="mdi mdi-chevron-double-right"></i></a> ';
                            }
                            
                            echo '</center>';
                            echo '</div>';
                            echo '</div>';
                          }
                          ?>
                              </div>
                          </div>
                   
           
              </section>
             
                       
                
                </div>
               
                </div>
             
             </div>
           </div>
         </div>

           

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

function confirmBooking(idbook) {
  Swal.fire({
    title: 'ยืนยันการยกเลิก ?',
    text: "ยืนยันการอัพเดตสถานะคำขอ",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'ยืนยัน',
    cancelButtonText: 'ยกเลิก'
  }).then((result) => {
    if (result.isConfirmed) {
      // User confirmed, send AJAX request to insert data into MySQL
      $.ajax({
    type: 'POST',
    url: 'update_cancel.php',
    data: {
      idbook: idbook,
      status: '<?php echo '9'; ?>'
    },
    success: function(response) {
      if (response === 'success') {
            Swal.fire(
              'อัพเดตสำเร็จ!',
              'สถานะได้รับการอัพเดตแล้ว',
              'success'
            ).then(() => {
              // You can add any additional logic here
              // For example, redirect to a thank-you page or reload the page
              window.location.reload(); // Reload the page
            });
          } else {
            Swal.fire(
              'อัพเดตสำเร็จ!',
              'สถานะได้รับการอัพเดตแล้ว',
              'success'
            ).then(() => {
              // You can add any additional logic here
              // For example, redirect to a thank-you page or reload the page
              window.location.reload(); // Reload the page
            });
          }
        }
      });
    }
  });
}
</script>
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