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
        
        if($query=="six")
        {
            $id = $_POST["Cust_ID"];
            $sql = "SELECT * FROM pet_sales WHERE pet_sales.Customer_ID = $id";
            $sql2 = "SELECT * FROM item_sales WHERE item_sales.Custo_ID = $id";
            $result = mysqli_query($conn, $sql);
            $result2 = mysqli_query($conn, $sql2);
            echo "<h2>Pets Bought by the customer</h2>";
            echo "<table border='1'>
            <tr>
            <th>Receipt</th>
            <th>Date</th>
            <th>Pet_ID</th>
            <th>Pet_Type</th>
            <th>Customer_ID</th>
            </tr>";

            while($row = mysqli_fetch_array($result))
            {
            echo "<tr>";
               echo "<td>" . $row['Receipt'] . "</td>";
                echo "<td>" . $row['Date'] . "</td>";
             echo "<td>" . $row['Pet_ID'] . "</td>";
                echo "<td>" . $row['Pet_Type'] . "</td>";
                echo "<td>" . $row['Customer_ID'] . "</td>";
            echo "</tr>";
            }
            echo "</table>";
            
            echo "<h2>Items Bought by the customer</h2>";
            echo "<table border='1'>
            <tr>
           <th>Receipt</th>
                <th>Date</th>
                <th>Item_ID</th>
                <th>Custo_ID</th>
                <th>Quantity</th>
            </tr>";

            while($row = mysqli_fetch_array($result2))
            {
            echo "<tr>";
               echo "<td>" . $row['Receipt'] . "</td>";
                echo "<td>" . $row['Date'] . "</td>";
                echo "<td>" . $row['Item_ID'] . "</td>";
                echo "<td>" . $row['Custo_ID'] . "</td>";
                echo "<td>" . $row['Quantity'] . "</td>";
            echo "</tr>";
            }
            echo "</table>";
            
        }
        
        elseif($query=="seven")
        {
            $id = $_POST["receipt"];
            $sql = "SELECT * FROM pets WHERE pets.Pet_ID = (SELECT pet_sales.Pet_ID FROM pet_sales WHERE pet_sales.Receipt = $id)
";
            $result = mysqli_query($conn, $sql);
            echo "<h2>For the given order, details of sold Pet: </h2>";
            echo "<table border='1'>
            <tr>
            <th>Pet_ID</th>
                <th>Type</th>
                <th>Name</th>
                <th>Sex</th>
                <th>Age</th>
                <th>Price</th>
                <th>Sold</th>
            </tr>";

            while($row = mysqli_fetch_array($result))
            {
            echo "<tr>";
             echo "<td>" . $row['Pet_ID'] . "</td>";
                echo "<td>" . $row['Type'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Sex'] . "</td>";
                echo "<td>" . $row['Age'] . "</td>";
                echo "<td>" . $row['Price'] . "</td>";
                echo "<td>" . $row['Sold'] . "</td>";
            echo "</tr>";
            }
            echo "</table>";
        }
        
        elseif($query=="eight")
        {
            $id = $_POST["id"];
            $sql = "SELECT sid AS Suplier_ID, name as Pet_Name FROM (SELECT pet_suppliers.Supp_ID AS sid, pet_suppliers.Pet_ID AS pid, pets.Name as name FROM pet_suppliers JOIN pets ON pet_suppliers.Pet_ID = pets.Pet_ID WHERE pet_suppliers.Supp_ID = $id)AS one
";
            $co = "SELECT Suplier_ID, COUNT(Suplier_ID) AS Number_of_Sales FROM (SELECT sid AS Suplier_ID, name as Pet_Name FROM (SELECT pet_suppliers.Supp_ID AS sid, pet_suppliers.Pet_ID AS pid, pets.Name as name FROM pet_suppliers JOIN pets ON pet_suppliers.Pet_ID = pets.Pet_ID WHERE pet_suppliers.Supp_ID = 90)AS one)As two";
            $result = mysqli_query($conn, $sql);
            $result2 = mysqli_query($conn, $co);
            echo "<h2>Number of sales by Supplier_ID $id are:</h2>";
            echo "<table border='1'>
            <tr>
            <th>Suplier_ID</th>
            <th>Number of Sales</th>
            </tr>";

            while($row = mysqli_fetch_array($result2))
            {
            echo "<tr>";
             echo "<td>" . $row['Suplier_ID'] . "</td>";
              echo "<td>" . $row['Number_of_Sales'] . "</td>";
            echo "</tr>";
            }
            echo "</table>";
            
            echo "<h2>Sale Details of Supplier_ID $id are:</h2>";
            
            echo "<table border='1'>
            <tr>
            <th>Suplier_ID</th>
            <th>Pet_Name</th>
            </tr>";

            while($row = mysqli_fetch_array($result))
            {
            echo "<tr>";
             echo "<td>" . $row['Suplier_ID'] . "</td>";
              echo "<td>" . $row['Pet_Name'] . "</td>";
            echo "</tr>";
            }
            echo "</table>";
        }
        
        elseif($query=="nine")
        {
            $start = $_POST["start"];
            $end = $_POST["end"];
            $sql = "SELECT pets.Name AS name,pets.Price AS pr FROM pets WHERE pets.Price BETWEEN $start AND $end ORDER BY pr
";
            $result = mysqli_query($conn, $sql);
            echo "<h2>Pets that fall within the given range are: </h2>";
            echo "<table border='1'>
            <tr>
            <th>Pet_Name</th>
                <th>Price</th>
            </tr>";

            while($row = mysqli_fetch_array($result))
            {
            echo "<tr>";
             echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['pr'] . "</td>";
            echo "</tr>";
            }
            echo "</table>";
        }
        
        elseif($query=="ten")
        {
            $idd = $_POST["fname"];
            $id= '"' . $idd . '"';
            $sql = "SELECT pets.Type AS Type,pets.Name AS Name,pets.Sex AS Sex,pets.Age AS Age ,pets.Price AS Price,items.`Item Name` AS Food FROM pets JOIN items ON items.Pet_Type = pets.Type AND items.`Item Name` = $id ORDER BY Age
";
            $counter = "SELECT COUNT(Food) AS Number_of_Pets, Food FROM(SELECT pets.Type AS Type,pets.Name AS Name,pets.Sex AS Sex,pets.Age AS Age ,pets.Price AS Price,items.`Item Name` AS Food FROM pets JOIN items ON items.Pet_Type = pets.Type AND items.`Item Name` = $id ORDER BY Age)AS old";
            $result = mysqli_query($conn, $sql);
            $resultq = mysqli_query($conn, $counter);
            echo "<h2>Number of Pets that eat $idd are</h2>";
            echo "<table border='1'>
            <tr>
            
                <th>Number Of Pets</th>
                <th>Food</th>
            </tr>";

            while($row = mysqli_fetch_array($resultq))
            {
            echo "<tr>";
             echo "<td>" . $row['Number_of_Pets'] . "</td>";
                echo "<td>" . $row['Food'] . "</td>";
            echo "</tr>";
            }
            echo "</table>";
            
            echo "<h2>Details of Pets that eat $idd </h2>";
            echo "<table border='1'>
            <tr>
            
                <th>Pet Type</th>
                <th>Pet Name</th>
                <th>Sex</th>
                <th>Age</th>
                <th>Price</th>
                <th>Food Name</th>
            </tr>";

            while($row = mysqli_fetch_array($result))
            {
            echo "<tr>";
             echo "<td>" . $row['Type'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Sex'] . "</td>";
                echo "<td>" . $row['Age'] . "</td>";
                echo "<td>" . $row['Price'] . "</td>";
                echo "<td>" . $row['Food'] . "</td>";
            echo "</tr>";
            }
            echo "</table>";
        }
        
        ?>
    </body>
</html>
