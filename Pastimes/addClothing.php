<?php

session_start();

if(!isset($_SESSION['UserID']))
{
    header("Location: login.php");
    exit();
}

include("DBConn.php");

$message = "";

if(isset($_POST['upload']))
{
    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $image = $_FILES['image']['name'];

    move_uploaded_file(
    $_FILES['image']['tmp_name'],
    "uploads/".$image
    );

    $userID = $_SESSION['UserID'];

    $sql =
    "INSERT INTO tblClothes
    (Name,Brand,Category,Description,Price,Image,SellerID,Status)
    VALUES
    ('$name','$brand','$category','$description','$price',
    '$image','$userID','Available')";

    mysqli_query($conn,$sql);

    $message = "Clothing uploaded successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Sell Clothing</title>

<link rel="stylesheet" href="CSS/style.css">

</head>
<body>
<?php include("navbar.php"); ?>

<div class="section">

<h1 style="text-align:center; margin-bottom:30px;">
Sell Your Clothing
</h1>

<?php
if($message != "")
{
    echo "<p style='text-align:center;color:green;font-weight:bold;'>$message</p><br>";
}
?>

<form method="POST" enctype="multipart/form-data">

<label>Clothing Name</label>
<input type="text" name="name" required>

<label>Brand</label>
<input type="text" name="brand" required>

<label>Category</label>

<select name="category">

<option>Shirts</option>
<option>Shoes</option>
<option>Jackets</option>
<option>Dresses</option>
<option>Accessories</option>

</select>

<label>Description</label>

<textarea
name="description"
rows="5"
required></textarea>

<label>Price (R)</label>

<input
type="number"
step="0.01"
name="price"
required>

<label>Upload Image</label>

<input
type="file"
name="image"
required>

<input
type="submit"
name="upload"
value="Upload Clothing">

</form>

</div>

<?php include("footer.php"); ?>
</body>
</html>