<?php
   session_start();
   require_once 'Dao.php';
   $dao = new Dao();
   if(!isset($_SESSION['user_id'])){
       header("Location: login.php");
   }
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
         <div id="mainContent">
            <h1>Budget Calculator</h1>
            <form action="calc-handler.php" method="POST">
                <div id="budgetCalculator">
                  <h2>Monthly Expenses</h2>
                  <div class="calcFieldset">
                     <div class="calcField">
                        <label>Rent:</label>
                        <span class="desc">$</span>
                        <input type="number" name='rent' id="rent" 
                           <?php if(isset($_SESSION['rent-val'])){
                              $rent = $_SESSION['rent-val'];?>
                           value="<?php echo $rent;?>"
                           <?php }else{ ?> value="0"<?php } ?>/>
                     </div>
                     <div class="calcField">
                        <label>Utilities:</label>
                        <span class="desc">$</span>
                        <input type="number" name="util" id="util" 
                           <?php if(isset($_SESSION['util-val'])){
                              $util = $_SESSION['util-val'];?>
                           value="<?php echo $util;?>"
                           <?php }else{ ?> value="0"<?php } ?>/>
                     </div>
                     <div class="calcField">
                        <label>Food:</label>
                        <span class="desc">$</span>
                        <input type="number" name="food" id="food"
                           <?php if(isset($_SESSION['food-val'])){
                              $food = $_SESSION['food-val'];?>
                           value="<?php echo $food;?>"
                           <?php }else{ ?> value="0"<?php } ?>/>
                     </div>
                     <div class="calcField">
                        <label>Car Insurance/Maintence:</label>
                        <span class="desc">$</span>
                        <input type="number" name="carIns" id="carIns"
                           <?php if(isset($_SESSION['carIns-val'])){
                              $carIns = $_SESSION['carIns-val'];?>
                           value="<?php echo $carIns;?>"
                           <?php }else{ ?> value="0"<?php } ?>/>
                     </div>
                     <div class="calcField">
                        <label>Fuel:</label>
                        <span class="desc">$</span>
                        <input type="number" name="fuel" id="fuel"
                           <?php if(isset($_SESSION['fuel-val'])){
                              $fuel = $_SESSION['fuel-val'];?>
                           value="<?php echo $fuel;?>"
                           <?php }else{ ?> value="0"<?php } ?>/>
                     </div>
                     <div class="calcField">
                        <label>Health Insurance:</label>
                        <span class="desc">$</span>
                        <input type="number" name="healthIns" id="healthIns"
                           <?php if(isset($_SESSION['healthIns-val'])){
                              $healthIns = $_SESSION['healthIns-val'];?>
                           value="<?php echo $healthIns;?>"
                           <?php }else{ ?> value="0"<?php } ?>/>
                     </div>
                     <div class="calcField">
                        <label>Loans:</label>
                        <span class="desc">$</span>
                        <input type="number" name="loans" id="loans" 
                           <?php if(isset($_SESSION['loans-val'])){
                              $loans = $_SESSION['loans-val'];?>
                           value="<?php echo $loans;?>"
                           <?php }else{ ?> value="0"<?php } ?>/>
                     </div>
                     <div class="calcField">
                        <label>Misc:</label>
                        <span class="desc">$</span>
                        <input type="number" name="misc" id="misc"
                           <?php if(isset($_SESSION['misc-val'])){
                              $misc = $_SESSION['misc-val'];?>
                           value="<?php echo $misc;?>"
                           <?php }else{ ?> value="0"<?php } ?>/>
                     </div>
                  </div>
                  <h2>Income</h2>
                  <div class="calcFieldset">
                     <div class="calcField">
                        <label>Income Monthly:</label>
                        <span class="desc">$</span>
                        <input type="number" name="MonthIn" id="MonthIn"
                           <?php if(isset($_SESSION['monthIn-val'])){
                              $monthIn = $_SESSION['monthIn-val'];?>
                           value="<?php echo $monthIn;?>"
                           <?php }else{ ?> value="0"<?php } ?>/>
                     </div>
                     <div class="calcField">
                        <label>Salary:</label>
                        <span class="desc">$</span>
                        <input type="number" name="salary" id="salary" 
                           <?php if(isset($_SESSION['salary-val'])){
                              $salary = $_SESSION['salary-val'];?>
                           value="<?php echo $salary;?>"
                           <?php }else{ ?> value="0"<?php } ?>/>
                     </div>
                     <div class="calcField">
                        <label>Tax Return:</label>
                        <span class="desc">$</span>
                        <input type="number" name="tReturn" id="tReturn" 
                           <?php if(isset($_SESSION['salary-val'])){
                              $tReturn = $_SESSION['tReturn-val'];?>
                           value="<?php echo $tReturn;?>"
                           <?php }else{ ?> value="0"<?php } ?>/>
                     </div>
                  </div>
                  <h2>Savings</h2>
                  <div class="calcFieldset">
                     <div class="calcField">
                        <label>Savings Monthly:</label>
                        <span class="desc">$</span>
                        <input type="number" id="saving" 
                           <?php if(isset($_SESSION['saving-val'])){
                              $saving = $_SESSION['saving-val'];?>
                           value="<?php echo $saving;?>"
                           <?php }else{ ?> value="0"<?php } ?>/>
                     </div>
                     <div class="calcField">
                        <label>Investments:</label>
                        <span class="desc">$</span>
                        <input type="number" id="invest" 
                           <?php if(isset($_SESSION['saving-val'])){
                              $invest = $_SESSION['invest-val'];?>
                           value="<?php echo $invest;?>"
                           <?php }else{ ?> value="0"<?php } ?>/>
                     </div>
                     <div class="calcField">
                        <label>Retirement:</label>
                        <span class="desc">$</span>
                        <input type="number" id="retire" 
                           <?php if(isset($_SESSION['retire-val'])){
                              $retire = $_SESSION['retire-val'];?>
                           value="<?php echo $retire;?>"
                           <?php }else{ ?> value="0"<?php } ?>/>
                     </div>
                  </div>
               </div>
               <input type="submit">
            </form>
         </div>
         <div class="clear"></div>
      </div>
      <?php include_once "footer.php" ?>
   </body>
</html>