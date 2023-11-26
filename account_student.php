
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
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input style="border-radius: 30px;"  type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input style="border-radius: 30px;"  class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input style="border-radius: 30px;"  class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input style="border-radius: 30px;"  class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input style="border-radius: 30px;"  class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input style="border-radius: 30px;"  class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.php -->
      <?php include 'server.php';
      $user = $_SESSION['mem_user'];
      $cuser = "SELECT * FROM dd_member WHERE mem_user = '$user'";
              $querycheck = mysqli_query($conn,$cuser); 
              $user_record = mysqli_fetch_array($querycheck);  
       if($user_record['mem_status'] == 1){
              include('dev_menu.php');
             
        }elseif($user_record['mem_status'] >= 7){
          include('menu.php');
        
        }else{
              include('menu_mem.php');
        };
        $b = "SELECT * FROM dd_member WHERE mem_status <= 5 AND acc_state = 0 ORDER BY mem_status DESC";
        $ban = mysqli_query($conn,$b); 
        $numq = mysqli_num_rows($ban);   
               ?>
      <!-- partial -->
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
                          <th>ยืนยัน</th>
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
                          <?php  
                       
              ?>
                      
                          <?php if($bank['mem_status'] == 0){ ?>
                          <td><label class="badge badge-success"><b><i class="mdi mdi-account-multiple"></i> นักศึกษา</b></label></td>
                          <?php }elseif($bank['mem_status'] == 1){ ?>
                            <td><label class="badge badge-info"><b><i class="mdi mdi-account-star"></i> ผู้ใช้ทั่วไป</b></label></td>
                         <?php }elseif($bank['mem_status'] == 5){ ?>
                          <td><label class="badge badge-danger text-white"><b><i class="mdi mdi-account-key"></i> อาจารย์</b></label></td>
                         <?php } ?>
                          
                         <td><a href="acc_confirm.php?id=<?php echo $bank['mem_user']; ?>"><button type="button" class="btn btn-success "><b>ยืนยันเข้าระบบ</b></button></a></td>
                         
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
