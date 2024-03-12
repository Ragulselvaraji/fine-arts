<?php
// Database connection parameters
$servername = "localhost"; // Change this to your MySQL server address
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "student details"; // Change this to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name']; // Assuming 'name' is the name of the input field for student name
$phone = $_POST['phone']; // Assuming 'phone' is the name of the input field for phone number
$department = $_POST['department']; // Assuming 'department' is the name of the select field for department
$domain = $_POST['domain']; // Assuming 'domain' is the name of the select field for domain

// SQL to insert data into database
$sql = "INSERT INTO students (name, phone, department, domain) VALUES ('$name', '$phone', '$department', '$domain')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
