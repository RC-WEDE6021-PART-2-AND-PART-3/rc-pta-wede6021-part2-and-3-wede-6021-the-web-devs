<?php 
session_start();

// Save login time if not already set
if (!isset($_SESSION['login_time'])) {
    $_SESSION['login_time'] = date("Y-m-d H:i:s");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Profile</title>

<style>
body {
    font-family: Arial;
    margin: 0;
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
    font-size: 14px;
}

/* CONTAINER */
.container {
    display: flex;
    justify-content: center;
    margin-top: 60px;
}

/* PROFILE CARD */
.card {
    background: white;
    padding: 30px;
    width: 400px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    text-align: left;
}

/* TITLE */
.card h2 {
    text-align: center;
    color: #5c4a3d;
}

/* INFO */
.info {
    margin: 15px 0;
    padding: 10px;
    background: #f0e7dd;
    border-radius: 10px;
}
</style>

</head>

<body>

<!-- NAVBAR -->
<div class="navbar">

<strong>PastTimes</strong>

<div>
<a href="user.php">Home</a>
<a href="about.php">About</a>
<a href="viewClothing.php">Shop</a>
<a href="sell.php">Sell</a>
<a href="orders.php">Orders</a>
<a href="contact.php">Contact</a>
<a href="profile.php">Profile</a>
<a href="logout.php">Logout</a>
</div>

</div>

<!-- PROFILE CONTENT -->
<div class="container">

<div class="card">

<h2>My Profile</h2>

<div class="info">
<strong>Name:</strong> <?php echo "Admin Nkosi"; ?>
</div>

<div class="info">
<strong>Surname:</strong> Not provided
</div>

<div class="info">
<strong>Email:</strong> Not stored yet
</div>

<div class="info">
<strong>Age:</strong> Not provided
</div>

<div class="info">
<strong>Login Time:</strong> <?php echo $_SESSION['login_time']; ?>
</div>

</div>

</div>

</body>
</html>