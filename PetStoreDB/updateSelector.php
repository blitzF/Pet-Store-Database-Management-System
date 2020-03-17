<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Please select which table you want to add an entry to</h1>
        <form action="updateInputter.php" method="post">
        <input type="radio" name="choiceUpdate" value="pets" checked> Pets<br>
        <input type="radio" name="choiceUpdate" value="items" > Items<br>
        <input type="radio" name="choiceUpdate" value="employees" > Employees<br>
        <input type="radio" name="choiceUpdate" value="customers" > Customers<br>
        <input type="radio" name="choiceUpdate" value="suppliers" > Suppliers<br>
        <input type="radio" name="choiceUpdate" value="pet_sales" > Pet Sales<br>
        <input type="radio" name="choiceUpdate" value="item_sales" > Item Sales<br>
        <input name="submit" type="submit" value="Submit">
        </form>

    </body>
</html>
