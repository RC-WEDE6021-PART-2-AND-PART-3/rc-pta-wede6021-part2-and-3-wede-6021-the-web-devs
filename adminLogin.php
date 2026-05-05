<?php
session_start();
include("DBConn.php");

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'Admin') {
    header("Location: login.php");
    exit();
}

if (isset($_GET['verify'])) {
    $id = intval($_GET['verify']);
    $conn->query("UPDATE tblUser SET status='Verified' WHERE userID=$id");
}

if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM tblUser WHERE userID=$id");
}
$result = $conn->query("SELECT * FROM tblUser");
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>
<style>
body {font-family:Arial;background:#f7f3ef;}
.container {width:80%;margin:40px auto;background:white;padding:30px;border-radius:12px;}
table {width:100%;border-collapse:collapse;}
th {background:#8b6f47;color:white;padding:10px;}
td {padding:10px;text-align:center;}
a {padding:5px 10px;border-radius:15px;text-decoration:none;color:white;}
.verify {background:green;}
.delete {background:red;}
.card:hover {
    transform: translateY(-5px);
    transition: 0.3s;
}
</style>
</head>

<body>
<div style="text-align:right; padding:10px;">
<a href="logout.php" style="background:#8b6f47;color:white;padding:8px 15px;border-radius:20px;text-decoration:none;">Logout</a>
</div>
<div class="container">
<h2>Admin Dashboard</h2>

<?php if (isset($_GET['success'])) echo "<p style='color:green;'>Admin logged in successfully ✔</p>"; ?>

<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Status</th>
<th>Actions</th>
</tr>

<?php
while($row = $result->fetch_assoc()) {

echo "<tr>";
echo "<td>".$row['userID']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['status']."</td>";

echo "<td>";

if ($row['status'] == "Pending") {
echo "<a class='verify' href='admin.php?verify=".$row['userID']."'>Verify</a> ";
}

echo "<a class='delete' href='admin.php?delete=".$row['userID']."'>Delete</a>";

echo "</td>";
echo "</tr>";
}
?>

</table>
</div>

</body>
</html>