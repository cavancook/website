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
            include_once "navbar.php"; 
        ?>
      <div class="content">
         <div id="mainContent">
            <h1>Yearly Totals</h1>
       
            <div id="budgetCalculator">
               <h2></h2>
               <div class="calcFieldset">
                  <div class="calcField">
                     <label>Yearly Rent Costs:</label>
                     <span class="desc">$</span>
                     <input type="number" id="yearlyRent" value="<?php echo $_SESSION['yearlyRent'] ?>" disabled>
                  </div>
                  <div class="calcField">
                     <label>Yearly Utilities Costs:</label>
                     <span class="desc">$</span>
                     <input type="number" id="yearlyUtil" value="" disabled>
                  </div>
                  <div class="calcField">
                     <label>Yearly Food Costs:</label>
                     <span class="desc">$</span>
                     <input type="number" id="yearlyFood" value="" disabled>
                  </div>
                  <div class="calcField">
                     <label>Yearly Car Insurance/Maintence Costs:</label>
                     <span class="desc">$</span>
                     <input type="number" id="carIns" value="" disabled>
                  </div>
                  <div class="calcField">
                     <label>Yearly Fuel Costs:</label>
                     <span class="desc">$</span>
                     <input type="number" id="fuel" value="" disabled>
                  </div>
                  <div class="calcField">
                     <label>Health Insurance Costs:</label>
                     <span class="desc">$</span>
                     <input type="number" id="healthIns" value="" disabled>
                  </div>
                  <div class="calcField">
                     <label>Yearly Loan Costs:</label>
                     <span class="desc">$</span>
                     <input type="number" id="loans" value="" disabled>
                  </div>
                  <div class="calcField">
                     <label>Yearly Misc Costs:</label>
                     <span class="desc">$</span>
                     <input type="number" id="misc" value="" disabled>
                  </div>
               </div>
            </div>
            
         </div>
         <div class="clear"></div>
      </div>
      <?php include_once "footer.php" ?>
   </body>
</html>