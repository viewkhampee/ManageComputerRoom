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
      $cuser = "SELECT * FROM dd_member WHERE mem_user='$user'";
              $querycheck = mysqli_query($conn,$cuser); 
              $user_record = mysqli_fetch_array($querycheck);  
        if($user_record['mem_status'] == 3){
              include('dev_menu.php');
        }elseif($user_record['mem_status'] != 0){
          include('menu.php');
        }else{
              include('menu_mem.php');
        }  
      $date = $_GET['date'];
      $id = $_GET['id'];
    
      $date2 = new DateTime($date);?>
      <!-- partial -->
      <div class="main-panel text-center">          
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-8 grid-margin stretch-card ">
              <div class="card">
                <div class="row">
                  <div class="col-md-20">
                    <div class="card-body text-center">
                    <h4 class="card-title">เลือกเวลาจอง</h4>
                    <h5 class="card-description">วันที่: <?php echo $date2 ->format('d-m-Y'); ?></h5>
                    <?php
            $mysqli = new mysqli('localhost', 'root', '', 'room');
            if(isset($_GET['date'])){
                
                $stmt = $mysqli->prepare("select * from bookings where date =? AND num_ball = '$id' AND confr < 7");
                $stmt->bind_param('s', $date);
                $bookings = array();
                if($stmt->execute()){
                    $result = $stmt->get_result();
                    if($result->num_rows>0){
                        while($row = $result->fetch_assoc()){
                            $bookings[] = $row['timeslot'];
                        }
                        
                        $stmt->close();
                    }
                }
            }

            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
              $phone = $_POST['phone'];
                $timeslot = $_POST['timeslot'];
              $service = $_POST['service'];
                $confr = $_POST['confr'];
                $barber = $_POST['barber'];
                $u_barber = $_POST['u_barber'];
                $stmt = $mysqli->prepare("select * from bookings where date =? AND  name =? AND  confr =?");
                $stmt->bind_param('sss', $date, $name, $confr);
                $item_sql="SELECT * FROM shop_item WHERE item_id = $item";
                $result = mysqli_query($conn,$item_sql);
                $sql2="SELECT * FROM user_profile WHERE level = 7";
                $test = mysqli_query($conn,$sql2);
                $admin = mysqli_fetch_array($test);
                    if(mysqli_num_rows($result) == 1){
                        $item_op = mysqli_fetch_array($result);
                        $check_coin = $user_record['point'] - ($item_op['item_price']);
                        if($check_coin < 0){
                            $title = 'พ้อยของคุณไม่เพียงพอ!'; $text = 'กรุณาเติมพ้อยให้เพียงพอก่อนจอง...'; $delay = '3000'; $link = 'main.php?page=pay';
                            msg_error($title,$text,$delay);
            
                }else{
           
            $sid = $user_record['U_SID'];
                $cynpass = $user_record['point'] - $item_op['item_price'];
                $sqlup = "UPDATE user_profile SET point = '".$cynpass."' WHERE U_SID = '".$sid."'";
                $query = mysqli_query($conn,$sqlup);
                $cyn2 = $admin['point'] + $item_op['item_price'];
                $sqlup2 = "UPDATE user_profile SET point = '".$cyn2."' WHERE level = 7 ";
                $query2 = mysqli_query($conn,$sqlup2);
            $stmt = $mysqli->prepare("INSERT INTO bookings (name, email, phone, date, timeslot, service, confr, barber, u_barber) VALUES (?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param('sssssssss', $name, $email, $phone, $date, $timeslot, $service, $confr, $barber, $u_barber);
            $stmt->execute();
            $title = 'จองคิวสำเร็จแล้ว!'; $text = 'นำรายงานการจองไปยืนยันกับช่างเมื่อถึงคิว....'; $delay = '3000'; $link = 'main.php?page=slip';
            msg_success($title,$text,$delay,$link);
            $bookings[]=$timeslot;
            $stmt->close();
            $mysqli->close();
           
        }
    }
    }
    $set ="SELECT * FROM settingbook WHERE id = 1";
    $set2 = mysqli_query($conn,$set);
    $setting = mysqli_fetch_array($set2);

    $ro ="SELECT * FROM roadroom WHERE id = $id";
    $roa = mysqli_query($conn,$ro);
    $road = mysqli_fetch_array($roa);

$duration = $setting['duration'];
$cleanup = 0;
$start =  $setting['start'];
$end = $setting['end'];
function timeslots($duration, $cleanup, $start,$end){
    $start = new DateTime($start);
    $end = new DateTime($end);
    $interval = new DateInterval("PT".$duration."M");
    $cleanupInterval = new DateInterval("PT".$cleanup."M");
    $slots = array();

    for($intStart = $start;$intStart<$end;$intStart->add($interval)->add($cleanupInterval)){
        $endPeriod = clone $intStart;
        $endPeriod->add($interval);
        if($endPeriod>$end){
            break;
        }

        $slots[] = $intStart->format("H:iA")." - ".$endPeriod->format("H:iA");

    }
	return $slots;
}

?>

<?php
date_default_timezone_set('asia/bangkok');

?>
 <form action="" method="post" enctype="multipart/form-data"> 
        <div class="text-center row"><br>
        
            <?php $timeslots = timeslots($duration,$cleanup,$start,$end);
            foreach($timeslots as $ts){  ?>
            <div class="col-md-4">
				<div class="form-group text-center">
				<?php if(in_array($ts,$bookings)){?>
                    <button class="btn btn-dark">มีคนจองคิวเวลานี้แล้ว</button>
                    <?php }elseif($date != date('Y-m-d')){?>
                      <a href="insert_book.php?time=<?php echo $ts; ?>&id=<?php echo $id; ?>&date=<?php echo $date; ?>"> <button type="button" class="btn btn-info book" ><?php echo $ts;?></button></a>
                    <?php }elseif($ts < date('H:iA')){?>
                        <button class="btn btn-danger"><?php echo $ts;?></button>
                    <?php }else{?>
                        <a href="insert_book.php?time=<?php echo $ts; ?>&id=<?php echo $id; ?>&date=<?php echo $date; ?>"> <button type="button" class="btn btn-info book" ><?php echo $ts;?></button></a>


                    <?php }?>

                    </div>
                    
			</div>
            
        <?php }?>
        
    
                   
        </div> </div>       
                  </div>    
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><?php echo $road['name']; ?></h4>
                
                  <div class="template-demo">
                  <img id="userimg" src="images/road/<?php if(empty($road['img'])){echo 'none.jpg';}else{echo $road['img'];}?>" style="border-radius: 10%;no-repeat center center;width: 70%;"></br></br>
                  <h4 class="card-title">รายละเอียด</h4>
                  <p><?php echo $road['detail']; ?></p>
                  <h4 class="card-title">ราคา / ชั่วโมง</h4>
                  <p><?php echo $road['price_h']; ?> บาท </p>
                    
                    </button>
                    
                  </div>
                    </form>
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
</body>

</html>
