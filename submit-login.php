<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "accounts";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$user_id = $_POST['user_id'];
$password = $_POST['password'];

// Check if the user exists in the database
$stmt = $conn->prepare("SELECT * FROM users WHERE user_id = ?");
$stmt->execute([$user_id]);
$user_id = $stmt->fetch();

if ($user_id && password_verify($password, $user_id['password'])) {
  // User authenticated, store user session or redirect to a protected page
  session_start();
  $_SESSION['user_id'] = $user_id['user_id'];
  header("Location: admin.php");
  exit();
} else {
    header("Location: index.php");
    die();
}
?>
