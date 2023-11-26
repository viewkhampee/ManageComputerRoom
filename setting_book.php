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
 
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/select2/select2.min.css">
  <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
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
        if($user_record['mem_status'] == 3){
              include('dev_menu.php');
        }elseif($user_record['mem_status'] != 0){
          include('menu.php');
        }else{
              include('menu_mem.php');
        }  ?>
   
      <div class="main-panel">    
            
        <div class="content-wrapper">
        
       <div class="row"> 
            
            <div class="col-md-3 grid-margin stretch-card text-center">
              
              <div class="card">
              <center>
             <div class="card-body">
                
                  <h4 class="card-title">ตั้งค่าข้อมูลตารางคิว</h4>
                 
                  <?php
              
              $ba = "SELECT * FROM settingbook WHERE id = 1";
              $ban = mysqli_query($conn,$ba); 
              $bank = mysqli_fetch_array($ban);  
    
  ?>
                  <form action="update_book.php" method="post" enctype="multipart/form-data"> 
                    <div class="form-group">
                      <label for="exampleInputUsername1">เวลาที่เริ่มเปิดจอง</label>
                      <input type="text" name="start" class="form-control"  value="<?php echo $bank['start']; ?>">
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">เวลาที่สิ้นสุดการจอง</label>
                      <input type="text" name="end" class="form-control" min="01:00" max="23:59" required value="<?php echo $bank['end']; ?>">
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">ระยะเวลาต่อคิว/นาที</label>
                      <input type="text" name="duration" class="form-control" id="exampleInputUsername1" value="<?php echo $bank['duration']; ?>">
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">วันปิดทำการ</label>
                      <select class="form-control" name="status" value="<?php echo $bank['close']; ?>">
                    
                       <option value="0" <?php if($bank['close'] == 0){echo 'selected';} ?>>วันอาทิตย์</option>
                       <option value="1" <?php if($bank['close'] == 1){echo 'selected';} ?>>วันจันทร์</option>
                       <option value="2" <?php if($bank['close'] == 2){echo 'selected';} ?>>วันอังคาร</option>
                       <option value="3" <?php if($bank['close'] == 3){echo 'selected';} ?>>วันพุธ</option>
                       <option value="4" <?php if($bank['close'] == 4){echo 'selected';} ?>>วันพฤหัส</option>
                       <option value="5" <?php if($bank['close'] == 5){echo 'selected';} ?>>วันศุกร์</option>
                       <option value="6" <?php if($bank['close'] == 6){echo 'selected';} ?>>วันเสาร์</option>
                       <option value="7" <?php if($bank['close'] >= 7){echo 'selected';} ?>>ไม่มี</option>
                    </select>
                      
                      
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">บันทึกการตั้งค่า</button>
                  </form> 
                </div>
              </div> 
            </div>
            <div class="col-md-8 grid-margin stretch-card ">
              <div class="card">
                <div class="row">
                  <div class="col-md-20">
                    <div class="card-body text-center">
                    <h4 class="card-title">ตัวอย่างตารางเวลาจองปัจจุบัน</h4></br>
                    
                    <?php
            $mysqli = new mysqli('localhost', 'root', '', 'racing');
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
				
                        <a href=""> <button type="button" class="btn btn-info book" ><?php echo $ts;?></button></a>


                   

                    </div>
                    
			</div>
            
        <?php }?>
        
    
                   
        </div> </div>       
                  </div>    
                </div>
              </div>
            </div>
           
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="d-flex justify-content-center">
                    
                  </div>
                </div>
              </div>
             
      </div>
           
         
       
     
      </div>
     
    </div>
 
  </div>
  
  
<script type="text/javascript">
$(function(){
 
    $("#img").on("change",function(){var _fileName = $(this).val();$(this).next("label").text(_fileName);});
 
});
function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#userimg')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
};
</script>
  <script src="vendors/js/vendor.bundle.base.js"></script>
 
  <!-- Plugin js for this page -->
  <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
 
  <!-- Custom js for this page-->
  <script src="js/file-upload.js"></script>
  <script src="js/typeahead.js"></script>
  <script src="js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
