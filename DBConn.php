<?php
include("DBConn.php");

// DROP TABLE
$conn->query("DROP TABLE IF EXISTS tblUser");

// CREATE TABLE
$conn->query("CREATE TABLE tblUser (
    userID INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(255),
    role VARCHAR(20),
    status VARCHAR(20)
)");

// LOAD FROM TEXT FILE
$file = fopen("userData.txt", "r");

while (($line = fgetcsv($file)) !== false) {
    $name = $line[0];
    $email = $line[1];
    $password = $line[2];
    $role = $line[3];
    $status = $line[4];

    $conn->query("INSERT INTO tblUser (name,email,password,role,status)
    VALUES ('$name','$email','$password','$role','$status')");
}

fclose($file);

echo "Table created + data loaded!";
?>