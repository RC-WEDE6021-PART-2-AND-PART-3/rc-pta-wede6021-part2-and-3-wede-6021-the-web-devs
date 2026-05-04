<?php include("DBConn.php"); ?>

<!DOCTYPE html>
<html>
<head>
<title>Shop</title>

<style>
body {font-family:Arial;background:#f7f3ef;}

.products {
    display:flex;
    gap:30px;
    padding:40px;
}

.card {
    background:white;
    padding:15px;
    width:220px;
    border-radius:10px;
}

.card img {
    width:100%;
}

.btn {
    padding:8px 15px;
    background:#8b6f47;
    color:white;
    border-radius:25px;
    text-decoration:none;
}

.image-row {
    display: flex;
    justify-content: center;
    gap: 20px;           /* space between images */
    margin-top: 20px;
}

.img-style {
    width: 250px;     /* change this to resize ALL images */
    height: 250px;    /* makes them equal height */
    object-fit: cover; /* prevents stretching */
    border-radius: 10px;
}

.img-box p {
    margin-top: 10px;
    font-weight: bold;
    color: #5c4a3d;
}
</style>

</head>

<body>

<h2 style="text-align:center;">Our Collection</h2>

<br>
<br>

<div class="image-row">

<div class="img-box">
    
        <img src="images/product1.jpg" class="img-style">
        <p>Hoodies</p>
    </div>

    <div class="img-box">
        <img src="images/product2.jpg" class="img-style">
        <p>Classic Sneakers</p>
    </div>

    <div class="img-box">
        <img src="images/product3.jpg" class="img-style">
        <p>Swearpants Collection</p>

</div>




<div class="products">

<?php
$result = $conn->query("SELECT * FROM tblclothes");

while($row = $result->fetch_assoc()) {
echo "<div class='card'>";
echo "<img src='images/product1.jpg'>";
//echo "<img src='images/product".$row['clothingID'].".jpg'>";
echo "<h3>".$row['name']."</h3>";
echo "<p>R".$row['price']."</p>";
echo "<a class='btn' href='placeOrder.php?id=".$row['clothingID']."'>Order</a>";
echo "</div>";
}
?>

</div>

</body>
</html>