<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$database = "eventmanagement3";

// Create host
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";


?>