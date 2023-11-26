<?php
// Connect to the database (replace with your database credentials)
$mysqli = new mysqli('localhost', 'root', '', 'room');
date_default_timezone_set('Asia/Bangkok');

// Check for connection errors
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

// Get data from the AJAX request
$idbook = $_POST['idbook'];

// ทำการลบข้อมูลในฐานข้อมูล "bookings"
$deleteStmt = $mysqli->prepare("DELETE FROM bookings WHERE id_book = ?");
$deleteStmt->bind_param('i', $idbook);

if ($deleteStmt->execute()) {
    echo 'success'; // สถานะการลบสำเร็จ
} else {
    echo 'error'; // เกิดข้อผิดพลาดในการลบ
}

// Close the prepared statement and the database connection
$deleteStmt->close();
$mysqli->close();
?>
