<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
             include 'functions.php';
            $query = $_POST["choiceQuery"];
            $conn = connection();
            if($query == "one")
            {
               
                $sql = "SELECT Pet_Type, COUNT(Pet_Type) AS c FROM pet_sales GROUP BY Pet_Type HAVING COUNT(Pet_Type)=( SELECT MAX(mycount) FROM ( SELECT Pet_Type, COUNT(Pet_Type) mycount FROM pet_sales GROUP BY Pet_Type)AS P) ";
                $result = mysqli_query($conn, $sql);
                echo "<h2>Pet Which has Maxmimum number of sales is: </h2>";
                echo "<table border='1'>
                <tr>
                <th>Pet_Type</th>
                <th>Number sold</th>
                </tr>";

                while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['Pet_Type'] . "</td>";
                echo "<td>" . $row['c'] . "</td>";
                echo "</tr>";
                }
                echo "</table>";
            }
            
            elseif($query == "two")
            {
               
                $sql = "SELECT Supp_ID, COUNT(Supp_ID) AS c FROM pet_suppliers GROUP BY Supp_ID HAVING COUNT(Supp_ID)=( SELECT MAX(mycount) FROM ( SELECT Supp_ID, COUNT(Supp_ID) mycount FROM pet_suppliers GROUP BY Supp_ID)AS P)";
                $result = mysqli_query($conn, $sql);
                echo "<h2>Supplier ID of Suplier who sold maximum items to store: </h2>";
                echo "<table border='1'>
                <tr>
                <th>Supplier ID</th>
                <th>Number supplied</th>
                </tr>";

                while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['Supp_ID'] . "</td>";
                echo "<td>" . $row['c'] . "</td>";
                echo "</tr>";
                }
                echo "</table>";
            }
            
            
            elseif($query == "three")
            {
               
                $sql_items = "SELECT SUM(Prod) AS Revenue FROM (SELECT P * Q as Prod FROM (SELECT item_sales.Item_ID AS id, item_sales.Quantity AS Q,items.Price AS P,item_sales.Date AS Date FROM item_sales JOIN items ON item_sales.Item_ID = items.Item_ID AND item_sales.Date = CURDATE() ) AS one)AS two
";
                $sql_pets = "SELECT SUM(P) as Rev FROM (SELECT pet_sales.Pet_ID AS id,pet_sales.Date AS Date,pets.Price AS P FROM pet_sales JOIN pets ON pet_sales.Pet_ID = pets.Pet_ID AND pet_sales.Date = CURDATE() )AS one ";
                $result = mysqli_query($conn, $sql_items);
                $result2 = mysqli_query($conn, $sql_pets);
                echo "<h2>Revenue Generated From Item sales is: </h2>";
                echo "<table border='1'>
                <tr>
                <th>Items Revenue</th>
                </tr>";

                while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['Revenue'] . "</td>";
                echo "</tr>";
                }
                echo "</table>";
                
                echo "<h2>Revenue Generated From Pet sales is: </h2>";
                echo "<table border='1'>
                <tr>
                <th>Pets Revenue</th>
                </tr>";

                while($row = mysqli_fetch_array($result2))
                {
                echo "<tr>";
                echo "<td>" . $row['Rev'] . "</td>";
                echo "</tr>";
                }
                echo "</table>";
            }
            
            
            elseif($query == "four")
            {
               
                $sql = "SELECT * FROM customers WHERE customers.Cust_ID = (SELECT cus_id FROM (SELECT c AS cus_id,MAX(purchase) FROM (SELECT c,SUM(pr) AS purchase FROM (SELECT pet_sales.Pet_ID AS id,pets.Price AS pr,pet_sales.Customer_ID AS c FROM pet_sales JOIN pets ON pet_sales.Pet_ID = pets.Pet_ID) AS a GROUP BY c) AS b)AS o )";
                $result = mysqli_query($conn, $sql);
                echo "<h2>Information of Customer with highest amount of purchases:</h2>";
                echo "<table border='1'>
                <tr>
                <th>Cust_ID</th>
                <th>FName</th>
                <th>Lname</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone</th>
                </tr>";

                while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                 echo "<td>" . $row['Cust_ID'] . "</td>";
                echo "<td>" . $row['FName'] . "</td>";
                echo "<td>" . $row['Lname'] . "</td>";
                echo "<td>" . $row['Address'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['Phone'] . "</td>";
                echo "</tr>";
                }
                echo "</table>";
            }
            
            elseif($query == "five")
            {
               
                $sql = "SELECT name FROM (SELECT name,MIN(tot) FROM (SELECT name,Sum(Q) AS tot FROM (SELECT items.`Item Name` AS name, item_sales.Item_ID AS id, item_sales.Quantity AS Q FROM items JOIN item_sales ON items.Item_ID = item_sales.Item_ID) AS one GROUP BY name)AS two )AS three
";
                $result = mysqli_query($conn, $sql);
                echo "<h2>Food that is hardly eaten by Pets: </h2>";
                echo "<table border='1'>
                <tr>
                <th>Food Hardly eaten by Pets</th>
                </tr>";

                while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "</tr>";
                }
                echo "</table>";
            }
            
            
            elseif($query =="six")
            {   
                ?>
                 <form action="inputQuery.php" method="post">
                    <input type="hidden" name="choiceQuery" value="six">
                    Customer_ID: <br>
                    <input type="text" name="Cust_ID" required><br>
                    <input type="submit" value="Submit"><br>
                </form>
        <?php
            }
            elseif($query =="seven")
            {   
                ?>
                 <form action="inputQuery.php" method="post">
                    <input type="hidden" name="choiceQuery" value="seven">
                    Receipt NO: <br>
                    <input type="text" name="receipt" required><br>
                    <input type="submit" value="Submit"><br>
                </form>
        <?php
            }
            elseif($query =="eight")
            {   
                ?>
                 <form action="inputQuery.php" method="post">
                    <input type="hidden" name="choiceQuery" value="eight">
                    Supplier ID: <br>
                    <input type="text" name="id" required><br>
                    <input type="submit" value="Submit"><br>
                </form>
        <?php
            }
            elseif($query =="nine")
            {   
                ?>
                 <form action="inputQuery.php" method="post">
                    <input type="hidden" name="choiceQuery" value="nine">
                    Starting Price: <br>
                    <input type="text" name="start" required><br>
                    Ending Price: <br>
                    <input type="text" name="end" required><br>
                    <input type="submit" value="Submit"><br>
                </form>
        <?php
            }
            
             elseif($query =="ten")
            {   
                ?>
                 <form action="inputQuery.php" method="post">
                    <input type="hidden" name="choiceQuery" value="ten">
                    Food Name: <br>
                    <input type="text" name="fname" required><br>
                    <input type="submit" value="Submit"><br>
                </form>
        <?php
            }
            
        ?>
    </body>
</html>
