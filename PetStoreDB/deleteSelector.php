<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Please select which table you want to delete an entry from</h1>
        <form action="deleteInputter.php" method="post">
        <input type="radio" name="choiceDelete" value="pets" checked> Pets<br>
        <input type="radio" name="choiceDelete" value="items" > Items<br>
        <input type="radio" name="choiceDelete" value="employees" > Employees<br>
        <input type="radio" name="choiceDelete" value="customers" > Customers<br>
        <input type="radio" name="choiceDelete" value="suppliers" > Suppliers<br>
        <input type="radio" name="choiceDelete" value="pet sales" > Pet Sales<br>
        <input type="radio" name="choiceDelete" value="item sales" > Item Sales<br>
        <input name="submit" type="submit" value="Submit">
        </form>

    </body>
</html>
