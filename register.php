<?php
session_start();
include("DBConn.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$id = intval($_GET['id']);
$user_id = intval($_SESSION['user_id']);

$conn->query("INSERT INTO tblorder (userID, clothingID, quantity)
VALUES ('$user_id','$id',1)");

echo "<script>alert('Order placed successfully!'); window.location='orders.php';</script>";
?>