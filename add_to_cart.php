<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_GET['id'])) {
    $_SESSION['cart'][] = $_GET['id'];
    header("Location: viewClothing.php");
    exit();
} else {
    header("Location: viewClothing.php");
}
.card:hover {
    transform: translateY(-5px);
    transition: 0.3s;
}