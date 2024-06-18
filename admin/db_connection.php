<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // Add your database password here
$dbname = "pkm_catering";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
