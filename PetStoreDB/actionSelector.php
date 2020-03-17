<html>
    <head>
        <meta charset="UTF-8">
        <title>Homepage</title>
    </head>
    <body>
        <?php
        include 'functions.php';
        session_start();
        $action = $_POST["choiceTable"];
        $_SESSION["t"]=$action; ?>
        Please select what you want to do with the table:
        <form action="selector.php" method="post">
            <input type="hidden" name="table" value="<?php echo $action; ?>">
            <input type="radio" name="choice" value="new" checked> Add New Entry<br>
            <input type="radio" name="choice" value="update" > Update<br>
            <input type="radio" name="choice" value="delete" > Delete<br>
            <input name="submit" type="submit" value="Submit">
        </form>
        
        <?php
        $conn = connection();
        if($action=="pets")
            {   
                $sql = "SELECT * FROM pets";
                $result = mysqli_query($conn, $sql);
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
            elseif($action=="items")
            {
                $sql = "SELECT * FROM items";
                $result = mysqli_query($conn, $sql);
                echo "<table border='1'>
                <tr>
                <th>Item_ID</th>
                <th>Price</th>
                <th>Inventory</th>
                <th>Item Name</th>
                <th>Pet_Type</th>
                </tr>";

                while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['Item_ID'] . "</td>";
                echo "<td>" . $row['Price'] . "</td>";
                echo "<td>" . $row['Inventory'] . "</td>";
                echo "<td>" . $row['Item Name'] . "</td>";
                echo "<td>" . $row['Pet_Type'] . "</td>";
                echo "</tr>";
                }
                echo "</table>";
            }
            elseif($action=="employees")
            {
               $sql = "SELECT * FROM employees";
                $result = mysqli_query($conn, $sql);
                echo "<table border='1'>
                <tr>
                <th>Emp_ID</th>
                <th>FName</th>
                <th>Lname</th>
                <th>Job_Type</th>
                <th>SSN</th>
                </tr>";

                while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['Emp_ID'] . "</td>";
                echo "<td>" . $row['FName'] . "</td>";
                echo "<td>" . $row['Lname'] . "</td>";
                echo "<td>" . $row['Job_Type'] . "</td>";
                echo "<td>" . $row['SSN'] . "</td>";
                echo "</tr>";
                }
                echo "</table>";
            }
            elseif($action=="customers")
            {
                $sql = "SELECT * FROM customers";
                $result = mysqli_query($conn, $sql);
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
            elseif($action=="suppliers")
            {
                $sql = "SELECT * FROM suppliers";
                $result = mysqli_query($conn, $sql);
                echo "<table border='1'>
                <tr>
                <th>Sup_ID</th>
                <th>Sup_Name</th>
                <th>Items_ID</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Date</th>
                <th>Items_Name</th>
                </tr>";

                while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['Sup_ID'] . "</td>";
                echo "<td>" . $row['Sup_Name'] . "</td>";
                echo "<td>" . $row['Items_ID'] . "</td>";
                echo "<td>" . $row['Quantity'] . "</td>";
                echo "<td>" . $row['Price'] . "</td>";
                echo "<td>" . $row['Date'] . "</td>";
                echo "<td>" . $row['Items_Name'] . "</td>";
                echo "</tr>";
                }
                echo "</table>";
            }
            elseif($action=="pet_sales")
            {
               $sql = "SELECT * FROM pet_sales";
                $result = mysqli_query($conn, $sql);
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
            }
            elseif($action=="item_sales")
            {
                $sql = "SELECT * FROM item_sales";
                $result = mysqli_query($conn, $sql);
                echo "<table border='1'>
                <tr>
                <th>Receipt</th>
                <th>Date</th>
                <th>Item_ID</th>
                <th>Custo_ID</th>
                <th>Quantity</th>
                </tr>";

                while($row = mysqli_fetch_array($result))
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
            elseif($action=="pet_suppliers")
            {
                $sql = "SELECT * FROM pet_suppliers";
                $result = mysqli_query($conn, $sql);
                echo "<table border='1'>
                <tr>
                <th>Trans_ID</th>
                <th>Supp_ID</th>
                <th>Supp_Name</th>
                <th>Pet_ID</th>
                <th>Date</th>
                <th>Price</th>
                </tr>";

                while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['Trans_ID'] . "</td>";
                echo "<td>" . $row['Supp_ID'] . "</td>";
                echo "<td>" . $row['Supp_Name'] . "</td>";
                echo "<td>" . $row['Pet_ID'] . "</td>";
                echo "<td>" . $row['Date'] . "</td>";
                echo "<td>" . $row['Price'] . "</td>";
                echo "</tr>";
                }
                echo "</table>";
            }
            
            else
            {
                echo "Issue in actionSelector form \n";
            }
        
        ?>
        
    </body>
</html>

