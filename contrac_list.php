
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
              
               ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <center><a href="contrac_insert.php"><button type="button" class="btn btn-dark" ><i class="icon-plus menu-icon"></i> เพิ่มการติดต่อ </button></a></center></br>
                  <h4 co="card-title">ข้อมูลติดต่อ</h4>
                  <?php $co = "SELECT * FROM contrac";
              $com = mysqli_query($conn,$co); 
              $comq = mysqli_num_rows($com);
                
              $numcom = 1;
              ?>
                  <p class="card-description">
                    มีช่องทางทั้งหมด <b class="text-danger"><?php echo $comq; ?></b> แบบ
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

  
                   
                  <div class="table-responsive">
                  <div id="searchresults"></div>
                <ul id="results" class="update">  
                    <table class="table">
                      <thead>
                       
                        <tr>
                          <th>ลำดับที่</th>
                          <th>ชื่อ-สกุล</th>
                          <th>เบอร์ติดต่อ</th>
                          <th>สถานะ</th>
                          <th>เเก้ไข</th>
                          <th>ลบ</th>
                        </tr>
                        
                      </thead>
                      <tbody>
                      <?php 

                      while($comp = mysqli_fetch_array($com)){ 
                     
                        ?>
                        <tr>
                          <td><?php echo $numcom; ?></td>
                          <td><?php echo $comp['name']; ?></td>
                          <td><?php echo $comp['phone']; ?></td>
                          <?php if($comp['status'] == 1){ ?>
                          <td><label class="badge badge-success"><b><i class="mdi mdi-checkbox-marked"></i> พร้อมใช้งาน</b></label></td>
                          <?php }else{ ?>
                            <td><label class="badge badge-warning"><b><i class="mdi mdi-alert-outline"></i> ไม่พร้อมใช้งาน</b></label></td>
                         <?php } ?>
                          
                          <td><a href="con_edit.php?id=<?php echo $comp['id_con']; ?>"><button type="button" class="btn btn-info"><b>เเก้ไข</b></button></a></td>
                          <td> <ul class="navbar-nav navbar-nav-right">
                         </br>
                         <li class="nav-item dropdown">
          <a href="" id="notificationDropdown" href="#" data-toggle="dropdown"><button type="button" class="btn btn-danger count-indicator dropdown-toggle" ><b>ลบ</b></button></a>
            <a class="nav-link " id="notificationDropdown" href="#" data-toggle="dropdown">
             
            </a>
    
               <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
               <p class="mb-0 font-weight-normal float-left dropdown-header text-danger">การลบข้อมูล</p>
              
              <a class="dropdown-item preview-item" href="del_con.php?id=<?php echo $comp['id_con']; ?>">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-danger">
                  <i class="mdi mdi-close mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal text-danger">ยืนยันการลบ</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    ลบ <?php echo $comp['name']; ?>
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
          </li>
        </td>
                          
                     
                        
                        
                      </tbody>
                     
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
