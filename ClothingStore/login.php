<?php
session_start();
include("DBConn.php");

$message = "";

if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tbluser WHERE name='$name' AND email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if ($row['status'] == 'verified') {
            $_SESSION['user'] = $row['name'];
            $_SESSION['role'] = $row['role'];
            header("Location: user.php");
            exit();
        } else {
            $message = "Account not verified yet.";
        }
    } else {
        $message = "Invalid login details.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<style>
body {
    margin:0;
    font-family:Arial;
    background:#f7f3ef;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.card {
    background:white;
    padding:40px;
    width:350px;
    border-radius:12px;
    text-align:center;
}

input {
    width:100%;
    padding:10px;
    margin:8px 0;
    border-radius:8px;
}

button {
    width:100%;
    padding:12px;
    border-radius:25px;
    background:#8b6f47;
    color:white;
}
</style>

</head>

<body>

<div class="card">

<h1>PastTimes</h1>

<p>Luxury pre-loved fashion made simple.</p>

<form method="POST">
<input type="text" name="name" placeholder="Full Name" required>
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button name="login">Login</button>
</form>

<p><?php echo $message; ?></p>

<a href="register.php">Register</a>

</div>

</body>
</html>