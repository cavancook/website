<?php
session_start();
require_once 'Dao.php';
$dao = new Dao();
?>
<div class="topnav">
    <a href="home.php"><i class="fas fa-home"></i> Home</a>
    <a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
    <a href="calc.php"><i class="fas fa-calculator"></i> Budget Calculator</a>
    <a href="privacy.php"><i class="fas fa-user-secret"></i> Privacy</a>
    <a href="about.php"><i class="fas fa-address-card"></i> About</a>
    <?php if(isset($_SESSION['user_id'])){ ?>
        <a class="logout" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
    <?php } ?> 
</div>