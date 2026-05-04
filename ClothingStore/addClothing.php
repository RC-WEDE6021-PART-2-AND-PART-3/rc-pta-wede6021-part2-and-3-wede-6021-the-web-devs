<?php
session_start();
include("DBConn.php");

if ($_SESSION['role'] != 'admin') {
    header("Location: login.php");
}

$message = "";

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $size = $_POST['size'];

    $conn->query("INSERT INTO tblclothes (name,price,size) VALUES ('$name','$price','$size')");
    $message = "Item added!";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Clothing</title>
<?php include("style.php"); ?>
</head>

<body>

<?php include("navbar.php"); ?>

<div class="container">

<h2>Add Clothing</h2>

<form method="POST">
Name:<br>
<input type="text" name="name"><br><br>

Price:<br>
<input type="number" name="price"><br><br>

Size:<br>
<input type="text" name="size"><br><br>

<input class="btn" type="submit" name="add" value="Add">
</form>

<p><?php echo $message; ?></p>

</div>
</body>
</html>