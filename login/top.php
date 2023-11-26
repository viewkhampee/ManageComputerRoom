    <?php include 'server.php';
              $set = "SELECT * FROM web_setting WHERE id = 1";
              $settin = mysqli_query($conn,$set); 
              $setting = mysqli_fetch_array($settin);  ?>