<?php

session_start();
include("DBConn.php");

$message = "";

if(isset($_POST['login']))
{
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM tblAdmin WHERE Username='$username'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1)
    {
        $row = mysqli_fetch_assoc($result);

        if(password_verify($password, $row['Password']))
        {
            $_SESSION['AdminID'] = $row['AdminID'];
            $_SESSION['AdminUsername'] = $row['Username'];

            header("Location: adminDashboard.php");
            exit();
        }
        else
        {
            $message = "Incorrect Password!";
        }
    }
    else
    {
        $message = "Admin account not found!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login | Pastimes</title>
    <link rel="stylesheet" href="CSS/style.css">
    

    <!--
    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f4f4f4;
            margin:0;
            padding:0;
        }

        .container{
            width:400px;
            margin:100px auto;
            background:white;
            padding:30px;
            border-radius:10px;
            box-shadow:0px 0px 10px rgba(0,0,0,0.2);
        }

        h1{
            text-align:center;
        }

        input[type=text],
        input[type=password]{
            width:100%;
            padding:10px;
            margin-top:5px;
            margin-bottom:15px;
            border:1px solid #ccc;
            border-radius:5px;
        }

        input[type=submit]{
            width:100%;
            padding:12px;
            background:#007bff;
            color:white;
            border:none;
            border-radius:5px;
            cursor:pointer;
        }

        input[type=submit]:hover{
            background:#0056b3;
        }

        .message{
            color:red;
            text-align:center;
            margin-top:15px;
        }
    </style>
    -->

</head>

<?php include("navbar.php"); ?>
<body>

<br>

<div class="container">

    

    <form method="POST">
        <h1>Admin Login</h1>

        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <input type="submit" name="login" value="Login">

    </form>

    <div class="message">
        <?php echo $message; ?>
    </div>

</div>

<?php include("footer.php"); ?>
</body>
</html>