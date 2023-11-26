
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
     
          <!-- To do section tab ends -->
        
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
        $nowdate = date("Y-m-d");
        $b = "SELECT * FROM bookings ORDER BY date ASC";
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
                  <h1 class="card-title .h1">รายการจองคิว</h1>
                  
                  <p class="card-description">
                  มีคิวการจองทั้งหมด <b class="text-danger"><?php echo $numq; ?></b> คิว
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
                    url: 'queuelistalls.php',
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
                      <form method="post" action="queuelistalls.php">
                          <input style="border-radius: 30px;"  type="text" name="search_text" id="search_box" class='search_box form-control text-center'  placeholder="***ป้อนชื่อผู้ใช้***"></br> 
                          <tr>
                         <td><input style="border-radius: 30px;"  type="submit" value="ค้นหา" class="search_button btn btn-sm btn-info"></td>
                         <td><a href="queuelistall.php"  class="btn btn-sm text-white btn-warning">รีเซ็ตค่าค้นหา</a> </td> </br>
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
                          <th>รหัสผู้ใช้</th>
                          <th>ชื่อ-สกุล</th>
                          <th>วันที่</th>
                          <th>ช่วงเวลา</th>
                          <th>คอมพิวเตอร์</th>
                          <th>สถานะ</th>
                          <th>ปรับแต่ง</th>
                     
                    
                         
                        </tr>
                        
                      </thead>
                      <tbody>
                      <?php while($bank = mysqli_fetch_array($ban)){
                        $c ="SELECT * FROM comp_state WHERE Id_comp = ".$bank['computer']."";
                        $com = mysqli_query($conn,$c);
                        $comp = mysqli_fetch_array($com);
                        $memname = $bank['mem_user'];
                        $n = "SELECT * FROM dd_member WHERE mem_user = '$memname'";
                        $na = mysqli_query($conn,$n); 
                        $name = mysqli_fetch_array($na); 
                         ?>
                        <tr>
                   
                         
                          <td><?php echo $bank['mem_user']; ?></td>
                          <td><?php echo $name['mem_name']; ?></td>
                          <td><?php echo $bank['date']; ?></td>
                          <td><?php echo $bank['timeslot']; ?></td>
                          <td><?php echo $comp['comp_name']; ?></td>
                          <?php  
                    if($bank['status'] == 2){ ?>
                      <td><label class="badge badge-primary"><b><i class="mdi mdi-account-check"></i> ยืนยันการเข้าใช้งานแล้ว</b></label></td>
                     
                  <?php  }else{
                        if($bank['date'] > date("Y-m-d")){ ?>
                          <td><label class="badge badge-warning"><b><i class="mdi mdi-account-multiple"></i> ยังไม่ถึงวันที่จอง</b></label></td>
                       <?php }elseif($bank['date'] == date("Y-m-d")){ ?>
                          <td><label class="badge badge-success text-white"><b><i class="mdi mdi-account-key"></i> การจองของวันนี้</b></label></td>
                         <?php 
                         }elseif($bank['date'] < date("Y-m-d")){ ?>
                          <td><label class="badge badge-danger text-white"><b><i class="mdi mdi-account-key"></i> เลยวันที่จองแล้ว</b></label></td>
                         <?php 
                         } 
                        } 
                        
                        

                          if($bank['status'] == 2){ ?>
                           <td><button type="button" class="btn btn-success"> <i class="mdi mdi-account-check"></i> ยืนยันแล้ว</button></td>
                          <?php }else{ 
                            if($bank['date'] == date("Y-m-d")){  ?>
                          <td><button type="button" class="btn btn-info" onclick="confirmBooking('<?php echo $bank['id_book']; ?>')">ยืนยันการเข้าใช้งาน</button></td>
                          <?php }else{ ?>
                            <td><button type="button" class="btn btn-dark" >ยังไม่พร้อมใช้งาน</button></td>
                        <?php  } ?>
                    

            <?php } ?>
      
                         <?php } ?>
                         
                        
                        
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
  <script>
function confirmBooking(compName) {
  Swal.fire({
    title: 'ยืนยันการเข้าใช้งาน ?',
    text: "ยืนยันว่าคิวนี้ได้เข้าใช้งานแล้ว",
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
        url: 'confr_book.php', // Replace with the actual URL to your PHP script
        data: {
          compName: compName,
          user: '<?php echo $user; ?>'
         
          // Add any other data you need to send
        },
        success: function(response) {
          if (response === 'success') {
            Swal.fire(
              'ยืนยันเข้าใช้งาน!',
              'การเข้าใช้งานได้ถูกบันทึกแล้ว',
              'success'
            ).then(() => {
              // You can add any additional logic here
              // For example, redirect to a thank-you page or reload the page
              window.location.reload(); // Reload the page
            });
          } else {
            Swal.fire(
              'ยืนยันเข้าใช้งาน!',
              'การเข้าใช้งานได้ถูกบันทึกแล้ว',
              'success'
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
