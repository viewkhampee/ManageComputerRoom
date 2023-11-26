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
        if($user_record['mem_status'] == 1){
              include('dev_menu.php');
        }elseif($user_record['mem_status'] >= 7){
          include('menu.php');
        }else{
              include('menu_mem.php');
        }  
     
     $id = $_GET['id'];
     $type = $_GET['type'];
   
     $bo ="SELECT * FROM dd_member WHERE mem_user  = '$id'";
     $boo = mysqli_query($conn,$bo);
    $book = mysqli_fetch_array($boo);

  

    
    $_SESSION['mem_user'];
    ?>
   
      <div class="main-panel">        
      <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card ">
                <div class="card-body">
                  <h4 class="card-title text-center">ปรับแต่งข้อมูล</h4>
                 
 
                
                 <center> <img  src="images/user_img/<?php if(empty($book['user_img'])){echo 'none.jpg';}else{echo $book['user_img'];}?>" style="border-radius: 10%;no-repeat center center;width: 30%;"></center></br></br>
                  <div class="form-group text-center">
                      <label for="exampleInputUsername1"><b><h4>Username :</b>&nbsp;&nbsp; <?php echo $book['mem_user']; ?></h4></label></br>
                      <label for="exampleInputUsername1"><b><h4>ชื่อ-สกุล:</b>&nbsp;&nbsp; <?php echo $book['mem_name']; ?></h4></label></br>
                      <label for="exampleInputUsername1"><b><h4>เบอร์โทรศัพท์ :</b>&nbsp;&nbsp;&nbsp;<?php echo $book['phone']; ?></h4></label></br>
                      <label for="exampleInputUsername1"><b><h4>อีเมล์ :</b>&nbsp;&nbsp;&nbsp;<?php echo $book['email']; ?></h4></label></br>
                      <label for="exampleInputUsername1"><b><h4> สถานะ :</b> &nbsp;&nbsp;<?php if($book['mem_status'] == 1 ){ ?>
                        ผู้ใช้ทั่วไป
                      <?php }elseif($book['mem_status'] == 0 ){ ?></label>
                        นักเรียน
                        <?php }elseif($book['mem_status'] == 5 ){ ?></label>
                          อาจารย์
                        <?php }elseif($book['mem_status'] >= 8 ){ ?></label>
                        โดนระงับการใช้งาน
                        <?php } ?></h4></br>
                        <label for="exampleInputUsername1"><b><h4>สถานะบัญชี :</b>&nbsp;&nbsp;&nbsp;<?php if($book['acc_state'] == 1){ 
                          ?> <b class="text-success"><i class="mdi mdi-checkbox-multiple-marked-circle menu-icon"></i> ยืนยันบัญชีแล้ว </b><?php }else{ ?><b class="text-danger"><i class="mdi mdi-alert-circle menu-icon"></i> ยังไม่ยืนยันบัญชี </b>  <?php } ?>
                            </h4></label></br>
                    </div>  
                 
                
                    
                
                  
                </div>
                
              </div>
              
            </div>
            
            <div class="col-md-3 mt-2">
          <div class="card card-profile">
            
            <div class="row justify-content-center">
              <div class="col-4 col-lg-4 order-lg-2">
                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                 
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
              <div class="text-center mt-4">
              <h4>ปรับแต่งสถานะ
               
                </h4></br>
                <form action="update_status.php?type=edit" method="post" enctype="multipart/form-data"> 
                <div class="form-group">
                <input style="border-radius: 30px;"  type="text" name="type" class="form-control text-center" id="exampleInputEmail1" hidden value="edit"> 
                <input style="border-radius: 30px;"  type="text" name="warp" class="form-control text-center" hidden id="exampleInputEmail1" value="<?php echo $type; ?>"> 
                      <label for="exampleInputEmail1">รหัสผู้ใช้</label>
                      <input style="border-radius: 30px;"  type="text" name="mem_user" readonly class="form-control text-center" id="exampleInputEmail1" value="<?php echo $book['mem_user']; ?>"> 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">ชื่อ-สกุล</label>
                      <input style="border-radius: 30px;"  type="text" name="mem_name" class="form-control text-center" id="exampleInputEmail1" value="<?php echo $book['mem_name']; ?>"> 
                    </div>
                  
                     <div class="form-group">
                      <label for="exampleInputEmail1">เบอร์โทรศัพท์</label>
                      <input style="border-radius: 30px;"  type="phone" name="phone" OnKeyPress="return chkNumber(this)" class="form-control form-control-lg text-center" id="exampleInputEmail1" value="<?php echo $book['phone']; ?>" placeholder="เบอร์โทรศัพท์" maxlength="10" minlength="10" autocomplete="off" required title="ต้องเป็นตัวตัวเลข และจำนวน 10 ตัวเลขเท่านั้น">
                      <input style="border-radius: 30px;" hidden type="text" name="mem_status" class="form-control text-center" id="exampleInputEmail1" value="5"> 
                    </div>
                      <div class="form-group">
                      <label for="exampleInputEmail1">สถานะบัญชี</label>
                      
                    
                    <select style="border-radius: 30px;"  class="form-control text-center" name="acc_status" value="<?php echo $book['mem_status']; ?>">
                  
                <option value="0" <?php if($book['acc_state'] == 0){echo 'selected';} ?>>ยังไม่ยืนยันบัญชี</option>
                <option value="1" <?php if($book['acc_state'] == 1){echo 'selected';} ?> >ยืนยันบัญชีแล้ว</option>
               
               
               
                    </select>
        </div>
                      <button type="submit" class="btn btn-success mr-2">ยืนยันการปรับแต่ง</button>

       
                      <a href="account.php" class="btn btn-dark">ย้อนกลับ</button></a>
                   
                
               
              </div>
               </form>
            </div>
            
          </div>
        </div>
      </div>
               
      
           
         
        
     
      </div>
     
    </div>
 
  </div>
  
  
<script type="text/javascript">

	function chkNumber(ele)
	{
	var vchar = String.fromCharCode(event.keyCode);
	if ((vchar<'0' || vchar>'9')) return false;
	ele.onKeyPress=vchar;
	}

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
