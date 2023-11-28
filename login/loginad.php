<?php session_start(); ?>
<?php include 'top.php'; ?>
<link href="css/login.css" rel="stylesheet" type="text/css"/>
<link href="css/sb-admin-2.css" rel="stylesheet" type="text/css"/>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title><?php echo $setting['web_name']; ?></title>
<div class="container" >
    <div class="card" align="center" style="width: 30rem;">
        <br>
        <center> <img id="userimg" src="../images/<?php if(empty($setting['web_logo'])){echo 'none.jpg';}else{echo $setting['web_logo'];}?>" style="border-radius: 10%;no-repeat center center;width: 80%;"></br></br></center>
        <br>
        <h5 class="text-info" ><b><?php echo $setting['web_name']; ?></b></h5>
        <h6 class="text-info" ><b><?php echo $setting['eng_name']; ?></b></h6>
        <p class="text-dark"><b><?php echo $setting['description']; ?></b></p>   
        <hr>
            <form method="post" action="../check_login.php" class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" name="mem_user" style="border-radius: 1.5rem;" id="inputEmail" class="form-control" placeholder="รหัสผู้ใช้" required autofocus>
                <input type="password" name="mem_pass" style="border-radius: 1.5rem;" id="inputPassword" class="form-control" placeholder="รหัสผ่าน" required>
                <button name ="letsgo_login" style="border-radius: 1.5rem;" class="btn btn-lg btn-primary btn-block btn-signin bt" type="submit">เข้าสู่ระบบ</button>
                <a class="text-dark" href="register.php"><b><u>ลงทะเบียน</u></a></br></br>
            </form><!-- /form -->
            <p class="text-danger"><font size='3'>*<b><u>หากพบเจอปัญหา</u></b> ให้ติดต่อเจ้าหน้าที่หรือผู้ดูแลระบบ </br>
            <font size='3'><b><u>โทร</u></b> <?php echo $setting['phone']; ?></p></br>
            <script src="js/login.js" type="text/javascript"></script>
    </div>
</div>               