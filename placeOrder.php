<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<div class="top-bar">
    <div class="logo">PastTimes</div>

    <div class="nav-links">
        <a href="user.php">Home</a>
        <a href="viewClothing.php">Shop</a>

        <?php if (isset($_SESSION['user_id'])) { ?>
            <a href="profile.php">Profile</a>
        <?php } ?>

        <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'Admin') { ?>
            <a href="admin.php">Admin</a>
            <a href="addClothing.php">Add Product</a>
        <?php } ?>

        <?php if (isset($_SESSION['user_id'])) { ?>
            <a href="logout.php">Logout</a>
        <?php } else { ?>
            <a href="login.php">Login</a>
        <?php } ?>
    </div>
</div>