<?php
// Connect to the database (replace 'database', 'username', and 'password' with your own credentials)
$pdo = new PDO('mysql:host=localhost;dbname=curriculum', 'root', '');

// Retrieve accordion data from the database
$stmt = $pdo->query('SELECT * FROM accordions');
$accordions = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Generate HTML markup for the accordions
foreach ($accordions as $accordion) {
  echo '<button class="accordion">' . $accordion['title'] . '</button>';
  echo '<div class="panel">' . $accordion['content'] . '</div>';
}
?>
