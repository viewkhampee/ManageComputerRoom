<?php
include "server.php"; ?>
<div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">จัดการคิวการจอง</h5>
      
      </div>
<section class="inner-page">
<div class="container">
   <!-- partial -->
   <?php
      $mysqli = new mysqli('localhost', 'root', '', 'room');
      if(isset($_GET['date'])){
          
          $stmt = $mysqli->prepare("select * from bookings where date =?");
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
          $stmt = $mysqli->prepare("select * from bookings where date =?");
          $stmt->bind_param('s', $date);
      $stmt = $mysqli->prepare("INSERT INTO bookings (name, email, phone, date, timeslot, service, confr, barber, u_barber) VALUES (?,?,?,?,?,?,?,?,?)");
      $stmt->bind_param('sssssssss', $name, $email, $phone, $date, $timeslot, $service, $confr, $barber, $u_barber);
      $stmt->execute();
      $bookings[]=$timeslot;
      $stmt->close();
      $mysqli->close();
     
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
      <div class="col-md-3">
  <div class="form-group text-center">
  
  <?php if(in_array($ts,$bookings)){?>
              <button class="btn btn-dark">มีคนจองคิวเวลานี้แล้ว</button>
              <?php }elseif($date != date('Y-m-d')){?>
                <a href="insert_book.php?time=<?php echo $ts; ?>&id=<?php echo $id; ?>&date=<?php echo $date; ?>"> <button type="button" class="btn btn-info book" ><?php echo $ts;?></button></a>
              <?php }elseif($ts < date('H:iA')){?>
                  <button class="btn btn-danger"><?php echo $ts;?></button>
              <?php }else{?>
                  <a href="insert_book.php?time=<?php echo $ts; ?>&id=<?php echo $id; ?>&date=<?php echo $date; ?>"> <button type="button" class="btn btn-info book" ><?php echo $ts;?></button></a>


              <?php }?>



             

              </div>
              
</div>
      
  <?php }?>
</div>
</section>

</script>