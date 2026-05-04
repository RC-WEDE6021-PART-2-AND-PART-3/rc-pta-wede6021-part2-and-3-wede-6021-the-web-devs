<?php session_start(); ?>

<div class="top-bar">
    <div class="logo">PastTimes</div>

    <div class="nav-links">
        <a href="user.php">Home</a>
        <a href="viewClothing.php">Shop</a>

        <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') { ?>
            <a href="admin.php">Admin</a>
            <a href="addClothing.php">Add Product</a>
        <?php } ?>

        <?php if (isset($_SESSION['user'])) { ?>
            <a href="logout.php" class="btn-nav">Logout</a>
        <?php } else { ?>
            <a href="login.php" class="btn-nav">Login</a>
        <?php } ?>
    </div>
</div>