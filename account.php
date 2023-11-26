
<!DOCTYPE html>
<html lang="en">

<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php include 'top.php'; ?>
  <title><?php echo $setting['web_name']; ?></title>
 
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
 
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
 
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
 
    <?php include 'navbar.php'; ?>
 
    <div class="container-fluid page-body-wrapper">
  
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      
   
    
      <?php include 'server.php';
      $user = $_SESSION['mem_user'];
      $cuser = "SELECT * FROM dd_member WHERE mem_user='$user'";
              $querycheck = mysqli_query($conn,$cuser); 
              $user_record = mysqli_fetch_array($querycheck);  
       if($user_record['mem_status'] == 1){
              include('dev_menu.php');
              
        }elseif($user_record['mem_status'] >= 7){
          include('menu.php');
          
        }else{
              include('menu_mem.php');
        };
        $b = "SELECT * FROM dd_member WHERE mem_status <= 5 AND acc_state = 1 ORDER BY mem_status DESC";
        $ban = mysqli_query($conn,$b); 
        $numq = mysqli_num_rows($ban);
               ?>
   
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h1 class="card-title .h1">ข้อมูลบัญชีผู้ใช้</h1>
                  
                  <p class="card-description">
                    มีบัญชีทั้งหมด <b class="text-danger"><?php echo $numq; ?></b> บัญชี
                  </p>
                  <script src="../assets/js/config.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("input").keyup(function () {
            $('#results').html('');
            var searchString = $("#search_box").val();
            var data = 'search_text=' + searchString;
            if (searchString) {
                $.ajax({
                    type: "POST",
                    url: 'search_acc.php',
                    data: data,
                    dataType: 'text',
                    async: false,
                    cache: false,
                    success: function (result) {
                        $('#results').html(result);
                        //window.location.reload();

                    }
                });
            }
        });
    });
  </script>

 
                     <div class="ms-md-auto pe-md-10 d-flex align-items-center">                
                  <div style="margin:20px auto; text-align: center;">
                      <form method="post" action="search_acc.php">
                          <input style="border-radius: 30px;"  type="text" name="search_text" id="search_box" class='search_box form-control text-center'  placeholder="***ป้อนชื่อผู้ใช้***"></br> 
                          <tr>
                         <td><input style="border-radius: 30px;"  type="submit" value="ค้นหา" class="search_button btn btn-sm btn-info"></td>
                         <td><a href="account.php"  class="btn btn-sm text-white btn-warning">รีเซ็ตค่าค้นหา</a> </td> </br>
                       </tr>
                         
                      </form>
                    
                  </div>
                  </div>
                  <div class="table-responsive">
                  <div id="searchresults"></div>
                <ul id="results" class="update">  
                    <table class="table">
                      <thead>
                       
                        <tr>
                          <th>รูปโปรไฟล์</th>
                          <th>รหัสผู้ใช้</th>
                          <th>ชื่อ-สกุล</th>
                          <th>เบอร์โทรศัพท์</th>
                          <th>สถานะ</th>
                          <th>ปรับแต่ง</th>
                         
                          <th>ลบ</th>
                         
                        </tr>
                        
                      </thead>
                      <tbody>
                      <?php while($bank = mysqli_fetch_array($ban)){ ?>
                        <tr>
                          
                        <td class="align-middle">
                        <div class="d-flex px-4 py-1">
                            <img src="images/user_img/<?php if(empty($bank['user_img'])){echo 'none.jpg';}else{echo $bank['user_img'];}?>" class="avatar avatar-sm me-3" alt="user1" style="border-radius: 10%;">
                        </div>
                      </td>
                         
                          <td><?php echo $bank['mem_user']; ?></td>
                          <td><?php echo $bank['mem_name']; ?></td>
                          <td><?php echo $bank['phone']; ?></td>
                          <?php if($bank['mem_status'] == 0){ ?>
                          <td><label class="badge badge-success"><b><i class="mdi mdi-account-multiple"></i> นักเรียน</b></label></td>
                          <?php }elseif($bank['mem_status'] == 1){ ?>
                            <td><label class="badge badge-warning"><b><i class="mdi mdi-account-star"></i>ผู้ใช้ทั่วไป</b></label></td>
                         <?php }elseif($bank['mem_status'] == 5){ ?>
                          <td><label class="badge badge-danger text-white"><b><i class="mdi mdi-account-key"></i> อาจารย์</b></label></td>
                         <?php } ?>
                          
                         <td><a href="acc_edit.php?id=<?php echo $bank['mem_user']; ?>&type=tech"><button type="button" class="btn btn-info"><b>ปรับแต่ง</b></button></a></td>
                         <td> <ul class="navbar-nav navbar-nav-right">
                         </br>
                         <li class="nav-item dropdown">
          <a href="" id="notificationDropdown" href="#" data-toggle="dropdown"><button type="button" class="btn btn-danger count-indicator dropdown-toggle" ><b>ลบ</b></button></a>
            <a class="nav-link " id="notificationDropdown" href="#" data-toggle="dropdown">
             
            </a>
            <?php if ($user_record['mem_status'] <= 7){ ?>
               <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
               <p class="mb-0 font-weight-normal float-left dropdown-header text-danger">การลบข้อมูล</p>
             
              
               <a class="dropdown-item preview-item" href="del_account.php?id=<?php echo $bank['mem_user']; ?>">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-danger">
                  <i class="mdi mdi-close mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal text-danger">ยืนยันการลบ</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    แบน <?php echo $bank['mem_user']; ?>
                  </p>
                </div>
              </a>

            <?php } } ?>
              
            </div>
          </li>
        </td>
                          
                     
                        
                        
                      </tbody>
                    </table>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            </div>
            
         
       
     
      </div>
     
    </div>
 
  </div>
  
  <script src="vendors/js/vendor.bundle.base.js"></script>
 
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
 
 
</body>

</html>
