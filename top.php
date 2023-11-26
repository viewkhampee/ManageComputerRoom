    <?php include 'server.php';
     date_default_timezone_set("Asia/Bangkok");
     session_start();
     if (!isset($_SESSION['mem_user'])) {
             $_SESSION['msg'] = "You must log in first";
             header('location: login/loginad.php');
         }
           include 'server.php';
                   $user = $_SESSION['mem_user'];
                   $cuser = "SELECT * FROM dd_member WHERE mem_user='$user'";
                   $querycheck = mysqli_query($conn,$cuser); 
                   $user_record = mysqli_fetch_array($querycheck);  
              $set = "SELECT * FROM web_setting WHERE id = 1";
              $settin = mysqli_query($conn,$set); 
              $setting = mysqli_fetch_array($settin);  ?>
              <style type ="text/css">
  @font-face{
    font-family: Gimmick;
    src: url(fonts/Gimmick/FCGimmick-Bold.ttf) format("truetype");
  }body{ font-family: 'Gimmick', sans-serif; }
  </style>
   <title><?php echo $setting['web_name']; ?></title>
   