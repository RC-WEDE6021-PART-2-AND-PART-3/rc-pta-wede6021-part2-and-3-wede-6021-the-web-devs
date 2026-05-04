<?php
include("DBConn.php");

$id = $_GET['id'];

// Fetch user data
$result = $conn->query("SELECT * FROM tblUser WHERE userID=$id");
$user = $result->fetch_assoc();

if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];

    $conn->query("UPDATE tblUser 
                  SET name='$name', surname='$surname', email='$email' 
                  WHERE userID=$id");

    header("Location: admin.php");
}
?>

<h2>Edit User</h2>

<form method="POST">
    Name: <input type="text" name="name" value="<?php echo $user['name']; ?>"><br><br>
    Surname: <input type="text" name="surname" value="<?php echo $user['surname']; ?>"><br><br>
    Email: <input type="email" name="email" value="<?php echo $user['email']; ?>"><br><br>

    <button name="update">Update</button>
</form>