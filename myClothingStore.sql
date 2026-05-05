<?php
session_start();
include("DBConn.php");

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = hash('sha256', $_POST['password']);

    $sql = "SELECT * FROM tblUser WHERE name='$name' AND email='$email'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {

        $user = $result->fetch_assoc();

        if ($user['password'] === $password) {

            if ($user['status'] === 'Verified') {

                $_SESSION['user_id'] = $user['userID'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['role'] = $user['role'];

                header("Location: user.php");
                exit();

            } else {
                $message = "Account pending admin verification.";
            }

        } else {
            $message = "Wrong password.";
        }

    } else {
        $message = "User not found.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style>
    .card:hover {
    transform: translateY(-5px);
    transition: 0.3s;
}
body {display:flex;justify-content:center;align-items:center;height:100vh;background:#f7f3ef;font-family:Arial;}
.card {background:white;padding:40px;border-radius:12px;width:320px;text-align:center;}
input {width:100%;padding:10px;margin:10px 0;}
button {padding:10px;background:#8b6f47;color:white;border:none;border-radius:25px;width:100%;}
</style>
</head>

<body>

<div class="card">
<h1>PastTimes</h1>

<form method="POST">
<input type="text" name="name" placeholder="Name" required>
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button>Login</button>
</form>

<p style="color:red;"><?php echo $message; ?></p>

<a href="register.php">Register</a><br><br>
<a href="adminLogin.php">Admin Login</a>

</div>

</body>
</html>