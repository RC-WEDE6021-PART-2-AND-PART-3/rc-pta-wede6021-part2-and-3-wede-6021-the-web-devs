<?php
session_start();
include("DBConn.php");

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = hash('sha256', $_POST['password']);

    $sql = "SELECT * FROM tblUser 
            WHERE email='$email' 
            AND password='$password' 
            AND role='Admin'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['role'] = 'Admin';
        header("Location: admin.php?success=1");
        exit();
    } else {
        $message = "Invalid admin login!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>

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

p.subtitle {
    color: #8b6f47;
    margin-bottom: 20px;
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

/* ERROR */
.error {
    color: red;
    margin-top: 10px;
}
</style>

</head>

<body>

<div class="card">

<h1>PastTimes</h1>
<p class="subtitle">Admin Access Panel</p>

<form method="POST">

<input type="email" name="email" placeholder="Enter Admin Email" required>

<input type="password" name="password" placeholder="Enter Password" required>

<button type="submit">Login</button>

</form>

<p class="error"><?php echo $message; ?></p>

</div>

</body>
</html>