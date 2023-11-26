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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
        if($user_record['mem_status'] == 1){
              include('dev_menu.php');
        }elseif($user_record['mem_status'] >= 7){
          include('menu.php');
        }else{
              include('menu_mem.php');
        }  
     
        $repairid = $_GET['id'];
        $re ="SELECT * FROM repair WHERE re_id = '$repairid' ORDER BY re_date DESC";
      $rep = mysqli_query($conn,$re);
      $repair = mysqli_fetch_array($rep);
      $bo ="SELECT * FROM type_repair WHERE re_id = '".$repair['type']."' ";
      $boo = mysqli_query($conn,$bo);
      $book = mysqli_fetch_array($boo);
    $_SESSION['mem_user'];
    ?>
      <!-- partial -->
      <div class="main-panel">        
      <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card ">
                <div class="card-body">
                  <h4 class="card-title text-center">คำร้องแจ้งซ่อมของ : <?php echo $repair['re_user']; ?></h4>
                 
 
                
                 <center> <img  src="images/repair/<?php echo $repair['re_img']; ?>" style="border-radius: 10%;no-repeat center center;width: 30%;"></center></br></br>
                  <div class="form-group text-center">
                      <label for="exampleInputUsername1"><b><h4>ชื่ออุปกรณ์ :</b>&nbsp;&nbsp; <?php echo $repair['re_name']; ?></h4></label></br>
                      <label for="exampleInputUsername1"><b><h4>ประเภท :</b>&nbsp;&nbsp; <?php echo $book['re_name']; ?></h4></label></br>
                      <label for="exampleInputUsername1" class="text-danger"><b><h4>ปัญหา </b>&nbsp;&nbsp; <?php echo $repair['mem_name']; ?></h4></label></br>
                      <div class="form-group col-12">
          <textarea style="border-radius: 30px;"  class="form-control" name="re_plobem" rows="7"  placeholder="ปัญหาที่เกิด" readonly required><?php echo $repair['re_plobem']; ?></textarea>
        </div>
                      <label for="exampleInputUsername1"><b><h4>ชื่อเจ้าของอุปกรณ์ :</b>&nbsp;&nbsp;&nbsp;<?php echo $repair['re_nameuser']; ?></h4></label></br>
                      <?php 

         
         
