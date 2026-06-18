<?php

include("DBConn.php");

$result =
mysqli_query(
$conn,
"SELECT * FROM tblClothes"
);

?>

<!DOCTYPE html>
<html>
<head>

<title>Manage Clothing</title>

<link rel="stylesheet" href="CSS/style.css">

</head>
<body>

<?php include("navbar.php"); ?>

<div class="section">

<h1 class="page-title">
👕 Manage Clothing
</h1>

<div class="products">

<?php

while($row=mysqli_fetch_assoc($result))
{
?>

<div class="card">

<img
src="uploads/<?php echo $row['Image']; ?>">

<div class="card-content">

<h3>
<?php echo $row['Name']; ?>
</h3>

<p>
<?php echo $row['Brand']; ?>
</p>

<p class="price">
R<?php echo $row['Price']; ?>
</p>

<a class="btn">
Edit
</a>

<br><br>

<a class="btn">
Delete
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