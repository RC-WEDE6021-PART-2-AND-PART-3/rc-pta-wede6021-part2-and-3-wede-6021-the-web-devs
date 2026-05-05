<!DOCTYPE html>
<html>
<head>
<title>Sell</title>

<style>
body {
    font-family: Arial;
    background: #f7f3ef;
    margin: 0;
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
    text-align: center;
    margin: 40px auto;
    width: 70%;
}

/* CARD */
.card {
    background: white;
    padding: 30px;
    border-radius: 12px;
}

/* TEXT */
h2 {
    color: #5c4a3d;
}

p {
    color: #7a6a5d;
}

/* GRID */
.grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 15px;
    margin-top: 20px;
}

/* UPLOAD BOX */
.box {
    background: #f0e7dd;
    height: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 30px;
    border-radius: 12px;
    cursor: pointer;
    transition: 0.3s;
}
.card:hover {
    transform: translateY(-5px);
    transition: 0.3s;
}
.box:hover {
    background: #e0d2c1;
}

/* FOOTER */
.footer {
    background: #8b6f47;
    color: white;
    text-align: center;
    padding: 15px;
    margin-top: 40px;
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

<!-- MAIN CONTENT -->
<div class="container">

<div class="card">

<h2>Sell Your Clothes</h2>

<p>
At PastTimes, you can give your clothes a second life by selling them on our platform.  
Simply upload images of the items you would like to sell, and connect with buyers who appreciate your style.  
Make sure your photos are clear and show the clothing from different angles.
</p>

<!-- TOP 4 BOXES -->
<div class="grid">
<div class="box">+</div>
<div class="box">+</div>
<div class="box">+</div>
<div class="box">+</div>
</div>

<!-- BOTTOM 4 BOXES -->
<div class="grid">
<div class="box">+</div>
<div class="box">+</div>
<div class="box">+</div>
<div class="box">+</div>
</div>

</div>

</div>

<!-- FOOTER -->
<div class="footer">
<p>PastTimes © 2026 | Sustainable Fashion Marketplace</p>
</div>

</body>
</html>