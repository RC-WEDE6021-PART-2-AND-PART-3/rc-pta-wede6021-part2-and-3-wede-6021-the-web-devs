<?php
include("DBConn.php");

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tblUser 
            WHERE email='$email' 
            AND password='$password' 
            AND role='admin'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: admin.php");
        exit();
    } else {
        $message = "❌ Not an admin or wrong details!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>

<h2>Admin Login</h2>

<form method="POST">
    Email: <input type="email" name="email" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit">Login</button>
</form>

<p style="color:red;"><?php echo $message; ?></p>

</body>
</html>