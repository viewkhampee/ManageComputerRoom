<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <?php include "top.php";  

?>
  <title>Inner Page - OnePage Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- =======================================================
  * Template Name: OnePage
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<?php 
      include "top.php"; 
      include "menumem.php"; ?> 

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
         
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
 
            <div class="col-lg-20 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row">
   <!-- partial -->
   <?php
      $mysqli = new mysqli('localhost', 'root', '', 'room');
      $day = $_GET['date'];
      $month = $_GET['month'];
      $year = $_GET['year'];
      $date =  "$year-$month-$day";
      $com = $_GET['com'];
    
      if(isset($_GET['date'])){
          
          $stmt = $mysqli->prepare("select * from bookings where date =? and computer =?");
          $stmt->bind_param('ss', $date, $com);
          $bookings = array();
          if($stmt->execute()){
              $result = $stmt->get_result();
              if($result->num_rows>0){
                  while($row = $result->fetch_assoc()){
                      $bookings[] = $row['timeslot'];
                  }
                  
                  $stmt->close();
              }
          }
      }

    

$set ="SELECT * FROM settingbook WHERE id = 1";
$set2 = mysqli_query($conn,$set);
$setting = mysqli_fetch_array($set2);



$duration = $setting['duration'];
$cleanup = 0;
$start =  $setting['start'];
$end = $setting['end'];
function timeslots($duration, $cleanup, $start,$end){
$start = new DateTime($start);
$end = new DateTime($end);
$interval = new DateInterval("PT".$duration."M");
$cleanupInterval = new DateInterval("PT".$cleanup."M");
$slots = array();

for($intStart = $start;$intStart<$end;$intStart->add($interval)->add($cleanupInterval)){
  $endPeriod = clone $intStart;
  $endPeriod->add($interval);
  if($endPeriod>$end){
      break;
  }

  $slots[] = $intStart->format("H:iA")." - ".$endPeriod->format("H:iA");

}
return $slots;
}

?>
<style>

.button-container {
    margin-top: 50px; /* ปรับระยะห่างด้านบนของปุ่ม */
    /* ปรับระยะห่างด้านขวาของปุ่ม */
  }


</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<?php
date_default_timezone_set('asia/bangkok');
$idcom = $_GET['com'];
$nco = "SELECT * FROM comp_state  WHERE Id_comp = '$idcom'";
$ncom = mysqli_query($conn,$nco); 
$comroom = mysqli_fetch_array($ncom);
$numcop = mysqli_num_rows($ncom);
?>

  <div class="text-center row">
  <h3 class="text-dark">วันที่ : <b><?php echo $date; ?></b></h3>
  <h3 class="text-dark">ห้องคอม : <b><?php echo $comroom['comp_name']; ?></b></h3>
      <?php $timeslots = timeslots($duration,$cleanup,$start,$end);
      foreach($timeslots as $ts){  ?>
   <div class="col-5 col-md-3 button-container" data-aos="zoom-in" data-aos-delay="10">

          <?php if(in_array($ts,$bookings)){?>
            <button class="btn btn-dark">มีคนจองเวลานี้แล้ว</button>
          
            <?php }elseif($date != date('Y-m-d')){?>
              <button type="button" class="btn btn-info" onclick="confirmBooking('<?php echo $ts; ?>')"><?php echo $ts;?></button>
                  <?php }elseif($ts < date('H:iA')){?>
                    <button class="btn btn-dark"><?php echo $ts;?></button>
              <?php }else{ ?>
                <button type="button" class="btn btn-info" onclick="confirmBooking('<?php echo $ts; ?>')"><?php echo $ts;?></button>
              <?php }?>
              
</div>
      
  <?php } ?>

 </div>
                  </div>
                  
                </div>
                <center><a href="computer.php?date=<?php echo $day; ?>&&month=<?php echo $month; ?>&&year=<?php echo $year; ?>"><button type="button" class="btn btn-dark userinfo" ><i class="fas fa-plus"></i>&nbsp;&nbsp;ย้อนกลับ</button></a></center>
              </div>
             
            </div>
          </div>
        </div>


  </main><!-- End #main -->
<?php include 'footer.php'; ?>
  
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script>
function confirmBooking(compName) {
  Swal.fire({
    title: 'ยืนยันการเข้าใช้งาน ?',
    text: "ยืนยันว่าคิวนี้ได้เข้าใช้งานแล้ว",
    icon: 'success',
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
        url: 'insert_booking.php', // Replace with the actual URL to your PHP script
        data: {
          compName: compName,
          user: '<?php echo $user; ?>',
          com: '<?php echo $com; ?>',
          date: '<?php echo $date; ?>'
         
          // Add any other data you need to send
        },
        success: function(response) {
          if (response === 'success') {
            Swal.fire(
              'ยืนยันเข้าใช้งาน!',
              'การเข้าใช้งานได้ถูกบันทึกแล้ว',
              'success'
            ).then(() => {
              // You can add any additional logic here
              // For example, redirect to a thank-you page or reload the page
              window.location.reload(); // Reload the page
            });
          } else {
            Swal.fire(
              'ยืนยันเข้าใช้งาน!',
              'การเข้าใช้งานได้ถูกบันทึกแล้ว',
              'error'
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
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>