<?php

session_start();

if(!isset($_SESSION['AdminID']))
{
    header("Location: adminLogin.php");
    exit();
}

include("DBConn.php");

$id = $_GET['id'];

mysqli_query(
$conn,
"DELETE FROM tbluser WHERE UserID='$id'"
);

header("Location: adminDashboard.php");

?>