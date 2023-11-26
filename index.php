<?php

include 'server.php';
$user = $_SESSION['mem_user'];
$cuser = "SELECT * FROM dd_member WHERE mem_user='$user'";
$querycheck = mysqli_query($conn, $cuser);
$user_record = mysqli_fetch_array($querycheck);
if ($user_record['mem_status'] >= 1) { ?>
  <script>
    window.location.href = "login/loginad.php";
  </script>
  <?php
} elseif ($user_record['mem_status'] == 0) { ?>
  <script>
    window.location.href = "login/loginad.php";
  </script>
  <?php
} else { ?>
  <script>
    window.location.href = "login/loginad.php";
  </script>
<?php
}