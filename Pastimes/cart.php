<?php

session_start();

if(!isset($_SESSION['UserID']))
{
    header("Location: login.php");
    exit();
}

include("DBConn.php");

$userID = $_SESSION['UserID'];

$sql = "
SELECT *
FROM tblCart
INNER JOIN tblClothes
ON tblCart.ClothesID = tblClothes.ClothesID
WHERE tblCart.UserID='$userID'
";

$result = mysqli_query($conn,$sql);

$total = 0;

?>

<!DOCTYPE html>
<html>

<head>

<title>Shopping Cart</title>

<link rel="stylesheet" href="CSS/style.css">

</head>

<body>

<?php include("navbar.php"); ?>

<div class="section">

<h1 class="page-title">
🛒 My Shopping Cart
</h1>

<div class="cart-table-container">

<table class="cart-table">

<tr>

<th>Product</th>

<th>Item</th>

<th>Price</th>

<th>Quantity</th>

<th>Total</th>

<th>Actions</th>

</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{

$itemTotal =
$row['Price'] * $row['Quantity'];

$total += $itemTotal;

?>

<tr>

<td>

<img
class="cart-image"
src="uploads/<?php echo $row['Image']; ?>"
alt="<?php echo $row['Name']; ?>">

</td>

<td>

<?php echo $row['Name']; ?>

</td>

<td>

R<?php echo number_format($row['Price'],2); ?>

</td>

<td>

<?php echo $row['Quantity']; ?>

</td>

<td class="cart-price">

R<?php echo number_format($itemTotal,2); ?>

</td>

<td>

<a
class="action-btn update-btn"
href="updateCart.php?id=<?php echo $row['CartID']; ?>">
Update
</a>

<a
class="action-btn remove-btn"
href="removeCartItem.php?id=<?php echo $row['CartID']; ?>">
Remove
</a>

</td>

</tr>

<?php
}
?>

</table>

</div>

<div class="cart-summary">

<h2>

Grand Total:
<span class="grand-total">

R<?php echo number_format($total,2); ?>

</span>

</h2>

<div class="cart-buttons">

<a class="btn" href="clothes.php">
Continue Shopping
</a>

<a class="btn checkout-btn" href="checkout.php">
Checkout
</a>

</div>

</div>

</div>

<?php include("footer.php"); ?>

</body>
</html>