<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>

<style>
body {margin:0;font-family:Arial;background:#f7f3ef;}

.navbar {
    display:flex;
    justify-content:space-between;
    padding:20px 40px;
    background:white;
}

.navbar a {
    margin:0 10px;
    text-decoration:none;
    background:#8b6f47;
    color:white;
    padding:8px 15px;
    border-radius:25px;
}

.hero {
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:60px;
}
.card:hover {
    transform: translateY(-5px);
    transition: 0.3s;
}
.hero img {
    width:400px;
    border-radius:10px;
}

.hero-text h1 {
    font-size:40px;
}

.btn {
    padding:10px 20px;
    background:#8b6f47;
    color:white;
    border-radius:25px;
    text-decoration:none;
}
</style>

</head>

<body>

<div class="navbar">
<strong>PastTimes</strong>

<div>
<a href="about.php">About</a>
<a href="viewClothing.php">Shop</a>
<a href="sell.php">Sell</a>
<a href="orders.php">Orders</a>
<a href="contact.php">Contact</a>
<a href="profile.php">Profile</a>
<a href="logout.php">Logout</a>
</div>
</div>

<div class="hero">

<div class="hero-text">
<h1>Timeless Fashion</h1>
<p>Discover curated pre-loved fashion.</p>

<a href="viewClothing.php" class="btn">Shop Now</a>
</div>

<img src="images/hero.jpg">

</div>

</body>
</html>