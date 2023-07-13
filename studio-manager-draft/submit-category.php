<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['student_name'])){
  header('location:index.php');
}

?>
<?php
// Establish a connection to the SQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "curriculum";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the submitted data from the HTML form
$categoryname = $_POST['categoryname'];
$description = $_POST['description'];
$program = $_POST['program'];

// Insert the data into the SQL database
$sql = "INSERT INTO categories (categoryname, description, program) VALUES ('$categoryname', '$description', '$program')";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
header("Location: curriculum-manager.php");
die();
?>
