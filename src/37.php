<?php
// Initialize variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "github_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Your PHP code goes here

$conn->close();
?>
