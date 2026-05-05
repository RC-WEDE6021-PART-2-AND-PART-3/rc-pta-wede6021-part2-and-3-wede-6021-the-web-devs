<!DOCTYPE html>
<html>
<head>
<title>About</title>

<style>
body {
    font-family: Arial;
    background: #f7f3ef;
    margin: 0;
}
.card:hover {
    transform: translateY(-5px);
    transition: 0.3s;
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
    margin: 60px auto;
    width: 70%;
}

/* TITLE */
h1 {
    color: #5c4a3d;
    margin-bottom: 30px;
}

/* BUBBLES */
.bubbles {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.bubble {
    background: white;
    padding: 20px;
    width: 250px;
    border-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    color: #5c4a3d;
    transition: 0.3s;
}

.bubble:hover {
    transform: translateY(-5px);
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

<!-- CONTENT -->
<div class="container">

<h1>About PastTimes</h1>

<div class="bubbles">

<div class="bubble">
We specialise in selling pre-loved clothing that still has style and value.
</div>

<div class="bubble">
Users can sell their own clothes easily and reach a wider audience.
</div>

<div class="bubble">
We promote sustainability by reducing waste in the fashion industry.
</div>

<div class="bubble">
Every item gets a second chance to be worn and appreciated again.
</div>

<div class="bubble">
Join a growing community that values fashion, affordability, and purpose.
</div>

</div>

</div>

</body>
</html>