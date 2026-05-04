<!DOCTYPE html>
<html>
<head>
<title>Contact</title>

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
    margin: 60px auto;
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

/* CONTACT BOXES */
.contact-boxes {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
    flex-wrap: wrap;
}

.box {
    background: #f0e7dd;
    padding: 20px;
    border-radius: 12px;
    width: 200px;
    transition: 0.3s;
}

.box:hover {
    background: #e0d2c1;
    transform: translateY(-5px);
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

<h2>Contact Us</h2>

<p>
We would love to hear from you!  
If you have any questions, concerns, or need assistance, feel free to reach out to us.  
You can call us directly or send us an email, and our team will respond as quickly as possible.
</p>

<div class="contact-boxes">

<div class="box">
<strong>Email</strong>
<p>support@pasttimes.com</p>
</div>

<div class="box">
<strong>Phone</strong>
<p>012 345 6789</p>
</div>

</div>

</div>

</div>

<!-- FOOTER -->
<div class="footer">
<p>PastTimes © 2026 | Customer Support Available</p>
</div>

</body>
</html>