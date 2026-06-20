<?php

session_start();
include("DBConn.php");

$message = "";



if(isset($_POST['login']))
{
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM tbluser WHERE Username='$username'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);

        if(password_verify($password, $row['Password']))
        {
            if($row['Verified'] == 'Approved')
            {
                $_SESSION['UserID'] = $row['UserID'];
                $_SESSION['Name'] = $row['Name'];

                header("Location: dashboard.php");
                exit();
            }
            else
            {
                $message = "Your account is waiting for admin approval.";
            }
        }
        else
        {
            $message = "Incorrect password.";
        }
    }
    else
    {
        $message = "Username not found.";
    }
}

if(isset($_POST['signup']))
{
    header("Location: register.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="CSS/style.css">

</head>
<body>
    
<?php include("navbar.php"); ?>

<h1>Pastimes Login</h1>

<br>

<form method="POST">

<label>Username</label><br>
<input type="text" name="username" required><br>

<label>Password</label><br>
<input type="password" name="password" required><br>

<input type="submit" name="login" value="Login">

<br>
<label>Don't have an Account?</label>
<br>
<input type="submit" name="signup" value="Sign Up">

<br>

<?php echo $message; ?>

</form>

<br>

<br>
<br>




</body>
</html>