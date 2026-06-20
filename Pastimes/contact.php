<?php

include("DBConn.php");

$success = "";

if(isset($_POST['send']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    mysqli_query(
    $conn,
    "INSERT INTO tblContact
    (Name, Email, Subject, Message, DateSent)
    VALUES
    ('$name','$email','$subject','$message',NOW())"
    );

    $success = "Message Sent Successfully!";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
<link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<?php include("navbar.php"); ?>

<h1>Contact Us</h1>

<form method="POST">

Name
<br>
<input type="text" name="name" required>

<br><br>

Email
<br>
<input type="email" name="email" required>

<br><br>

Subject
<br>
<input type="text" name="subject" required>

<br><br>

Message
<br>
<textarea
name="message"
rows="6"
cols="40"
required></textarea>

<br><br>

<input
type="submit"
name="send"
value="Send Message">

</form>

<br>

<?php echo $success; ?>

<?php include("footer.php"); ?>
</body>
</html>