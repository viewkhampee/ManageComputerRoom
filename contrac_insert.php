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
  <link rel="stylesheet" href="vendors/select2/select2.min.css">
  <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include jQuery UI library -->
    
</head>

<body>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
        }elseif($user_record['mem_status'] >= 7){
          include('menu.php');
        }else{
              include('menu_mem.php');
        }  ?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          
        <center><div class="row-center">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">เพิ่มข้อมูลติดต่อ</h4>
                 
                  <?php
              $user = $_SESSION['mem_user'];
              
    
  ?>
                  <form action="add_con.php" method="post" id="dateForm" enctype="multipart/form-data" > 
                  <div class="col-md-12 mb-4">
                
                      <label for="exampleInputUsername1">ชื่อ-สกุล</label>
                      <input style="border-radius: 30px;"  type="text" name="name"  class="form-control" id="exampleInputUsername1" required>
                 
                    </div>
                     <div class="col-md-12 mb-4">
                
                      <label for="exampleInputUsername1">เบอร์ติดต่อ</label>
                      <input style="border-radius: 30px;"  type="text" name="phone" OnKeyPress="return chkNumber(this)"  class="form-control" maxlength="10" minlength="10" autocomplete="off" required title="ต้องเป็นตัวตัวเลข และจำนวน 10 ตัวเลขเท่านั้น">
                 
                    </div>
                    <div class="col-md-12 mb-4">
                      <label for="exampleInputEmail1">สถานะ</label>
                    <select style="border-radius: 30px;"  class="form-control text-center" name="status" >
                <option value="1" >พร้อมใช้งาน</option>
                <option value="0" >ไม่พร้อมใช้งาน</option>
            
                    </select>
                    </div>

                   
               
                    <button type="submit" name="letsgo_login" class="btn btn-primary mr-2">ยืนยัน</button>
                    <a href="contrac_list.php" class="btn btn-light mr-2">ย้อนกลับ</a>

                  </form>
                  
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
}
function chkNumber(ele)
	{
	var vchar = String.fromCharCode(event.keyCode);
	if ((vchar<'0' || vchar>'9')) return false;
	ele.onKeyPress=vchar;
	}
</script>
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
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
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/file-upload.js"></script>
  <script src="js/typeahead.js"></script>
  <script src="js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
