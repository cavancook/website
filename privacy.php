<?php session_start() ?><html>
<?php include_once "header.php" ?>
    <body>
        <?php include_once "banner.php" ?>
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
            <h1>Welcome to the Privacy and conditions page</h1>
            <div class="privacy left">
            <ul class = "privacy">
                <li>As of yet there are no logos and information that are all trademark(this will change).</li>
                <li>If any questions please contact website admin(me).</li>
            </ul>
            </div>
            <div>
                <h3>Icons made by</h3> 
                <a href="https://www.flaticon.com/authors/eucalyp" title="Eucalyp">Eucalyp</a> from 
                <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by 
                <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a>
            </div>
            <div class="clear"></div>
        </div>
        <?php include_once "footer.php" ?>
    </body>
</html>