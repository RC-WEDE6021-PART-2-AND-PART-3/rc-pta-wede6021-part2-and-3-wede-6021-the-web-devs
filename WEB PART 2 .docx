<?php
include("DBConn.php");

$id = $_GET['id'];

$conn->query("UPDATE tbluser SET status='verified' WHERE userID='$id'");

header("Location: admin.php");
?>