

<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-acc" aria-expanded="false" aria-controls="ui-acc">
              <i class="mdi mdi-account-multiple menu-icon"></i>
              <span class="menu-title">จัดการบัญผู้ใช้</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-acc">
              <ul class="nav flex-column sub-menu">
              <?php if($user_record['mem_status'] == 7){ ?>
              <li class="nav-item"> <a class="nav-link" href="account_student.php">คำร้องขอสมัครใช้งาน</a></li>
                <li class="nav-item"> <a class="nav-link" href="account.php">บัญชีผู้ใช้ทั้งหมด</a></li>
              
               
              <?php }else{ ?>
                 <li class="nav-item"> <a class="nav-link" href="account_student.php">บัญชีผู้ใช้ทั้งหมด</a></li>
                 
                
            <?php  } ?>
                
          
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="contrac_list.php">
              <i class="mdi mdi-cellphone-android menu-icon"></i>
              <span class="menu-title">ช่องทางติดต่อ</span>
            </a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="setting.php">
              <i class="mdi mdi-settings menu-icon"></i>
              <span class="menu-title">ตั้งค่าเว็ปไซต์</span>
            </a>
            </li></br>


          <label class="h5 text-center text-primary"><b>การเข้าใช้งานห้องคอม</b></label>
          <li class="nav-item">
            <a class="nav-link" href="table_com.php">
              <i class="mdi mdi-desktop-mac menu-icon"></i>
              <span class="menu-title">จัดการห้องคอมพิวเตอร์</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="queuelist.php">
              <i class="mdi mdi-calendar-clock menu-icon"></i>
              <span class="menu-title">รายการจองวันนี้</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="queuelistall.php">
              <i class="mdi mdi-border-all menu-icon"></i>
              <span class="menu-title">ประวัติการจองทั้งหมด</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="setting_book.php">
              <i class="mdi mdi-settings menu-icon"></i>
              <span class="menu-title">ตั้งค่าคิวการจอง</span>
            </a>
            </li>
        </br>
          <label class="h5 text-center text-primary"><b>การแจ้งซ่อม</b></label>
          <li class="nav-item">
            <a class="nav-link" href="repair_table.php">
              <i class="mdi mdi-wrench menu-icon"></i>
              <span class="menu-title">รายการแจ้งซ่อม </span>
            </a>
            </li>
     
            <li class="nav-item">
            <a class="nav-link" href="repair_tableall.php">
              <i class="mdi mdi-border-all menu-icon"></i>
              <span class="menu-title">ประวัติแจ้งซ่อมทั้งหมด</span>
            </a>
            <li class="nav-item">
            <a class="nav-link" href="type_repair.php">
              <i class="mdi mdi-border-all menu-icon"></i>
              <span class="menu-title">จัดการประเภท</span>
            </a>
          </li>
           
      
         
        </ul>
      </nav>