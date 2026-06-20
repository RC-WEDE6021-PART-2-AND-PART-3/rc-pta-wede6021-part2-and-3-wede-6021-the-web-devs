<?php
session_start();
include("DBConn.php");
?>

<!DOCTYPE html>
<html>
<head>

<title>Admin Dashboard</title>

<link rel="stylesheet" href="CSS/style.css">

</head>
<body>

<?php include("navbar.php"); ?>

<div class="section">

<h1 class="page-title">
⚙ Admin Dashboard
</h1>

<div class="dashboard-grid">

<a href="manageUsers.php" class="dashboard-card">

<h2>Users</h2>

<p>
Manage customers and sellers
</p>

</a>

<a href="manageClothing.php" class="dashboard-card">

<h2>Clothing</h2>

<p>
Manage clothing items
</p>

</a>

<a href="orders.php" class="dashboard-card">

<h2>Orders</h2>

<p>
View all orders
</p>

</a>

<a href="messages.php" class="dashboard-card">

<h2>Messages</h2>

<p>
Buyer & Seller communication
</p>

</a>

</div>

</div>

<?php include("footer.php"); ?>

</body>
</html>