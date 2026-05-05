<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Simple cart logic: store IDs in an array
    $_SESSION['cart'][] = $id;
    echo "<script>alert('Item added to cart!'); window.location.href='viewClothing.php';</script>";
} else {
    header("Location: viewClothing.php");
}
?>
