<?php
// Establish a connection to the SQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the submitted data from the HTML form
$name = $_POST['name'];
$date = $_POST['date'];
$time = $_POST['time'];
$status = $_POST['status'];

// Insert the data into the SQL database
$sql = "INSERT INTO records (name, date, time, status) VALUES ('$name', '$date', '$time', '$status')";

if ($conn->query($sql) === TRUE) {
    echo "";
    header("location:attendance.php");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
header("Location: curriculum-manager.php");
die();
?>
