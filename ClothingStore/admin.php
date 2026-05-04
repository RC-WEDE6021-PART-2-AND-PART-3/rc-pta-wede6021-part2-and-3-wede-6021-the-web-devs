<?php
include("DBConn.php");
include("style.php");

$result = $conn->query("SELECT * FROM tbluser");
?>

<div class="navbar">
    <div>Admin Panel</div>
</div>

<table border="1">
<tr>
<th>ID</th><th>Name</th><th>Email</th><th>Status</th><th>Action</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>

<tr>
<td><?php echo $row['userID']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['status']; ?></td>

<td>

<?php 
// VERIFY
if ($row['status'] == 'pending') { ?>
    <a href="verify.php?id=<?php echo $row['userID']; ?>">Verify</a>
<?php } else { ?>
    Verified
<?php } ?>

&nbsp; | &nbsp;

<!-- EDIT -->
<a href="editUser.php?id=<?php echo $row['userID']; ?>">Edit</a>

&nbsp; | &nbsp;

<!-- DELETE -->
<a href="deleteUser.php?id=<?php echo $row['userID']; ?>" 
onclick="return confirm('Are you sure you want to delete this user?')">
Delete
</a>

</td>

</tr>

<?php } ?>

</table>