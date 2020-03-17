<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Please select which table you want to edit</h1>
        <form action="actionSelector.php" method="post">
        <input type="radio" name="choiceTable" value="pets" checked> Pets<br>
        <input type="radio" name="choiceTable" value="items" > Items<br>
        <input type="radio" name="choiceTable" value="employees" > Employees<br>
        <input type="radio" name="choiceTable" value="customers" > Customers<br>
        <input type="radio" name="choiceTable" value="suppliers" > Suppliers<br>
        <input type="radio" name="choiceTable" value="pet_sales" > Pet Sales<br>
        <input type="radio" name="choiceTable" value="item_sales" > Item Sales<br>
        <input type="radio" name="choiceTable" value="pet_suppliers" > Pet Suppliers<br>
        <input name="submit" type="submit" value="Submit">
        </form>
        
        <br><br><br><br>
        
        
        <h1>Please select which query you want to execute</h1>
        <form action="querySelector.php" method="post">
        <input type="radio" name="choiceQuery" value="one" checked> The pet which has the maximum number of sales.<br>
        <input type="radio" name="choiceQuery" value="two" > Supplier ID of the supplier who sold the maximum number of pets.<br>
        <input type="radio" name="choiceQuery" value="three" >  Total revenue for Today<br>
        <input type="radio" name="choiceQuery" value="four" > Customer detail with highest purchases.<br>
        <input type="radio" name="choiceQuery" value="five" > Food hardly eaten by pets.<br>
        <input type="radio" name="choiceQuery" value="six" >History of orders for a particular customer.<br>
        <input type="radio" name="choiceQuery" value="seven" > Details of pet sold from sales id.<br>
        <input type="radio" name="choiceQuery" value="eight" > Sale details for a supplier.<br>
        <input type="radio" name="choiceQuery" value="nine" > Pets in given range.<br>
        <input type="radio" name="choiceQuery" value="ten" > For a given food, check pet details.<br>
        <input name="submit" type="submit" value="Submit">
        </form>
    </body>
</html>

