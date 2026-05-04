<?php
include("DBConn.php");

$sql = "DROP TABLE IF EXISTS tblUser";
$conn->query($sql);

$sql = "CREATE TABLE tlbUser (
	userID INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAAR(100),
	email VARCHAAR(100),
	password VARCHAAR(255),0
	role VARCHAAR(20),
	status VARCHAAR(20)
)";
$conn->query($sql);

$file = fopen("userData.txt", "r");

while (($line = fgetcsv($file)) !==FALSE) {
	$name = $line[0];
	$email = $line[1];
	$password = $line[2];
	$role = $line[3];
	$status = $line[4];

	$sql = "INSERT INTO tblUser (name, email, password, role, status
		VALUES ('$name', '$email', '$password', '$role', '$status')";

	$conn->query($sql);
}

fclose($file);

echo "Table created and data loaded successfully!";
?>

	
