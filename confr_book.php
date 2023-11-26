<?php
// Connect to the database (replace with your database credentials)
$mysqli = new mysqli('localhost', 'root', '', 'room');
date_default_timezone_set('Asia/Bangkok');
// Check for connection errors
if ($mysqli->connect_error) {
  die('Connection failed: ' . $mysqli->connect_error);
}

// Get data from the AJAX request
$id_book = $_POST['compName'];
$user = $_POST['user'];
$status = "2";

// Perform the database insertion
$stmt = $mysqli->prepare("UPDATE bookings SET status = ? WHERE id_book = ?");
$stmt->bind_param('ss', $status, $id_book);

if ($stmt->execute()) {
  echo 'success'; // Return success message to the AJAX request
} else {
  echo 'error'; // Return error message to the AJAX request
}

$stmt->close();
$mysqli->close();
?>

