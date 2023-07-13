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
 $program_name =  $_POST['program_name'];
 $techniquename = $_POST['techniquename'];
 $categoryname =  $_POST['categoryname'];
 $rank = $_POST['rank'];
 $description = $_POST['description'];
  
 // Performing insert query execution
 // here our table name is college
 $sql = "INSERT INTO techniques  VALUES ('$program_name',
     '$techniquename','$categoryname','$rank','$description')";
  
  if (!mysql_query($conn,$sql))
  {
  die('Error' . mysql_error());
  }
  
 mysql_close($conn);
header("Location: view-techniques.php");
 ?>

