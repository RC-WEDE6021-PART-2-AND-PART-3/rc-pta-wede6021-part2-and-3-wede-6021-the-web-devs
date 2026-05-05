<?php
include("DBConn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = hash('sha256', $_POST['password']);

    $role = "Customer";
    $status = "Pending";

    $conn->query("INSERT INTO tblUser (name,email,password,role,status)
    VALUES ('$name','$email','$password','$role','$status')");

    echo "<script>alert('Registered successfully! Please login'); window.location='login.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>

<style>
body {
    margin: 0;
    font-family: Arial;
    background: #f7f3ef;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* CARD */
.card {
    background: white;
    padding: 40px;
    width: 350px;
    border-radius: 15px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

/* TITLE */
h1 {
    color: #5c4a3d;
    margin-bottom: 10px;
}

.subtitle {
    color: #8b6f47;
    margin-bottom: 20px;
    font-size: 14px;
}

/* INPUTS */
input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 8px;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* BUTTON */
button {
    width: 100%;
    padding: 12px;
    border-radius: 25px;
    background: #8b6f47;
    color: white;
    border: none;
    cursor: pointer;
    margin-top: 10px;
    font-size: 15px;
}

button:hover {
    background: #6d5638;
    transform: scale(1.03);
    transition: 0.3s;
}
.card:hover {
    transform: translateY(-5px);
    transition: 0.3s;
}
/* LINK */
a {
    display: block;
    margin-top: 15px;
    color: #8b6f47;
    text-decoration: none;
}
</style>

</head>

<body>

<div class="card">

<h1>PastTimes</h1>
<p class="subtitle">Create your account to start shopping sustainable fashion ✨</p>

<form method="POST">

<input type="text" name="name" placeholder="Enter your full name" required>

<input type="email" name="email" placeholder="Enter your email address" required>

<input type="password" name="password" placeholder="Create a password" required>

<button type="submit">Register</button>

</form>

<a href="login.php">Already have an account? Login</a>

</div>

</body>
</html>