<?php

$serverName = "localhost";
$dBUsername = "root";    //Database username
$dBPassword = "";    //Database password
$dBName = "my_db"; //Database servername

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName, 3306);

if (!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}
