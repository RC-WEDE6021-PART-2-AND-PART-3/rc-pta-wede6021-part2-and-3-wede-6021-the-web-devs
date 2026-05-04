<?php
include("DBConn.php");

echo "<h2>Loading ClothingStore Database...</h2>";

// ----------------------
// DROP TABLES (ORDER MATTERS)
// ----------------------
$conn->query("DROP TABLE IF EXISTS tblOrder");
$conn->query("DROP TABLE IF EXISTS tblClothes");
$conn->query("DROP TABLE IF EXISTS tblUser");

// ----------------------
// CREATE tblUser
// ----------------------
$conn->query("CREATE TABLE tblUser (
    userID INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    surname VARCHAR(50),
    email VARCHAR(100),
    password VARCHAR(50),
    role VARCHAR(10),
    status VARCHAR(10)
)");

echo "✔ tblUser created<br>";

// ----------------------
// CREATE tblClothes
// ----------------------
$conn->query("CREATE TABLE tblClothes (
    clothingID INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    price DECIMAL(10,2),
    image VARCHAR(255)
)");

echo "✔ tblClothes created<br>";

// ----------------------
// CREATE tblOrder (WITH RELATIONSHIPS)
// ----------------------
$conn->query("CREATE TABLE tblOrder (
    orderID INT AUTO_INCREMENT PRIMARY KEY,
    userID INT,
    clothingID INT,
    quantity INT,

    FOREIGN KEY (userID) REFERENCES tblUser(userID),
    FOREIGN KEY (clothingID) REFERENCES tblClothes(clothingID)
)");

echo "✔ tblOrder created<br>";

// ----------------------
// LOAD USERS FROM userData.txt
// ----------------------
$file = fopen("userData.txt", "r");

while (($line = fgetcsv($file)) !== FALSE) {

    $name = $line[0];
    $surname = $line[1];
    $email = $line[2];
    $password = $line[3];
    $role = $line[4];
    $status = $line[5];

    $conn->query("INSERT INTO tblUser 
    (name, surname, email, password, role, status)
    VALUES ('$name','$surname','$email','$password','$role','$status')");
}

fclose($file);

echo "✔ Users loaded from file<br>";

// ----------------------
// INSERT CLOTHES
// ----------------------
$conn->query("INSERT INTO tblClothes (name, price, image) VALUES
('Black Jacket', 1200, 'images/jacket.jpg'),
('White Sneakers', 1500, 'images/shoes.jpg'),
('Grey Sweatpants', 800, 'images/pants.jpg')
");

echo "✔ Clothes inserted<br>";

echo "<h3> Database fully loaded successfully!</h3>";
?>