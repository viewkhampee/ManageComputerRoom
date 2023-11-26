<header id="header" class="fixed-top">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <div class="container d-flex align-items-center justify-content-between">
    <?php include "top.php"; ?> 
      <h1 class="logo"><a href="home.php"><img src="images/<?php echo $setting['web_logo']; ?>" alt="logo"></a>โรงเรียนพุนพินพิทยาคม</h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="home.php#hero">หน้าแรก</a></li>
          <li><a class="nav-link scrollto" href="book_list.php#history">ประวัติการจอง</a></li>
          <li><a class="nav-link scrollto" href="repair_list.php#repair">ประวัติแจ้งซ่อม</a></li>
          <li><a class="nav-link scrollto" href="contact.php#hero2">ติดต่อเจ้าหน้าที่</a></li>
        
          <li class="dropdown"><b><a href="#"><span><?php  echo $user;  ?></span> <i class="bi bi-chevron-down"></i></a></b>
            <ul>
     
              <li><a href="logout.php">ออกจากระบบ</a></li>
        
            </ul>
          </li>
         
            
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  