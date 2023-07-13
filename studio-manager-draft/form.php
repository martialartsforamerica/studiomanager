<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0">
</head>
<body>
	<form method="POST">
    <?php
error_reporting(E_ALL & ~E_NOTICE);

$link = mysqli_connect("localhost","root","","curriculum");

$sql = "SELECT categoryname FROM categories GROUP BY categoryname;";

$result = mysqli_query($link,$sql);
if ($result != 0) {
    echo '<label>Category: ';
    echo '<select name="city">';
    echo '<option value="">all</option>';

    $num_results = mysqli_num_rows($result);
    for ($i=0;$i<$num_results;$i++) {
        $row = mysqli_fetch_array($result);
        $categoryname = $row['categoryname'];
        echo '<option value="' .$categoryname. '">' .$categoryname. '</option>';
    }

    echo '</select>';
    echo '</label>';
}

mysqli_close($link);

?>
<br><br>
<?php
error_reporting(E_ALL & ~E_NOTICE);

$link = mysqli_connect("localhost","root","","curriculum");

$sql = "SELECT program_name FROM programs GROUP BY program_name;";

$result = mysqli_query($link,$sql);
if ($result != 0) {
    echo '<label>Program: ';
    echo '<select name="city">';
    echo '<option value="">all</option>';

    $num_results = mysqli_num_rows($result);
    for ($i=0;$i<$num_results;$i++) {
        $row = mysqli_fetch_array($result);
        $program_name = $row['program_name'];
        echo '<option value="' .$program_name. '">' .$program_name. '</option>';
    }

    echo '</select>';
    echo '</label>';
}

mysqli_close($link);

?><br>
		<br>
        <label for="technique">Technique:</label>
		<input type="submit" value="Add" name="submit">
	</form>
	<br>
</body>
</html>
