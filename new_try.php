<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "staff";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE feedback (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
first_name VARCHAR(255) NOT NULL,
last_name VARCHAR(255) NOT NULL,
email VARCHAR(255),
pwd VARCHAR(255),phone INT(10),course VARCHAR(255),rating VARCHAR(255),ads VARCHAR(255),comments VARCHAR(255))";

if ($conn->query($sql) === TRUE) {
  echo "Table feedback created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>