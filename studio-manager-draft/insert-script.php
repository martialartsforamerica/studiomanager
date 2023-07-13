<?php 
if(isset($_POST['submit'])){

  $description = $_POST['description'];
  $categoryname = $_POST['categoryname'];
  $program = $_POST['program'];

     if(!empty($description) && !empty($categoryname) && !empty($program)){
      $query = "INSERT INTO categories (description, categoryname, program) VALUES('$description', '$categoryname', '$program')";
      $result = $conn->query($query);
     
      if($result){
        echo "Student detail is inserted successfully";
      }  
    }
  }

?>