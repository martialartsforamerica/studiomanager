<?php
// Retrieve form data
$title = $_POST['title'];
$content = $_POST['content'];

// Connect to the database (replace 'database', 'username', and 'password' with your own credentials)
$pdo = new PDO('mysql:host=localhost;dbname=curriculum', 'root', '');

// Prepare SQL statement
$stmt = $pdo->prepare('INSERT INTO accordions (title, content) VALUES (?, ?)');

// Bind parameters and execute the statement
$stmt->execute([$title, $content]);

// Redirect back to the form page or any other desired location
header('Location: form.html');
exit();
?>
