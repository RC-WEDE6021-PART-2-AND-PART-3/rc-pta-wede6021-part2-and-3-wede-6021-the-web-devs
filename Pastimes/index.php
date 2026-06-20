<?php
include("DBConn.php");

$featured = mysqli_query(
$conn,
"SELECT * FROM tblClothes LIMIT 6"
);
?>

<!DOCTYPE html>
<html>
<head>
<title>Pastimes Clothing Store</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include("navbar.php"); ?>

<div class="hero">

<h1>PASTIMES</h1>

<p>
Buy & Sell Quality Second-Hand Fashion
</p>

<a href="clothes.php">
Shop Now
</a>

</div>

<div class="section">


<h2>Featured Products</h2>


<div class="products">

<?php

while($row=mysqli_fetch_assoc($featured))
{
?>

<div class="card">

<img src="uploads/<?php echo $row['Image']; ?>">

<div class="card-content">

<h3>
<?php echo $row['Name']; ?>
</h3>

<p>
<?php echo $row['Brand']; ?>
</p>

<p class="price">
R<?php echo $row['Price']; ?>
</p>

<a
class="btn"
href="addToCart.php?id=<?php echo $row['ClothesID']; ?>">
Add To Cart
</a>

</div>

</div>

<?php
}
?>

</div>

</div>

<?php include("footer.php"); ?>
</body>
</html>