<?php
include("DBConn.php");

$message = "";

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn->query("INSERT INTO tbluser (name,email,password,role,status)
                  VALUES ('$name','$email','$password','user','pending')");

    $message = "Registered successfully! Please login.";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<style>
body {font-family:Arial; background:#f7f3ef; display:flex; justify-content:center; align-items:center; height:100vh;}
.card {background:white; padding:40px; border-radius:12px; width:350px; text-align:center;}
input {width:100%; padding:10px; margin:8px 0; border-radius:8px;}
button {width:100%; padding:12px; border-radius:25px; background:#8b6f47; color:white;}
</style>
</head>

<body>

<div class="card">
<h2>Create Account</h2>

<p>Please fill in your details to register.</p>

<form method="POST">
<input type="text" name="name" placeholder="Full Name" required>
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button name="register">Register</button>
</form>

<p><?php echo $message; ?></p>

<a href="login.php">Back to Login</a>
</div>

</body>
</html>