<?php include "top.php" ?>
<footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-6 footer-contact">
        <h4><?php echo $setting['eng_name']; ?></h4>
        <p> <?php echo $setting['description']; ?> <br><br>
          <strong>Phone:</strong> <?php echo $setting['phone']; ?><br>
         
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Menu</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="home.php#hero">หน้าแรก</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="book_list.php">ประวัติการจอง</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="repair_list.php">ประวัติแจ้งซ่อม</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="contact.php">ติดต่อเจ้าหน้าที่</a></li>
       
        </ul>
      </div>

    

      <div class="col-lg-5 col-md-6 footer-newsletter">
        <h4>เข้าใช้งานห้องคอมพิวเตอร์</h4>
        <p>อยากเข้าใช้งานห้องคอมพิวเตอร์เริ่มจองคิวได้เลย</p>
    
        <a href="calcendal.php" class="btn btn-primary">จองเข้าใช้งาน!</a>
      </div>

    </div>
  </div>
</div>

</footer><!-- End Footer -->