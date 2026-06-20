<?php

session_start();

if(!isset($_SESSION['UserID']))
{
    header("Location: login.php");
    exit();
}

if(isset($_POST['signup']))
{
    header("Location: logout.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<?php include("navbar.php"); ?>



<div class="profile-container">

<div class="profile-card">

    <h1>
Welcome <?php echo $_SESSION['Name']; ?>
</h1>

<p>
<Strong>User is logged in.</Strong>
</p>

<br>
<input type="submit" name="logout" value="logout">

</div>

</div>


<?php include("footer.php"); ?>
</body>
</html>