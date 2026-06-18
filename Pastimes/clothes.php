<?php

session_start();
include("DBConn.php");

$search = "";

if(isset($_GET['search']))
{
    $search = $_GET['search'];

    $result = mysqli_query(
    $conn,
    "SELECT * FROM tblClothes
     WHERE Name LIKE '%$search%'
     OR Brand LIKE '%$search%'"
    );
}
else
{
    $result = mysqli_query(
    $conn,
    "SELECT * FROM tblClothes"
    );
}

?>

<!DOCTYPE html>
<html>
<head>

<title>Pastimes Clothing Store</title>

<link rel="stylesheet" href="CSS/style.css">

</head>

<body>

<?php include("navbar.php"); ?>

<div class="section">

<h1 style="text-align:center; margin-bottom:30px;">
Pastimes Clothing Store
</h1>

<form method="GET">

<input
type="text"
name="search"
placeholder="Search clothing..."
value="<?php echo $search; ?>">

<input
type="submit"
value="Search">

</form>

<br><br>

<div class="products">

<?php

while($row=mysqli_fetch_assoc($result))
{
?>

<div class="card">

<img
src="uploads/<?php echo $row['Image']; ?>"
alt="<?php echo $row['Name']; ?>">

<div class="card-content">

<h3>
<?php echo $row['Name']; ?>
</h3>

<p>
<strong>Brand:</strong>
<?php echo $row['Brand']; ?>
</p>

<p>
<?php echo $row['Description']; ?>
</p>

<p class="price">
R<?php echo number_format($row['Price'],2); ?>
</p>

<a
class="btn"
href="addToCart.php?id=<?php echo $row['ClothesID']; ?>">
Add To Cart
</a>

<br><br>

<a
class="btn"
href="addToWishlist.php?id=<?php echo $row['ClothesID']; ?>">
Add To Wishlist
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