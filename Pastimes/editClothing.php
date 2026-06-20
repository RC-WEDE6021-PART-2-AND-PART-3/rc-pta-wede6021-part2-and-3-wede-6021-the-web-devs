<?php

session_start();

if(!isset($_SESSION['AdminID']))
{
    header("Location: adminLogin.php");
    exit();
}

include("DBConn.php");

$id = $_GET['id'];

$result = mysqli_query(
$conn,
"SELECT * FROM tblClothes
WHERE ClothesID='$id'"
);

$row = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    mysqli_query(
    $conn,
    "UPDATE tblClothes
     SET Name='$name',
         Brand='$brand',
         Description='$description',
         Price='$price'
     WHERE ClothesID='$id'"
    );

    header("Location: manageClothes.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Clothing</title>
</head>
<body>

<h1>Edit Clothing</h1>

<form method="POST">

Name<br>
<input type="text" name="name"
value="<?php echo $row['Name']; ?>">
<br><br>

Brand<br>
<input type="text" name="brand"
value="<?php echo $row['Brand']; ?>">
<br><br>

Description<br>
<textarea name="description"><?php echo $row['Description']; ?></textarea>
<br><br>

Price<br>
<input type="number" step="0.01"
name="price"
value="<?php echo $row['Price']; ?>">
<br><br>

<input type="submit"
name="update"
value="Update Clothing">

</form>

</body>
</html>