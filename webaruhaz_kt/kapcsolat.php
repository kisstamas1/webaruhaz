<?php
$servername = "localhost";
$username = "kisstamas";
$password = "Kutya45";
$dbname = "kisstamas";

echo "Create connection start" . "<br>";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>