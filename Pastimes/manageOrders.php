<?php

session_start();

if(!isset($_SESSION['AdminID']))
{
    header("Location: adminLogin.php");
    exit();
}

include("DBConn.php");

$result = mysqli_query(
$conn,
"SELECT tblOrder.*, tblUser.Name
FROM tblOrder
INNER JOIN tblUser
ON tblOrder.UserID = tblUser.UserID"
);

?>

<!DOCTYPE html>
<html>
<head>
<title>Manage Orders</title>
</head>
<body>
<?php include("navbar.php"); ?>

<h1>All Orders</h1>

<table border="1" cellpadding="10">

<tr>
<th>Order ID</th>
<th>Customer</th>
<th>Total</th>
<th>Address</th>
<th>Date</th>
</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['OrderID']; ?></td>

<td><?php echo $row['Name']; ?></td>

<td>R<?php echo $row['TotalAmount']; ?></td>

<td><?php echo $row['DeliveryAddress']; ?></td>

<td><?php echo $row['OrderDate']; ?></td>

</tr>

<?php
}
?>

</table>

<?php include("footer.php"); ?>
</body>
</html>