<?php
session_start();
?>
<html>
    <?php include_once "header.php" ?>
    <body>
        <?php 
            include_once "banner.php"; 
        ?>
      <div class="topnav">
            <a href="home.php"><i class="fas fa-home"></i> Home</a>
            <?php if(!isset($_SESSION['user_id'])){ ?>
            <a href="login.php" class='active'><i class="fas fa-sign-in-alt"></i> Login</a>
            <?php } ?> 
            <a href="calc.php"><i class="fas fa-calculator"></i> Budget Calculator</a>
            <a href="privacy.php"><i class="fas fa-user-secret"></i> Privacy</a>
            <a href="about.php"><i class="fas fa-address-card"></i> About</a>
            <?php if(isset($_SESSION['user_id'])){ ?>
                <a class="logout" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
            <?php } ?> 
        </div>
        <div class="content">
            <h1>About the Author</h1>
            <div class="about left">
                <h2>About Me</h2>
                <p> My name is Cavan Cook I am a senior at Boise State
                    University studying Computer Science. I work for Sysco
                    Foods to help pay for all the schooling and loans, let's be honest.
                    I was born and raised in Meridian, Idaho and have loved every moment 
                    spent in this beautiful state. When my face isn't glued to my computer
                    completing projects I enjoy spending time outside, doing everything 
                    from white water rafting to skating on the Greenbelt. Enjoying all
                    that Idaho has to offer, I have done it all. 
                </p>
            </div>
            <div class="about right">
                <img src=authorPic.jpeg alt="Author Image" width="200px" height="250px">
            </div>
            <div class="clear"></div>
        </div>
        <?php include_once "footer.php" ?>
    </body>
</html>