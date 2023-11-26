<?php
// Connect to the database (replace with your database credentials)
$mysqli = new mysqli('localhost', 'root', '', 'room');
date_default_timezone_set('Asia/Bangkok');
// Check for connection errors
if ($mysqli->connect_error) {
  die('Connection failed: ' . $mysqli->connect_error);
}

// Get data from the AJAX request
$compName = $_POST['compName'];
$date = $_POST['date'];
$com = $_POST['com'];
$user = $_POST['user'];
$status = "1";
$datenow = date("Y-m-d");

// Perform the database insertion
$stmt = $mysqli->prepare("INSERT INTO bookings (mem_user, date, timeslot, computer, status, date_queue) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param('ssssss', $user, $date, $compName, $com, $status, $datenow);

if ($stmt->execute()) {
  echo 'success'; // Return success message to the AJAX request
} else {
  echo 'error'; // Return error message to the AJAX request
}

$stmt->close();
$mysqli->close();
?>
