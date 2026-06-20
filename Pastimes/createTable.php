<?php

include("DBConn.php");

$sql = "DROP TABLE IF EXISTS tblUser";
mysqli_query($conn, $sql);

$sql = "CREATE TABLE tblUser (
    UserID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100),
    Email VARCHAR(100),
    Username VARCHAR(50),
    Password VARCHAR(255),
    Verified VARCHAR(20) DEFAULT 'Pending'
)";

if(mysqli_query($conn, $sql))
{
    echo "Table Created Successfully<br><br>";
}
else
{
    die(mysqli_error($conn));
}

$file = fopen("userData.txt", "r");

while(($line = fgets($file)) !== false)
{
    $data = explode(",", trim($line));

    $name = $data[0];
    $email = $data[1];
    $username = $data[2];

    $password = password_hash($data[3], PASSWORD_DEFAULT);

    $insert = "INSERT INTO tblUser
    (Name, Email, Username, Password)
    VALUES
    ('$name','$email','$username','$password')";

    mysqli_query($conn, $insert);
}

fclose($file);

echo "5 Users Loaded Successfully";

?>