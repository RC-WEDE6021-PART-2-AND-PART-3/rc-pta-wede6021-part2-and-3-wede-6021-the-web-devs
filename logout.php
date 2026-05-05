<?php
// Database connection details
$servername = "localhost";
$username = "clothing_user";
$password = "password123";
$dbname = "clothingstore";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully or already exists.<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select the database
$conn->select_db($dbname);

// Drop table if exists
$sql = "DROP TABLE IF EXISTS tblUser";
$conn->query($sql);

// Create table
$sql = "CREATE TABLE IF NOT EXISTS tblUser (
    userID INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(20) NOT NULL,
    status VARCHAR(20) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table tblUser created successfully.<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Load data from SQL file if it exists, or from userData.txt
if (file_exists("myClothingStore.sql")) {
    $sql_content = file_get_contents("myClothingStore.sql");
    // Split by semicolon to execute multiple statements
    $queries = explode(';', $sql_content);
    foreach ($queries as $query) {
        $query = trim($query);
        if (!empty($query)) {
            $conn->query($query);
        }
    }
    echo "Data loaded from myClothingStore.sql successfully.<br>";
} else if (file_exists("userData.txt")) {
    $file = fopen("userData.txt", "r");
    while (($line = fgetcsv($file)) !== FALSE) {
        if (count($line) < 5) continue;
        $name = $conn->real_escape_string($line[0]);
        $email = $conn->real_escape_string($line[1]);
        $password = $conn->real_escape_string($line[2]);
        $role = $conn->real_escape_string($line[3]);
        $status = $conn->real_escape_string($line[4]);

        $sql = "INSERT INTO tblUser (name, email, password, role, status)
                VALUES ('$name', '$email', '$password', '$role', '$status')";
        $conn->query($sql);
    }
    fclose($file);
    echo "Data loaded from userData.txt successfully.<br>";
}

$conn->close();
?>
