<?php

include("DBConn.php");

$result =
mysqli_query(
$conn,
"SELECT * FROM tblUser"
);

?>

<!DOCTYPE html>
<html>
<head>

<title>Manage Users</title>

<link rel="stylesheet" href="CSS/style.css">

</head>
<body>

<?php include("navbar.php"); ?>

<div class="section">

<h1 class="page-title">
👥 Manage Users
</h1>

<div class="wishlist-table-container">

<table class="wishlist-table">

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Status</th>
</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['UserID']; ?></td>

<td><?php echo $row['Name']; ?></td>

<td><?php echo $row['Email']; ?></td>

<td><?php echo $row['Verified']; ?></td>

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