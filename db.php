<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "registration_db";
$port = 3308; 

$conn = mysqli_connect($servername, $username, $password, $database, $port);

if (!$conn) {
    die(" Connection failed: " . mysqli_connect_error());
}
?>
