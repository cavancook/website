<html>
   <head>
        <link rel="stylesheet" href="calc.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="icon" type="image/png" href="favicon.png">
        <title>Budgeting Website</title>
   </head>
   <body>
        <?php 
            include_once "banner.php";
            include_once "navbar.php"; 
        ?>
      <div class="content">
         <div id="mainContent">
            <h1>Budget Calculator</h1>
            <div id="budgetCalculator">
               <h2>Monthly Expenses</h2>
               <div class="calcFieldset">
                  <div class="calcField">
                     <label>Rent:</label>
                     <span class="desc">$</span>
                     <input type="text" class="zero" id="rent" maxlength="6" value="0">
                  </div>
                  <div class="calcField">
                     <label>Utilities:</label>
                     <span class="desc">$</span>
                     <input type="text" class="zero" id="util" maxlength="6" value="0">
                  </div>
                  <div class="calcField">
                     <label>Food:</label>
                     <span class="desc">$</span>
                     <input type="text" class="zero" id="food" maxlength="6" value="0">
                  </div>
                  <div class="calcField">
                     <label>Car Insurance/Maintence:</label>
                     <span class="desc">$</span>
                     <input type="text" class="zero" id="util" maxlength="6" value="0">
                  </div>
                  <div class="calcField">
                     <label>Fuel:</label>
                     <span class="desc">$</span>
                     <input type="text" class="zero" id="util" maxlength="6" value="0">
                  </div>
                  <div class="calcField">
                     <label>Health Insurance:</label>
                     <span class="desc">$</span>
                     <input type="text" class="zero" id="util" maxlength="6" value="0">
                  </div>
                  <div class="calcField">
                     <label>Loans:</label>
                     <span class="desc">$</span>
                     <input type="text" class="zero" id="util" maxlength="6" value="0">
                  </div>
                  <div class="calcField">
                     <label>Misc:</label>
                     <span class="desc">$</span>
                     <input type="text" class="zero" id="util" maxlength="6" value="0">
                  </div>
               </div>
               <h2>Income</h2>
               <div class="calcFieldset">
                  <div class="calcField">
                     <label>Income Monthly:</label>
                     <span class="desc">$</span>
                     <input type="text" class="zero" id="util" maxlength="6" value="0">
                  </div>
                  <div class="calcField">
                     <label>Salary:</label>
                     <span class="desc">$</span>
                     <input type="text" class="zero" id="util" maxlength="6" value="0">
                  </div>
                  <div class="calcField">
                     <label>Tax Return:</label>
                     <span class="desc">$</span>
                     <input type="text" class="zero" id="util" maxlength="6" value="0">
                  </div>
               </div>
               <h2>Savings</h2>
               <div class="calcFieldset">
                  <div class="calcField">
                     <label>Savings Monthly:</label>
                     <span class="desc">$</span>
                     <input type="text" class="zero" id="util" maxlength="6" value="0">
                  </div>
                  <div class="calcField">
                     <label>Investments:</label>
                     <span class="desc">$</span>
                     <input type="text" class="zero" id="util" maxlength="6" value="0">
                  </div>
                  <div class="calcField">
                     <label>Retirement:</label>
                     <span class="desc">$</span>
                     <input type="text" class="zero" id="util" maxlength="6" value="0">
                  </div>
               </div>
            </div>
         </div>
         <div class="clear"></div>
      </div>
      <?php include_once "footer.php" ?>
   </body>
</html>