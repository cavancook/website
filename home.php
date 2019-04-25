<?php session_start() ?>
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
            <h1>Welcome to Cavan's Budgeting!</h1>
            <div class="home left">
                <h2>The Power of Budgeting</h2>
                <p> Have you ever been afraid to check 
                    your bank account after a weekend out 
                    on the town? Or thought that you had 
                    more money than you actually did? Sometimes 
                    it’s shocking how much you can spend without 
                    even noticing it. It’s extremely powering to 
                    know where you stand financially at all times. 
                    This website gives you the power and knowledge 
                    to track your spending to see yearly spending 
                    and saving trends. 
                </p>
            </div>
            <div class="home right">
                <h2>Time for some transparency</h2>
                <p> Having a clear view of your spending habits 
                    helps you shape the things that are within 
                    your control. Many bills are absolutely required, 
                    but tracking monthly expenses is a great way to 
                    see where your money is flowing, both in and out.  
                </p>
            </div>
            <div class="clear"></div>
        </div>
        <?php include_once "footer.php" ?>
    </body>
</html>