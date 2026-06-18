<?php

session_start();

if(!isset($_SESSION['UserID']))
{
    header("Location: login.php");
    exit();
}

include("DBConn.php");

$userID = $_SESSION['UserID'];
$clothesID = $_GET['id'];

$check = mysqli_query(
$conn,
"SELECT * FROM tblCart
 WHERE UserID='$userID'
 AND ClothesID='$clothesID'"
);

if(mysqli_num_rows($check) > 0)
{
    mysqli_query(
    $conn,
    "UPDATE tblCart
     SET Quantity = Quantity + 1
     WHERE UserID='$userID'
     AND ClothesID='$clothesID'"
    );
}
else
{
    mysqli_query(
    $conn,
    "INSERT INTO tblCart
    (UserID, ClothesID, Quantity)
    VALUES
    ('$userID','$clothesID',1)"
    );
}

header("Location: cart.php");

?>