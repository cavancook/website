<?php
session_start();
?>
<html>
    <?php include_once "header.php" ?>
    <body>
        <?php 
            include_once "banner.php";
            include_once "navbar.php"; 
        ?>
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