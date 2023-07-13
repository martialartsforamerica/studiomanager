<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['student_name'])){
  header('location:index.php');
}

?>
  <?php

// Turn off all error reporting
error_reporting(0);

// Report simple running errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Reporting E_NOTICE can be good too (to report uninitialized
// variables or catch variable name misspellings ...)
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

// Report all PHP errors
error_reporting(E_ALL);

// Report all PHP errors
error_reporting(-1);

// Same as error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

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
$beltname = $_POST['beltname'];
$requirements = $_POST['requirements'];
$program = $_POST['program'];

// Insert the data into the SQL database
$sql = "INSERT INTO ranks (beltname, requirements, program) VALUES ('$beltname', '$requirements', '$program')";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
header("Location: view-techniques.php");
die();
?>

