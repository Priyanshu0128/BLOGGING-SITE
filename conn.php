<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname  = "blog_temp";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>
