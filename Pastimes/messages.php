<?php

session_start();

if(!isset($_SESSION['UserID']))
{
    header("Location: login.php");
    exit();
}

include("DBConn.php");

$userID = $_SESSION['UserID'];

if(isset($_POST['send']))
{
    $receiver = $_POST['receiver'];
    $message = $_POST['message'];

    mysqli_query(
    $conn,
    "INSERT INTO tblMessages
    (SenderID, ReceiverID, Message, DateSent)
    VALUES
    ('$userID','$receiver','$message',NOW())"
    );
}

$result = mysqli_query(
$conn,
"SELECT *
 FROM tblMessages
 WHERE SenderID='$userID'
 OR ReceiverID='$userID'
 ORDER BY DateSent DESC"
);

?>

<!DOCTYPE html>
<html>
<head>
<title>Messages</title>

<style>

body{
    background:#f8f8f8;
    font-family:'Segoe UI',sans-serif;
}

.messages-container{
    max-width:1100px;
    margin:40px auto;
    padding:20px;
}

.page-title{
    text-align:center;
    font-size:50px;
    color:#111827;
    margin-bottom:40px;
}

.message-form{
    background:white;
    padding:35px;
    border-radius:20px;
    border-top:6px solid #d4af37;
    box-shadow:0 15px 35px rgba(0,0,0,0.08);
    margin-bottom:40px;
}

.message-form h2{
    color:#111827;
    margin-bottom:20px;
}

.form-group{
    margin-bottom:20px;
}

.form-group label{
    display:block;
    font-weight:600;
    margin-bottom:8px;
}

.form-group input,
.form-group textarea{
    width:100%;
    padding:14px;
    border:1px solid #ddd;
    border-radius:10px;
    box-sizing:border-box;
    font-size:15px;
}

.form-group input:focus,
.form-group textarea:focus{
    outline:none;
    border-color:#d4af37;
}

.send-btn{
    width:100%;
    background:#111827;
    color:white;
    padding:15px;
    border:none;
    border-radius:10px;
    font-size:16px;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

.send-btn:hover{
    background:#d4af37;
    color:black;
}

.chat-history{
    background:white;
    padding:30px;
    border-radius:20px;
    box-shadow:0 15px 35px rgba(0,0,0,0.08);
}

.chat-history h2{
    margin-bottom:25px;
    color:#111827;
}

.message-box{
    background:#f9fafb;
    border-left:5px solid #d4af37;
    padding:20px;
    margin-bottom:20px;
    border-radius:12px;
}

.message-header{
    font-weight:bold;
    color:#111827;
    margin-bottom:10px;
}

.message-text{
    color:#444;
    margin-bottom:10px;
    line-height:1.6;
}

.message-date{
    color:#888;
    font-size:13px;
}

.no-messages{
    text-align:center;
    color:#888;
    padding:30px;
}

@media(max-width:768px){

.page-title{
    font-size:35px;
}

.message-form,
.chat-history{
    padding:20px;
}

}

</style>

</head>
<body>

<?php include("navbar.php"); ?>

<div class="messages-container">

<h1 class="page-title">
💬 Messages
</h1>

<div class="message-form">

<h2>Send a Message</h2>

<form method="POST">

<div class="form-group">
<label>Receiver User ID</label>
<input
type="number"
name="receiver"
required>
</div>

<div class="form-group">
<label>Message</label>

<textarea
name="message"
rows="5"
required></textarea>
</div>

<button
type="submit"
name="send"
class="send-btn">
Send Message
</button>

</form>

</div>

<div class="chat-history">

<h2>Conversation History</h2>

<?php

if(mysqli_num_rows($result) > 0)
{
while($row=mysqli_fetch_assoc($result))
{
?>

<div class="message-box">

<div class="message-header">

From User #<?php echo $row['SenderID']; ?>

→

To User #<?php echo $row['ReceiverID']; ?>

</div>

<div class="message-text">

<?php echo $row['Message']; ?>

</div>

<div class="message-date">

<?php echo $row['DateSent']; ?>

</div>

</div>

<?php
}
}
else
{
?>

<div class="no-messages">
No messages found.
</div>

<?php
}
?>

</div>

</div>

<?php include("footer.php"); ?>

</body>
</html>