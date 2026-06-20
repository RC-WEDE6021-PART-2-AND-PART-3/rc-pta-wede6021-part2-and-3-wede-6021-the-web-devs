<?php

session_start();

if(!isset($_SESSION['AdminID']))
{
    header("Location: adminLogin.php");
    exit();
}

include("DBConn.php");

$id = $_GET['id'];

$result =
mysqli_query(
$conn,
"SELECT * FROM tbluser
WHERE UserID='$id'"
);

$row = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];

    mysqli_query(
    $conn,
    "UPDATE tbluser
     SET Name='$name',
         Email='$email'
     WHERE UserID='$id'"
    );

    header("Location: adminDashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit User</title>
</head>
<body>

<h1>Edit User</h1>

<form method="POST">

Name<br>
<input type="text"
name="name"
value="<?php echo $row['Name']; ?>">
<br><br>

Email<br>
<input type="email"
name="email"
value="<?php echo $row['Email']; ?>">
<br><br>

<input type="submit"
name="update"
value="Update User">

<a href="editUser.php?id=<?php echo $row['UserID']; ?>">
Edit
</a>

|

<a href="deleteUser.php?id=<?php echo $row['UserID']; ?>">
Delete
</a>
</form>

</body>
</html>