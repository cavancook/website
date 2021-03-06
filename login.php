<?php
   session_start();
   require_once 'Dao.php';
   $dao = new Dao();
   
   if(isset($_SESSION['user_id'])){
   header("Location: home.php");
   }
   ?>
<html>
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
         <div class="row">
            <div id="login" class="column">
               <h3>Need to make an account?</h3>
               <?php
                  /* This shows either the confirmation messages or error messages for the register portion*/
                    if(isset($_SESSION['registration_condition_message'])){
                      $confirm = $_SESSION['registration_condition_message'];
                      echo "<div class='registration_condition_message'>$confirm</div>";
                    }
                    if (isset($_SESSION['registrationMessages'])) {
                      $var2 = 5;
                        foreach($_SESSION['registrationMessages'] as $registrationMessages) {
                          echo "<div id='$var2' class='registrationMessages'>$registrationMessages <span class='exit-button'><i class='fas fa-trash'></i></span></div>";
                        $var2++;
                        }
                    }?>
               <h5>Please Register</h5>
               <?php
                  /* Makes sure that the messages are unset for when the page is refreshed*/
                    unset($_SESSION['registrationMessages']);
                    unset($_SESSION['registration_condition_message']);?>
               <form action="register-handler.php" method="POST">
                  <input type="text" placeholder="Email" name="email">
                  <input type="password" placeholder="Password" name="password">
                  <input type="password" placeholder="Confirm Password" name="cpassword">
                  <input type="submit">
               </form>
            </div>
            <div id="login" class="column">
               <h3>Have an account already?</h3>
               <?php
                  /* This the error messages for the login portion*/
                  if (isset($_SESSION['messages'])) {
                      $var1 = 1;
                      foreach($_SESSION['messages'] as $message) {
                        echo "<div id='$var1' class='message'>$message <span class='exit-button'><i class='fas fa-trash'></i></span></div>";
                        $var1++;
                      }
                  }?>
               <h5>Please Login</h5>
               <?php 
                  unset($_SESSION['messages']);?>
               <form action="login-handler.php" method="POST">
                  <input type="text" placeholder="Email" name="email" required>
                  <input type="password" placeholder="Password" name="password" required>
                  <input type="submit">
               </form>
            </div>
         </div>
      </div>
      <?php include_once "footer.php" ?>
   </body>
</html>