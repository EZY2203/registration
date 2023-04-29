<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$name = $_POST["name"];
$email = $_POST["email"];
$number = $_POST["number"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];

// Validate password
if ($password !== $confirm_password) {
  die("Passwords do not match");
}

// Insert data into table
$sql = "INSERT INTO users (name, email, number, password)
VALUES ('$name', '$email', '$number', '$password')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
