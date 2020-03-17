<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Please select which table you want to add an entry to</h1>
        <form action="addInputter.php" method="post">
        <input type="radio" name="choiceAdd" value="pets" checked> Pets<br>
        <input type="radio" name="choiceAdd" value="items" > Items<br>
        <input type="radio" name="choiceAdd" value="employees" > Employees<br>
        <input type="radio" name="choiceAdd" value="customers" > Customers<br>
        <input type="radio" name="choiceAdd" value="suppliers" > Suppliers<br>
        <input type="radio" name="choiceAdd" value="pet_sales" > Pet Sales<br>
        <input type="radio" name="choiceAdd" value="item_sales" > Item Sales<br>
        <input name="submit" type="submit" value="Submit">
        </form>
    </body>
</html>

