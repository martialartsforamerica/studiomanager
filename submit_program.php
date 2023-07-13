<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['student_name'])){
  header('location:index.php');
}

?>
	<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "curriculum");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$program_name = $_REQUEST['program_name'];
		$date_created = $_REQUEST['date_created'];
		$program_price = $_REQUEST['program_price'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO programs VALUES ('$program_name',
			'$date_created','$program_price')";
		
		if(mysqli_query($conn, $sql)){
			echo "";

			echo nl2br("\n$program_name\n $date_created\n "
				. "$program_price\n");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		header("Location: curriculum-manager.php");
die();
		?>

