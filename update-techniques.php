<?php
$student_id=10;

$servername = "localhost";
$username = "root";
$password = "";
$db = "curriculum";

$conn = new mysqli($servername, $username, $password, $db);

if($conn->connect_error){
	die("Connection failed ".$conn->connect_error);
}

$sql = "select * from categories where categoryname='$categoryname'";

$result = $conn->query($sql);

if ($result->num_rows > 0){

$row = $result->fetch_assoc();

$categoryname = $row["categoryname"];
$description = $row["description"];
$program = $row["program"];

echo

"<html>
<body>

<form action='phpUpdateFormScript.php' method='post'>
Name: <input type='text' name='categoryname' value='$categoryname'><br>
Age: <input type='text' name='description' value='$description'><br>
Gender: <input type='text' name='program' value='$program'><br>
<input type ='submit'>
</form>

</body>
</html>";

} else {
	echo "Not Found";
}
$conn->close();

?>
<?php

$sql = "update categories set categoryname='$categoryname', description='$description', program='$program' where categoryname='$categoryname'";

if ($conn->query($sql) === TRUE) {
	echo "Records updated: ".$categoryname."-".$description."-".$program;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

?>