<?php
$servername = "localhost";
$username = "root";
$password = ""; // Replace with your actual MySQL password
$database = "db_whiskerwonderclinic";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>