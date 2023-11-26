
<?php $user = $_SESSION['mem_user'];
      $cuser = "SELECT * FROM dd_member WHERE mem_user='$user'";
              $querycheck = mysqli_query($conn,$cuser); 
              $user_record = mysqli_fetch_array($querycheck);  ?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">หน้าแรก</span>
            </a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="queuelist.php">
              <i class="mdi mdi-calendar-multiple menu-icon"></i>
              <span class="menu-title">จองคิวเข้าใช้</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="mdi mdi-bulletin-board menu-icon"></i>
              <span class="menu-title">รายการจองคิว</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="mdi mdi-border-all menu-icon"></i>
              <span class="menu-title">ประวัติการจองทั้งหมด</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="mdi mdi-wechat menu-icon"></i>
              <span class="menu-title">ติดต่อผู้ดูแล</span>
            </a>
          </li>
         
        

        </ul>
      </nav>