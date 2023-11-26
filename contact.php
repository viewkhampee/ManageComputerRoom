<!DOCTYPE html>
<html lang="en">

<head>
  <?php
 
 include "top.php"; 

 ?>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
 
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

  <!-- =======================================================
  * Template Name: OnePage
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php  include "top.php"; 
  include "menumem.php"; ?> 

  <?php 
   $co = "SELECT * FROM contrac";
   $con = mysqli_query($conn,$co); 
   
   ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero2" class="d-flex align-items-center">
    <div class="container position-relative scrollto" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center scrollto">
        <div class="col-xl-7 col-lg-9 text-center scrollto">
          <h1><?php echo "ติดต่อเจ้าหน้าที่";?></h1>
          <?php while($contr = mysqli_fetch_array($con)){ ?>
          <h2><?php echo $contr['name']; ?> เบอร์ติดต่อ <?php echo $contr['phone']; ?></h2>
          <?php } ?>
        
        </div>
      </div></br>
        <div class="text-center">
            <!-- <a href="calcendal.php" class="btn btn-info scrollto">จองเข้าใช้งานห้องคอม</a> <a href="repair.php" class="btn btn-warning text-white scrollto">ส่งเรื่องแจ้งซ่อม</a> -->
        </div>
      

    </div>
  </section><!-- End Hero -->

  <main id="main">
 
    

    <!-- ======= About Section ======= -->
   

   


  </main><!-- End #main -->
<?php include 'footer.php'; ?>
 

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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