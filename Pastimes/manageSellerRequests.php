<?php

session_start();

if(!isset($_SESSION['AdminID']))
{
    header("Location: adminLogin.php");
    exit();
}

include("DBConn.php");

if(isset($_GET['approve']))
{
    $id = $_GET['approve'];

    mysqli_query(
    $conn,
    "UPDATE tblSellerRequest
     SET Status='Approved'
     WHERE RequestID='$id'"
    );
}

$result = mysqli_query(
$conn,
"SELECT * FROM tblSellerRequest"
);

?>

<!DOCTYPE html>
<html>
<head>
<title>Seller Requests</title>
</head>
<body>
<?php include("navbar.php"); ?>

<h1>Seller Requests</h1>

<table border="1">

<tr>
<th>ID</th>
<th>User</th>
<th>Brand</th>
<th>Description</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['RequestID']; ?></td>
<td><?php echo $row['UserID']; ?></td>
<td><?php echo $row['Brand']; ?></td>
<td><?php echo $row['Description']; ?></td>
<td><?php echo $row['Status']; ?></td>

<td>

<a href="manageSellerRequests.php?approve=<?php echo $row['RequestID']; ?>">
Approve
</a>

</td>

</tr>

<?php } ?>

</table>

<?php include("footer.php"); ?>
</body>
</html>