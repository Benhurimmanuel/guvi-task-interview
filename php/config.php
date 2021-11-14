<?php
$servername = "localhost";
$db_user = "root";
$db_pass = "";
$db_name ="guvi_task";


// Create connection
$conn = mysqli_connect($servername, $db_user, $db_pass,$db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>