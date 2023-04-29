<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST["name"];
$email = $_POST["email"];
$number = $_POST["number"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];

if ($password !== $confirm_password) {
  die("Passwords do not match");
}

$sql = "INSERT INTO users (name, email, number, password)
VALUES ('$name', '$email', '$number', '$password')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
