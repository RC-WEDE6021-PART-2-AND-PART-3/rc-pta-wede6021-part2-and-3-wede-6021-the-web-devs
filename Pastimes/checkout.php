<?php

session_start();

if(!isset($_SESSION['UserID']))
{
    header("Location: login.php");
    exit();
}

include("DBConn.php");

$userID = $_SESSION['UserID'];

$sql =
"SELECT *
 FROM tblCart
 INNER JOIN tblClothes
 ON tblCart.ClothesID=tblClothes.ClothesID
 WHERE tblCart.UserID='$userID'";

$result = mysqli_query($conn,$sql);

$total = 0;

while($row=mysqli_fetch_assoc($result))
{
    $total +=
    ($row['Price'] * $row['Quantity']);
}

if(isset($_POST['placeOrder']))
{
    $address =
    mysqli_real_escape_string(
    $conn,
    $_POST['address']
    );

    mysqli_query(
    $conn,
    "INSERT INTO tblOrder
    (UserID,DeliveryAddress,
    TotalAmount,OrderDate)
    VALUES
    ('$userID','$address',
    '$total',NOW())"
    );

    mysqli_query(
    $conn,
    "DELETE FROM tblCart
     WHERE UserID='$userID'"
    );

    echo "Order Placed Successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Checkout</title>
<link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<?php include("navbar.php"); ?>

<h1>Checkout</h1>

<h2>
Total Amount:
R<?php echo $total; ?>
</h2>

<form method="POST">

Delivery Address

<br><br>

<textarea
name="address"
required
rows="5"
cols="50">
</textarea>

<br><br>

<input type="submit"
name="placeOrder"
value="Place Order">

</form>

<?php include("footer.php"); ?>
</body>
</html>