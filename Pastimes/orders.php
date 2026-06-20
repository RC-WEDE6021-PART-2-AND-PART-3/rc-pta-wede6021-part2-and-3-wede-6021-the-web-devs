<?php

session_start();
include("DBConn.php");

$userID = $_SESSION['UserID'];

$sql = "
SELECT *
FROM tblOrder
WHERE UserID='$userID'
ORDER BY OrderDate DESC
";

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
<head>

<title>My Orders</title>

<link rel="stylesheet" href="CSS/style.css">


<!-- test code, place under "echo $row['Status'];" if need be 

echo "<pre>";
print_r($row);
echo "</pre>";?>


-->

</head>
<body>

<?php include("navbar.php"); ?>

<div class="section">

<h1 class="page-title">
📦 My Orders
</h1>

<div class="wishlist-table-container">

<table class="wishlist-table">

<tr>
<th>Order ID</th>
<th>Total</th>
<th>Status</th>
<th>Date</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td>
#<?php echo $row['OrderID']; ?>
</td>

<td>
R<?php echo number_format($row['TotalAmount'],2); ?>
</td>

<td>


<span class="status-badge">
<!--paste right here, if it breaks revert back to orginal code-->
<?php echo $row['Status']; ?>

</span>

</td>

<td>
<?php echo $row['OrderDate']; ?>
</td>

</tr>

<?php
}
?>

</table>

</div>

</div>

<?php include("footer.php"); ?>

</body>
</html>