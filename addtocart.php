<?php
session_start();
include("DBConn.php");

// Restrict access to admin only
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'Admin') {
    header("Location: login.php");
    exit();
}

$message = "";

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $size = $_POST['size'];

    $conn->query("INSERT INTO tblclothes (name,price,size) VALUES ('$name','$price','$size')");
    $message = "Item added successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Clothing</title>

<style>
body {
    margin: 0;
    font-family: Arial;
    background: #f7f3ef;
}

/* NAVBAR */
.navbar {
    display: flex;
    justify-content: space-between;
    padding: 15px 30px;
    background: #e6d3c1;
}

.navbar a {
    text-decoration: none;
    background: #8b6f47;
    color: white;
    padding: 8px 15px;
    border-radius: 25px;
    margin: 0 5px;
}

/* CONTAINER */
.container {
    width: 40%;
    margin: 60px auto;
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    text-align: center;
}

/* TITLE */
h2 {
    color: #5c4a3d;
}

/* INPUTS */
input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 8px;
    border: 1px solid #ccc;
}

/* BUTTON */
.btn {
    width: 100%;
    padding: 12px;
    border-radius: 25px;
    background: #8b6f47;
    color: white;
    border: none;
    cursor: pointer;
    margin-top: 10px;
}
.card:hover {
    transform: translateY(-5px);
    transition: 0.3s;
}

.btn:hover {
    background: #6d5638;
    transform: scale(1.03);
    transition: 0.3s;
}

/* MESSAGE */
.success {
    color: green;
    margin-top: 10px;
}
</style>

</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
<strong>PastTimes</strong>
<div>
<a href="user.php">Home</a>
<a href="viewClothing.php">Shop</a>
<a href="orders.php">Orders</a>
<a href="logout.php">Logout</a>
</div>
</div>

<!-- FORM -->
<div class="container">

<h2>Add New Clothing Item</h2>

<form method="POST">

<input type="text" name="name" placeholder="Enter item name" required>

<input type="number" name="price" placeholder="Enter price (R)" required>

<input type="text" name="size" placeholder="Enter size (e.g. M, L, 32)" required>

<input class="btn" type="submit" name="add" value="Add Item">

</form>

<p class="success"><?php echo $message; ?></p>

</div>

</body>
</html>