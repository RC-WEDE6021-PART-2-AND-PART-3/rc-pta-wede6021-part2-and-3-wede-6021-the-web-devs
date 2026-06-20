<?php

session_start();

if(!isset($_SESSION['AdminID']))
{
    header("Location: adminLogin.php");
    exit();
}

include("DBConn.php");

$result = mysqli_query(
$conn,
"SELECT *
 FROM tblContact
 ORDER BY DateSent DESC"
);

?>

<!DOCTYPE html>
<html>
<head>
<title>Contact Messages</title>
</head>
<body>

<h1>Contact Messages</h1>

<table border="1" cellpadding="10">

<tr>
<th>Name</th>
<th>Email</th>
<th>Subject</th>
<th>Message</th>
<th>Date</th>
</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['Name']; ?></td>

<td><?php echo $row['Email']; ?></td>

<td><?php echo $row['Subject']; ?></td>

<td><?php echo $row['Message']; ?></td>

<td><?php echo $row['DateSent']; ?></td>

</tr>

<?php
}
?>

</table>

</body>
</html>