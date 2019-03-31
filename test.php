<html>
    <head>
        <link rel="stylesheet" href="calc.css">
    </head>
    <body>
        <?php include_once "banner.php" ?>
        <?php include_once "navbar.php" ?>
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
                </div>
                <div class="calcField">
                    <label>Fuel:</label>
                </div>
                <div class="calcField">
                    <label>Health Insurance:</label>
                </div>
                <div class="calcField">
                    <label>Loans:</label>
                </div>
                <div class="calcField">
                  <label>Misc:</label>
                </div>               
            </div>     
            <h2>Income</h2>
            <div class="calcFieldset">
                <div class="calcField">
                    <label>Income Monthly:</label>
                </div>
                <div class="calcField">
                    <label>Salary:</label>
                </div>
                <div class="calcField">
                    <label>Tax Return:</label>
                </div>            
            </div>  
            <h2>Savings</h2>
            <div class="calcFieldset">
                <div class="calcField">
                    <label>Savings Monthly:</label>
                </div>
                <div class="calcField">
                    <label>Investments:</label>
                </div>
                <div class="calcField">
                    <label>Retirement:</label>
                </div>            
            </div>  
        </div>

    </div>
            <div class="clear"></div>
        </div>
        <?php include_once "footer.php" ?>
    </body>
</html>