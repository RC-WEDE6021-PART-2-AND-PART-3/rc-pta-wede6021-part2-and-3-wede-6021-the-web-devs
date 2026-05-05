<?php
session_start();
include("DBConn.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM tblUser WHERE userID = $user_id";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $user_data = $result->fetch_assoc();
} else {
    die("User not found.");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile - Clothing Store</title>
    <style>
        .card:hover {
    transform: translateY(-5px);
    transition: 0.3s;
}
        body { font-family: Arial, sans-serif; background-color: #f7f3ef; margin: 0; padding: 0; }
        .navbar { display: flex; justify-content: space-between; padding: 15px 30px; background: #e6d3c1; }
        .navbar a { text-decoration: none; background: #8b6f47; color: white; padding: 8px 15px; border-radius: 25px; margin: 0 5px; font-size: 14px; }
        .container { max-width: 600px; margin: 60px auto; background: white; padding: 30px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
        h1 { color: #5c4a3d; text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { text-align: left; padding: 12px; border-bottom: 1px solid #ddd; }
        th { background-color: #8b6f47; color: white; }
        .header-msg { font-weight: bold; margin-bottom: 20px; color: #8b6f47; text-align: center; font-size: 1.2em; }
        .btn { display: inline-block; margin-top: 20px; padding: 10px 20px; background: #8b6f47; color: white; text-decoration: none; border-radius: 25px; }
    </style>
</head>
<body>
    <div class="navbar">
        <strong>PastTimes</strong>
        <div>
            <a href="user.php">Home</a>
            <a href="profile.php">Profile</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <div class="container">
        <div class="header-msg">User <?php echo htmlspecialchars($user_data['name']); ?> is logged in</div>
        <h1>Your Profile Data</h1>
        <table>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <?php foreach ($user_data as $column => $value): ?>
                <?php if ($column != 'password'): // Don't display password ?>
                <tr>
                    <td><?php echo htmlspecialchars($column); ?></td>
                    <td><?php echo htmlspecialchars($value); ?></td>
                </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </table>
        <div style="text-align: center;">
            <a href="logout.php" class="btn">Logout</a>
            <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'Admin'): ?>
                <a href="admin.php" class="btn">Admin Panel</a>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
