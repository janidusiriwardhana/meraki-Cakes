<?php
// Database connection file
$host = "localhost";
$user = "root";
$password = "";
$dbname = "meraki-db";  // Your database name

// Create a connection
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>