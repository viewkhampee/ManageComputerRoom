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
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

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

  <!-- ======= Header ======= -->
  <?php include "top.php";
  include "menumem.php";
  $repairid = $_GET['id'];
  $re = "SELECT * FROM repair WHERE re_id = '$repairid' ORDER BY re_date DESC";
  $rep = mysqli_query($conn, $re);
  $repair = mysqli_fetch_array($rep);
  ?>
  <!-- ======= Hero Section ======= -->
  <section class="d-flex align-items-center">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        </br></br></br>
        <h2>ส่งเรื่องแจ้งซ่อม</h2>




        <center>
          <div class="row-center mt-5">



            <div class="col-lg-8 mt-5 mt-lg-0">
              <form action="update_repair.php" method="post" enctype="multipart/form-data">

                <div class="row-center gy-2 gx-md-3">
                  <div class="col-md-6 form-group">
                    <center> <img src="images/repair/<?php echo $repair['re_img']; ?>" class="avatar avatar-sm me-3"
                        id="userimg" alt="user1" style="border-radius: 10%;width: 100%;height: 100%;"></center>
                    <input style="border-radius: 30px;" type="text" name="re_user" hidden class="form-control"
                      value="<?php echo $repair['re_user']; ?>" readonly placeholder="ผู้ส่งเรื่อง" required>
                    <input style="border-radius: 30px;" type="text" name="re_id" hidden class="form-control"
                      value="<?php echo $repairid; ?>" readonly placeholder="ผู้ส่งเรื่อง" required>

                  </div>
                </div>
                <div class="row gy-2 gx-md-3">
                  <div class="form-group col-md-12">
                    <label class="text-dark">ชื่ออุปกรณ์</label>
                    <input style="border-radius: 30px;" type="text" class="form-control" name="re_name"
                      value="<?php echo $repair['re_name']; ?>" id="subject" placeholder="ชื่ออุปกรณ์" required>
                  </div>
                  <div class="form-group col-12">
                    <label class="text-dark">ปัญหาที่เกิด</label>
                    <textarea style="border-radius: 30px;" class="form-control" name="re_plobem" rows="5"
                      placeholder="ปัญหาที่เกิด" required><?php echo $repair['re_plobem']; ?></textarea>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="text-dark">ชื่อเจ้าของอุปกรณ์</label>
                    <input style="border-radius: 30px;" type="text" class="form-control" name="re_nameuser"
                      value="<?php echo $repair['re_nameuser']; ?>" id="subject"
                      placeholder="ชื่อเจ้าของอุปกรณ์ เพื่อรับการแจ้งเตือน" required>
                  </div>

                  <?php
                  $bo = "SELECT * FROM type_repair WHERE status = 1";
                  $boo = mysqli_query($conn, $bo);

                  ?>
                  <div class="form-group col-md-6">
                    <label class="text-dark">ประเภท</label>
                    <select style="border-radius: 30px;" class="form-control text-center text-dark" name="status">

                      <?php while ($book = mysqli_fetch_array($boo)) { ?>
                        <option value="<?php echo $book['re_id']; ?>" <?php if ($repair['type'] == $book['re_id']) {
                             echo 'selected';
                           } ?>>
                          <?php echo $book['re_name']; ?>
                        </option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group col-md-6">
                    <label class="text-dark">ส่งเรื่องเมื่อ</label>
                    <input style="border-radius: 30px;" type="text" readonly class="form-control" name="re_date"
                      value="<?php echo $repair['re_date']; ?>" id="subject" placeholder="วันที่ส่งเรื่อง" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="text-dark">สถานะ</label>
                    <input style="border-radius: 30px;" type="text" readonly class="form-control" name="re_date" value="<?php if ($repair['status'] == 0) {
                      ?> กำลังรอดำเนินการ
                          <?php } elseif ($repair['status'] == 1) {
                      ?>  ผู้ซ่อมรับของแล้ว
                        <?php } elseif ($repair['status'] == 2) {
                      ?>  กำลังซ่อม
                        <?php } elseif ($repair['status'] == 3) {
                      ?>  ซ่อมเสร็จแล้ว
                        <?php } elseif ($repair['status'] == 4) {
                      ?>  รอผู้ส่งคำร้องยืนยันรับของ 1/2
                        <?php } elseif ($repair['status'] == 5) {
                      ?>  คำร้องแจ้งซ่อมนี้สำเร็จแล้ว 2/2
                        <?php } elseif ($repair['status'] == 9) {
                      ?>  ไม่สามารถซ่อมได้
                        <?php } ?>" id="subject" placeholder="วันที่ส่งเรื่อง" required>
                  </div>
                </div>
                <?php if ($repair['status'] < 2) { ?>
                  <div class="row-center gy-2 gx-md-3">
                    <div class="col-md-12 form-group">
                      <input style="border-radius: 30px;" type="file" name="postimg"
                        class="form-control custom-file-input" id="pdfFile" onchange="showFileDetails()">
                      <label class="custom-file-label" for="pdfFile" id="fileLabel">แนบภาพอุปกรณ์หรือปัญหาที่เกิด</label>
                      <div class="sent-message text-danger">** โปรดนำอุปกรณ์ที่ต้องการส่งซ่อมมาส่งที่ **</div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-success"><i class="bi bi-wrench-adjustable-circle"></i>
                    ส่งเรื่องแจ้งซ่อม</button> <a href="repair_list.php" class="btn btn-dark">ย้อนกลับ</a></br></br>
                <?php } elseif ($repair['status'] == 4) { ?>
                  <div class="sent-message text-danger">** ยืนยันหลังจากคุณได้รับของที่แจ้งซ่อมคืนแล้วเท่านั้น! **</div>
                  <button type="button" class="btn btn-success" onclick="confirmBooking('5')"><i
                      class="bi bi-patch-check"></i> ยืนยันได้รับของแล้ว</button> <a href="repair_list.php"
                    class="btn btn-dark">ย้อนกลับ</a></br></br>
                <?php } elseif ($repair['status'] == 9) { ?>
                  <div class="sent-message text-danger">** ปัญหาที่เกิดการยกเลิกคำขอ **</div>
                  <textarea style="border-radius: 30px;" readonly class="form-control" name="re_plobem" rows="5"
                    placeholder="ปัญหาที่เกิด" required><?php echo $repair['comment']; ?></textarea> </br><a
                    href="repair_list.php" class="btn btn-dark">ย้อนกลับ</a></br></br>
                <?php } else { ?>
                  <a href="repair_list.php" class="btn btn-dark">ย้อนกลับ</a></br></br>
                <?php } ?>




            </div>
            </form>

          </div>

      </div>

    </div>
    </center>
  </section><!-- End Hero -->




  </main><!-- End #main -->
  <?php include 'footer.php'; ?>


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
  <script>
    function confirmBooking(status) {
      Swal.fire({
        title: 'ยืนยันคำร้อง!',
        text: "คุณได้รับของที่แจ้งซ่อมแล้วใช่ไหม ?",
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
            url: 'update_repair_stat.php',
            data: {
              status: status,
              re_id: '<?php echo $repairid; ?>'
            },
            success: function (response) {
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
                  'อัพเดตไม่สำเร็จ!',
                  'มีข้อผิดพลาด',
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
  <script>
    function showFileDetails() {
      var fileInput = document.getElementById("pdfFile");
      var fileLabel = document.getElementById("fileLabel");

      if (fileInput.files.length > 0) {
        var fileName = fileInput.files[0].name;
        fileLabel.innerHTML = '<b class="text-success"> แนบไฟล์ </b>' + fileName + '<b class="text-success"> สำเร็จแล้ว <i class="bi bi-check-lg fe-16"></i></b> ';
      } else {
        fileLabel.innerHTML = 'เลือกไฟล์';
      }
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