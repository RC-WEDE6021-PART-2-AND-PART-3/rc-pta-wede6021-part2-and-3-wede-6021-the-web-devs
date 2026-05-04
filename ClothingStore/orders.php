<?php
include("DBConn.php");

$sql = "SELECT * FROM tlborder";
$result = $conn->query($sql);

// Check if query worked
if (!$result) {
    die("SQL Error: " . $conn->error);
}

// Check if rows exist
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        echo "Order ID: " . $row['orderID'] . "<br>";
        echo "User ID: " . $row['userID'] . "<br>";
        echo "Clothing ID: " . $row['clothingID'] . "<br>";
        echo "Quantity: " . $row['quantity'] . "<br><hr>";

    }

} else {
    echo "No orders yet.";

}
?>