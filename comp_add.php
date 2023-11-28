<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php include 'top.php'; ?>
  <title><?php echo $setting['web_name']; ?></title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.php -->
    <?php include 'navbar.php'; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.php -->
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
    
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.php -->
      <?php include 'server.php';
      $user = $_SESSION['mem_user'];
      $comroom = $_GET['id'];
      $cuser = "SELECT * FROM dd_member WHERE mem_user='$user'";
              $querycheck = mysqli_query($conn,$cuser); 
              $user_record = mysqli_fetch_array($querycheck);  
       if($user_record['mem_status'] == 1){
              include('dev_menu.php');
              $b = "SELECT * FROM dd_member WHERE mem_status = 1 ORDER BY mem_status DESC";
              $ban = mysqli_query($conn,$b); 
              $numq = mysqli_num_rows($ban);  
        }elseif($user_record['mem_status'] >= 7){
          include('menu.php');
          $b = "SELECT * FROM dd_member WHERE mem_status = 1 ORDER BY mem_status DESC";
              $ban = mysqli_query($conn,$b); 
              $numq = mysqli_num_rows($ban);
        }else{
              include('menu_mem.php');
        };
        $co = "SELECT * FROM comroom WHERE room_id = $comroom";
        $com = mysqli_query($conn,$co); 
        $comq = mysqli_num_rows($com);

        // กำหนดจำนวนแถวต่อหน้า
        $rows_per_page = 10;
        
        // หาจำนวนรายการทั้งหมด
        $total_rows = mysqli_num_rows($com);
        
        // หาจำนวนหน้าทั้งหมด
        $total_pages = ceil($total_rows / $rows_per_page);
        
        // ตรวจสอบหน้าปัจจุบัน
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        
        // คำนวณ OFFSET
        $offset = ($current_page - 1) * $rows_per_page;
        
        // แก้ SQL เพื่อเลือกแถวที่ถูกตัดแบ่งหน้า
        $sql = "SELECT * FROM comroom WHERE room_id = $comroom LIMIT $rows_per_page OFFSET $offset";
        $result = mysqli_query($conn, $sql);
        
        $numcom = $offset + 1;

        

        $ro = "SELECT * FROM comp_state WHERE Id_comp = $comroom";
        $roo = mysqli_query($conn,$ro); 
        $room = mysqli_fetch_array($roo);  
        $numcom = 1;
          ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <form action="add_computer.php" method="post" id="dateForm" enctype="multipart/form-data" > 
                <center>
                  <div class="col-md-2 mb-4">
                      <label for="exampleInputUsername1">จำนวนคอมพิวเตอร์ห้อง </br> <b class="text-info h3"><?php echo $room['comp_name']; ?> </b></label>
                      <input style="border-radius: 30px;"  style="border-radius: 30px;" type="text" hidden name="room_id" value="<?php echo $comroom; ?>" class="form-control" id="exampleInputUsername1" required>
                      <input style="border-radius: 30px;"  style="border-radius: 30px;" type="text" hidden name="comnow" value="<?php if($comq == 0){ ?>1<?php }else{ echo $comq+1; } ?>" class="form-control" id="exampleInputUsername1"  required>
                      <input style="border-radius: 30px;"  style="border-radius: 30px;" type="text" name="com_name"  class="form-control"  OnKeyPress="return chkNumber(this)" maxlength="2" minlength="1" autocomplete="off" id="exampleInputUsername1" placeholder="ป้อนจำนวนคอมที่จะเพิ่ม" required>
                    </div>
                   
                    <div class="col-md-6 mb-4">
                    <button type="submit" name="letsgo_login" class="btn btn-warning mr-2">เพิ่ม</button> <a href="table_com.php" class="btn btn-dark mr-2">ย้อนกลับ</a>
                 
                     </div></center>
                  </form>
                  
                  <h4 co="card-title">ข้อมูลห้องคอมพิวเตอร์ : <b class="text-info h3"><?php echo $room['comp_name']; ?> </b></h4>
                 
             
                  <p class="card-description">
                    มีคอมพิวเตอร์ทั้งหมด <b class="text-danger"><?php echo $comq; ?></b> เครื่อง
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
                                          function chkNumber(ele)
                                        {
                                        var vchar = String.fromCharCode(event.keyCode);
                                        if ((vchar<'0' || vchar>'9')) return false;
                                        ele.onKeyPress=vchar;
                                        }
                                        </script>

  
                   
                  <div class="table-responsive">
                  <div id="searchresults"></div>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ลำดับที่</th>
                        <th>ชื่อ</th>
                        <th>สถานะ</th>
                        <th>ปัญหา</th>
                        <th>เเก้ไข</th>
                        <th>ลบ</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      while ($comp = mysqli_fetch_array($result)) {
                        $idcom = $comp['Id_comp'];
                        $nco = "SELECT * FROM comroom  WHERE room_id = '$idcom'";
                        $ncom = mysqli_query($conn,$nco); 
                        $numcop = mysqli_num_rows($ncom);
                        ?>
                        <tr>
                          <td><?php echo $numcom; ?></td>
                          <td><?php echo $comp['com_name']; ?></td>
                          <?php if($comp['status'] == 1){ ?>
                          <td><label class="badge badge-success"><b><i class="mdi mdi-checkbox-marked"></i> พร้อมใช้งาน</b></label></td>
                          <?php }elseif($comp['status'] == 0){ ?>
                            <td><label class="badge badge-warning"><b><i class="mdi mdi-alert-outline"></i> มีปัญหา</b></label></td>
                         <?php }elseif($comp['status'] == 9){ ?>
                            <td><label class="badge badge-danger"><b><i class="mdi mdi-block-helper"></i> ไม่สามารถใช้งานได้</b></label></td>
                         <?php } ?>
                          <td><?php echo $comp['plobem']; ?></td>
                         
                          <td><a href="cominroom_edit.php?id=<?php echo $comp['com_id']; ?>"><button type="button" class="btn btn-info"><b>เเก้ไข</b></button></a></td>
                          <td> <ul class="navbar-nav navbar-nav-right">
                         </br>
                         <li class="nav-item dropdown">
          <a href="" id="notificationDropdown" href="#" data-toggle="dropdown"><button type="button" class="btn btn-danger count-indicator dropdown-toggle" ><b>ลบ</b></button></a>
            <a class="nav-link " id="notificationDropdown" href="#" data-toggle="dropdown">
             
            </a>
    
               <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
               <p class="mb-0 font-weight-normal float-left dropdown-header text-danger">การลบข้อมูล</p>
              
              <a class="dropdown-item preview-item" href="del_comp.php?id=<?php echo $comp['com_id']; ?>&room=<?php echo $comroom;?>">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-danger">
                  <i class="mdi mdi-close mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal text-danger">ยืนยันการลบ</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    ลบ <?php echo $comp['comp_name']; ?>
                  </p>
                </div>
              </a>

            </div>
          </li>
        </td>
                   <?php $numcom  = $numcom +  1; ?>
                      </tr>
                      <?php } ?>
            </div>
           

                      </tbody>
                      
                    </table>
                    <?php
if ($total_pages > 1) {
echo '<div class="col-md-12 mb-4"> ';
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
    echo '<a class="btn btn-dark text-white btn btn-sm" href="comp_add.php?id='. $comroom .'&page=' . ($current_page - 1) . '"><i class="mdi mdi-chevron-double-left"></i> หน้าก่อนหน้า</a> ';
  }
  if ($current_page < $total_pages) {
 
    echo '<a class="btn btn-info text-white btn btn-sm" href="comp_add.php?id='. $comroom .'&page=' . ($current_page + 1) . '"> หน้าถัดไป <i class="mdi mdi-chevron-double-right"></i></a> ';
  }
  
  echo '</center>';
  echo '</div>';
  echo '</div>';
}
?>
                    </ul>
                 
                  </div>
                </div>
              </div>
            </div>
            </div>
            
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.php -->
       
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>