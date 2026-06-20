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
"SELECT *
 FROM tblWishlist
 WHERE UserID='$userID'
 AND ClothesID='$clothesID'"
);

if(mysqli_num_rows($check)==0)
{
    mysqli_query(
    $conn,
    "INSERT INTO tblWishlist
    (UserID, ClothesID)
    VALUES
    ('$userID','$clothesID')"
    );
}

header("Location: wishlist.php");

?>