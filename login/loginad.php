<?php session_start(); ?>
<?php
                       include 'top.php';
                       ?>
<link href="css/login.css" rel="stylesheet" type="text/css"/>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<!------ Include the above in your HEAD tag ---------->

<!--
you can substitue the span of reauth email for a input with the email and
include the remember me checkbox
-->
<title><?php echo $setting['web_name']; ?></title>
<div class="container" >
    <div class="card " align="center" style="width: 30rem;">
        <br>
        <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
        <center> <img id="userimg" src="../images/<?php if(empty($setting['web_logo'])){echo 'none.jpg';}else{echo $setting['web_logo'];}?>" style="border-radius: 10%;no-repeat center center;width: 80%;"></br></br></center>
        <br>
        <h5 class="text-info" ><b><?php echo $setting['web_name']; ?></b></h5>
        <h6 class="text-info" ><b><?php echo $setting['eng_name']; ?></b></h6>
       
        <hr>
        <form method="post" action="../check_login.php" class="form-signin">
            <span id="reauth-email" class="reauth-email"></span>
            <input type="text" name="mem_user" id="inputEmail" class="form-control" placeholder="รหัสผู้ใช้" required autofocus>
            <input type="password" name="mem_pass" id="inputPassword" class="form-control" placeholder="รหัสผ่าน" required>
            <div id="remember" class="checkbox">
                
                <table style="width:100%" >
                    <tr> 
                       
                       
                     
                    </tr>
                <table>
                
                <hr> 
                        </div>
                        <div >
                       
                           
                        </div>
                        <button name ="letsgo_login" class="btn btn-lg btn-primary btn-block btn-signin bt" type="submit">เข้าสู่ระบบ</button>
                        <a class="text-dark" href="register.php"><b><u>ลงทะเบียน</u></a></br></br>
                        </form><!-- /form -->
                       <p class="text-danger"><font size='3'>*<b><u>หากพบเจอปัญหา</u></b> ให้ติดต่อเจ้าหน้าที่หรือผู้ดูแลระบบ </br>
                      <font size='3'><b><u>โทร</u></b> <?php echo $setting['phone']; ?></p></br>
                     
                        </div><!-- /card-container -->
                        <p class="text-dark"><b><?php echo $setting['description']; ?></b></p>
                        
                        </div><!-- /container -->
                        <script src="js/login.js" type="text/javascript"></script>

                      
                    