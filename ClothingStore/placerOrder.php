<?php
include("DBConn.php");

$id = $_GET['id'];

$conn->query("INSERT INTO tblorder (clothingID) VALUES ('$id')");

echo "Order placed!";
?>