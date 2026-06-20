<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "storeclothing";

$conn = mysqli_connect(
    $servername,
    $username,
    $password,
    $dbname
);

if (!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
}

?>