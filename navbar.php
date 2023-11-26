<style type ="text/css">
  @font-face{
    font-family: Gimmick;
    src: url(fonts/Gimmick/FCGimmick-Bold.ttf) format("truetype");
  }body{ font-family: 'Gimmick', sans-serif; }
  </style>
  
<?php
date_default_timezone_set("Asia/Bangkok");
session_start();
if (!isset($_SESSION['mem_user'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login/loginad.php');
    }
      include 'server.php';
              $user = $_SESSION['mem_user'];
              $cuser = "SELECT * FROM dd_member WHERE mem_user='$user'";
              $querycheck = mysqli_query($conn,$cuser); 
              $user_record = mysqli_fetch_array($querycheck);  
      
              $set = "SELECT * FROM web_setting WHERE id = 1";
              $settin = mysqli_query($conn,$set); 
              $setting = mysqli_fetch_array($settin);  



           
    ?>

<link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-7" href=""><img src="images/<?php echo $setting['web_logo']; ?>" class="mr-2" alt="logo"/></a>
        
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
       

       
        <ul class="navbar-nav navbar-nav-right">
       
          <li class="nav-item nav-profile dropdown">
        
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
            <h6 class="font-weight-bold">
              <img src="images/user_img/<?php if(empty($user_record['user_img'])){echo 'none.jpg';}else{echo $user_record['user_img'];}?>" alt="profile">&nbsp;&nbsp;<?php echo $user_record['mem_name']; ?></h6></a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <a class="dropdown-item" href="edit_profile.php">
           <i class="ti-settings text-primary"></i>
                ตั้งค่าข้อมูลส่วนตัว
              </a>
              
              <a class="dropdown-item" href="logout.php">
                <i class="ti-power-off text-primary"></i>
                ออกจากระบบ
              </a>
            </div>
          </li>
         
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>

    <?php 
    