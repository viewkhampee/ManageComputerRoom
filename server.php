<?php 

error_reporting(0);
ini_set('display_errors', 0);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "room";

    // Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    }

?>