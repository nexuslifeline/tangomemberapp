<?php
$servername = "198.38.82.92";
$username = "jojojdev_user";
$password = "Admin";
$dbname = "jojojdev_lpms";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

?>
