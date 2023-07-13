<a href="curriculum-manager.php" title="Curriculum Manager">Curriculum Manager</a>
<a href="add-program.php" title="Add Program">Add Program</a>
<a href="add-rank.php" title="Add Rank">Add Rank</a>
<a href="add-category.php" title="Add Category">Add Category</a>
<a href="add-technique.php" title="Add Technique">Add Technique</a>
<a href="index.php" title="Home">Home</a>
<?php
// Establish a connection to the SQL database
$dsn = 'mysql:host=localhost;dbname=curriculum';
$username = 'root';
$password = '';

try {
  $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
  exit;
}

// Retrieve the submitted form data
$program = $_POST['program'];
$categoryname = $_POST['categoryname'];
$description = $_POST['description'];

// Prepare and execute the SQL query to insert the data into the database
$query = 'INSERT INTO categories (categoryname, description, program) VALUES (?, ?)';
$stmt = $db->prepare($query);
$stmt->execute([$categoryname, $description, $program]);

// Redirect the user to the page where the div will be displayed
header('Location: curriculum-manager.php');
exit;
?>
