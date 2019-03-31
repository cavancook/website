<?php
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include_once "banner.php" ?>
        <?php include_once "navbar.php" ?>
        <div class="content">
            <h1>The lovely login page</h1>
            <div class="login left">
                <h2>Please Login</h2>

                <form method="post" action="handler.php">
                    <div> Username: <input typ="text" name=username></div>
                    <div> Password: <input typ="password" name=password></div>
                    <div><input type="submit" value="login"></div>
                </form>
            </div>
            <div class="clear"></div>
        </div>
        <?php include_once "footer.php" ?>
    </body>
</html>