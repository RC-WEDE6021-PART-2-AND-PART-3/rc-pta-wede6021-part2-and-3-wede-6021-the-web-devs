<?php include("DBConn.php"); ?>

<!DOCTYPE html>
<html>
<head>
<title>Orders Dashboard</title>

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
    width: 90%;
    margin: 40px auto;
}

/* TITLE */
h2, h3 {
    text-align: center;
    color: #5c4a3d;
}

/* ORDER CARDS */
.orders {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

/* CARD */
.card {
    background: white;
    padding: 20px;
    width: 250px;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}

/* GRAPH */
.graph {
    margin-top: 40px;
    text-align: center;
}

.bar-container {
    width: 60%;
    margin: 10px auto;
    background: #eee;
    border-radius: 10px;
}

.bar {
    height: 20px;
    background: #8b6f47;
    border-radius: 10px;
    text-align: right;
    color: white;
    padding-right: 5px;
}

/* TABLE */
table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
    background: white;
    border-radius: 12px;
    overflow: hidden;
}

th {
    background: #8b6f47;
    color: white;
    padding: 12px;
}

td {
    padding: 10px;
    text-align: center;
    border-bottom: 1px solid #eee;
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

<div class="container">

<h2>Orders Dashboard</h2>

<div class="orders">

<?php
$result = $conn->query("SELECT * FROM tblorder");

if (!$result) {
    die("SQL Error: " . $conn->error);
}

/* RANDOM DATA */
$items = ["Vintage Jacket", "Beige Hoodie", "Classic Jeans", "White Sneakers"];
$locations = ["Johannesburg", "Cape Town", "Durban", "Pretoria"];
$times = ["2 days", "3 days", "5 days", "1 week"];

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

        $items = ["Vintage Jacket", "Beige Hoodie", "Classic Jeans", "White Sneakers"];
        $locations = ["Johannesburg", "Cape Town", "Durban", "Pretoria"];
        $times = ["2 days", "3 days", "5 days", "1 week"];

        $item = $items[array_rand($items)];
        $location = $locations[array_rand($locations)];
        $time = $times[array_rand($times)];

        echo "<div class='card'>";
        echo "<strong>Order ID:</strong> ".$row['orderID']."<br><br>";
        echo "<strong>Item:</strong> ".$item."<br>";
        echo "<strong>Delivery:</strong> ".$location."<br>";
        echo "<strong>ETA:</strong> ".$time."<br>";
        echo "</div>";
    }

} else {
    echo "<p style='text-align:center;'>No orders yet.</p>";
}
?>

</div>

<!-- GRAPH -->
<div class="graph">

<h3>Order Insights</h3>

<div class="bar-container">
<div class="bar" style="width:70%;">Completed</div>
</div>

<div class="bar-container">
<div class="bar" style="width:50%;">In Transit</div>
</div>

<div class="bar-container">
<div class="bar" style="width:30%;">Pending</div>
</div>

</div>

<!-- FAKE TABLE -->
<h3>Recent Orders (Sample Data)</h3>

<table>

<tr>
<th>Order ID</th>
<th>Item</th>
<th>Location</th>
<th>Delivery Time</th>
<th>Status</th>
</tr>

<tr>
<td>101</td>
<td>Beige Hoodie</td>
<td>Johannesburg</td>
<td>2 Days</td>
<td>In Transit</td>
</tr>

<tr>
<td>102</td>
<td>Vintage Jacket</td>
<td>Cape Town</td>
<td>3 Days</td>
<td>Delivered</td>
</tr>

<tr>
<td>103</td>
<td>Classic Jeans</td>
<td>Durban</td>
<td>5 Days</td>
<td>Pending</td>
</tr>

<tr>
<td>104</td>
<td>White Sneakers</td>
<td>Pretoria</td>
<td>2 Days</td>
<td>Delivered</td>
</tr>

<tr>
<td>105</td>
<td>Oversized T-Shirt</td>
<td>Johannesburg</td>
<td>1 Week</td>
<td>In Transit</td>
</tr>

<tr>
<td>106</td>
<td>Denim Jacket</td>
<td>Cape Town</td>
<td>4 Days</td>
<td>Pending</td>
</tr>

</table>

</div>

</body>
</html>