?>       
         

       
     
             
                        <label for="exampleInputUsername1"><b><h4>สถานะคำขอ :</b>&nbsp;&nbsp;&nbsp;<?php if($repair['status'] == 0){
                              ?> <b  class="text-warning"><i class="mdi mdi-av-timer"></i> กำลังรออุปกรณ์ซ่อม</b>
                          <?php  }elseif($repair['status'] == 1){
                            ?> <b  class="text-primary"><i class="mdi mdi-worker"></i> ผู้ซ่อมรับของแล้ว</b>
                        <?php  }elseif($repair['status'] == 2){
                            ?> <b  class="text-info"><i class="mdi mdi-wrench"></i> กำลังซ่อม</b>
                        <?php  }elseif($repair['status'] == 3){
                            ?> <b  class="text-success"><i class="mdi mdi-check"></i> ซ่อมเสร็จแล้ว</b>
                        <?php  }elseif($repair['status'] == 4){
                            ?> <b  class="text-success"><i class="mdi mdi-account-check"></i> รอผู้ส่งคำร้องยืนยันรับของ 1/2</b>
                        <?php  }elseif($repair['status'] == 5){
                            ?> <b  class="text-success"><i class="mdi mdi-check"></i> คำร้องแจ้งซ่อมนี้สำเร็จแล้ว 2/2</b>
                        <?php  }elseif($repair['status'] == 9){
                            ?> <b  class="text-danger"><i class="mdi mdi-close-circle"></i> ไม่สามารถซ่อมได้</b>
                        <?php  } ?>
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
               
                </h4>
               
               
        <div class="form-group">

        <?php
                        if($repair['status'] == 0){
                              ?> <b  class="text-primary h6"> คุณได้รับอุปกรณ์ที่ส่งซ่อมจากผู้ส่งคำร้องแล้วหรือยัง  ?</b></br>
                              <button type="button" class="btn btn-info" onclick="confirmBooking('1')">ยืนยันได้รับอุปกรณ์แล้ว</button>
                              <a href="repair_table.php" class="btn btn-dark">ย้อนกลับ</button></a></br>
                          <?php  }elseif($repair['status'] == 1){
                            ?>  <b  class="text-primary h6"> คุณพร้อมซ่อมอุปกรณ์ชิ้นนี้แล้วหรือยัง  ?</b></br>
                             <button type="button" class="btn btn-info" onclick="confirmBooking('2')">ยืนยันการเริ่มซ่อม</button>
                            <a href="repair_table.php" class="btn btn-dark">ย้อนกลับ</button></a></br>
                        <?php  }elseif($repair['status'] == 2){
                            ?>  <b  class="text-primary h6"> คุณซ่อมอุปกรณ์ชชิ้นนี้เสร็จแล้วหรือยัง  ?</b></br>
                            <button type="button" class="btn btn-info" onclick="confirmBooking('3')">ยืนยันการซ่อมสำเร็จ</button>
                              <a href="repair_table.php" class="btn btn-dark">ย้อนกลับ</button></a></br>
                        <?php  }elseif($repair['status'] == 3){
                            ?>  <b  class="text-primary h6"> ผู้ส่งคำร้องได้รับของแล้วหรือยัง  ?</b></br>
                             <button type="button" class="btn btn-info" onclick="confirmBooking('4')">ยืนยันผู้ส่งคำร้องรับของแล้ว</button>
                            <a href="repair_table.php" class="btn btn-dark">ย้อนกลับ</button></a></br>
                        <?php  }elseif($repair['status'] == 4){
                            ?>  <b  class="text-primary h6"> รอผู้ส่งคำร้องยืนยันได้รับของแล้ว  ?</b></br>
                            
                             <hr>
                             <a href="repair_tableall.php" class="btn btn-dark">ย้อนกลับ</button></a></br>
                        <?php  }elseif($repair['status'] == 5){
                            ?>  <b  class="text-success h6"> คำร้องแจ้งซ่อมนี้สำเร็จแล้ว <i class="mdi mdi-check"></i></b></br>
                          
                            <hr>
                            <a href="repair_tableall.php" class="btn btn-dark">ย้อนกลับ</button></a></br>
                        <?php  }elseif($repair['status'] == 9){
                            ?>  <b  class="text-danger h6"> ไม่สามารถซ่อมได้ <i class="mdi mdi-close-circle"></i></b></br>
                            <hr>
                           <a href="repair_tableall.php" class="btn btn-dark">ย้อนกลับ</button></a></br>
                        <?php  } ?>
                          
                         
                 
                   
                    
                     
               
              </div>
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
  <script>
function confirmBooking(status) {
  Swal.fire({
    title: 'ยืนยันข้อมูล ?',
    text: "ยืนยันการอัพเดตสถานะคำขอ",
    icon: 'success',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'ยืนยัน',
    cancelButtonText: 'ยกเลิก'
  }).then((result) => {
    if (result.isConfirmed) {
      // User confirmed, send AJAX request to insert data into MySQL
      $.ajax({
    type: 'POST',
    url: 'update_repair_stat.php',
    data: {
      status: status,
      re_id: '<?php echo $repairid; ?>'
    },
    success: function(response) {
      if (response === 'success') {
            Swal.fire(
              'อัพเดตสำเร็จ!',
              'สถานะได้รับการอัพเดตแล้ว',
              'success'
            ).then(() => {
              // You can add any additional logic here
              // For example, redirect to a thank-you page or reload the page
              window.location.reload(); // Reload the page
            });
          } else {
            Swal.fire(
              'อัพเดตไม่สำเร็จ!',
              'มีข้อผิดพลาด',
              'error'
            ).then(() => {
              // You can add any additional logic here
              // For example, redirect to a thank-you page or reload the page
              window.location.reload(); // Reload the page
            });
          }
        }
      });
    }
  });
}
</script>
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
