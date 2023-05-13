<?php
// Replace with your database credentials
$servername = "Localhost";
$username = "root";
$password = "";
$dbname = "email";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare SQL statement
$sql = "INSERT INTO user (Name, Email_Address, Password) VALUES ('$name', '$email', '$password')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
  header("Location: signup-success.php");
    exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
