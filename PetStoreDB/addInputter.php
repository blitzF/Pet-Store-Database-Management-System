<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            session_start();   
            
            $choice = $_SESSION["t"];
            
            if($choice=="pets")
            {
                ?>
                <form action="add.php" method="post">
                    <input type="hidden" name="table" value="pets"/>
                    Pet_ID: <br>
                    <input type="text" name="Pet_ID" required><br>
                    Type: <br>
                    <input type="text" name="type" required><br>
                    Name: <br>
                    <input type="text" name="Name" required><br>
                    Sex: <br>
                    <input type="text" name="Sex" required><br>
                    Age: <br>
                    <input type="text" name="Age" required><br>
                    Price: <br>
                    <input type="text" name="Price" required><br>
                    Sold? (input 1 or 0): <br>
                    <input type="text" name="Sold" required><br>
                    <input type="submit" value="Submit"><br>
                </form>
                <?php
                    
            }
            elseif($choice=="items")
            {
                ?>
                <form action="add.php" method="post">
                    <input type="hidden" name="table" value="items"/>
                    Item_ID: <br>
                    <input type="text" name="Item_ID" required><br>
                    Price: <br>
                    <input type="text" name="price" required><br>
                    Inventory: <br>
                    <input type="text" name="inventory" required><br>
                    Item Name: <br>
                    <input type="text" name="item_name" required><br>
                    Pet_Type: <br>
                    <input type="text" name="Pet_Type" required><br>
                    <input type="submit" value="Submit"><br>
                </form>
                <?php
            }
            elseif($choice=="employees")
            {
               ?>
                <form action="add.php" method="post">
                    <input type="hidden" name="table" value="employees"/>
                    Employee_ID: <br>
                    <input type="text" name="Emp_ID" required><br>
                    First Name: <br>
                    <input type="text" name="Fname" required><br>
                    Last Name: <br>
                    <input type="text" name="LName" required><br>
                    Job Type: <br>
                    <input type="text" name="job_type" required><br>
                    SSN: <br>
                    <input type="text" name="ssn" required><br>
                    <input type="submit" value="Submit"><br>
                </form>
                <?php 
            }
            elseif($choice=="customers")
            {
                ?>
                <form action="add.php" method="post">
                    <input type="hidden" name="table" value="customers"/>
                    Customer_ID: <br>
                    <input type="text" name="Cust_ID" required><br>
                    First Name: <br>
                    <input type="text" name="Fname" required><br>
                    Last Name: <br>
                    <input type="text" name="LName" required><br>
                    Address: <br>
                    <input type="text" name="address" required><br>
                    Email: <br>
                    <input type="text" name="email" required><br>
                    Phone: <br>
                    <input type="text" name="phone" required><br>
                    <input type="submit" value="Submit"><br>
                </form>
                <?php
            }
            elseif($choice=="suppliers")
            {
                ?>
                <form action="add.php" method="post">
                    <input type="hidden" name="table" value="suppliers"/>
                    Supplier_ID: <br>
                    <input type="text" name="Sup_ID" required><br>
                    Name: <br>
                    <input type="text" name="Sup_Name" required><br>
                    Item_ID <br>
                    <input type="text" name="Items_ID" required><br>
                    Quantity <br>
                    <input type="text" name="quantity" required><br>
                    Price: <br>
                    <input type="text" name="price" required><br>
                    Date <br>
                    <input type="text" name="date" required><br>
                    Items_Name <br>
                    <input type="text" name="items_name" required><br>
                    <input type="submit" value="Submit"><br>
                </form>
                <?php
            }
            
            elseif($choice=="pet_suppliers")
            {
                ?>
                <form action="add.php" method="post">
                    <input type="hidden" name="table" value="pet_suppliers"/>
                    Supplier_ID: <br>
                    <input type="text" name="Supp_ID" required><br>
                    Name: <br>
                    <input type="text" name="Supp_Name" required><br>
                    Pet_ID: <br>
                    <input type="text" name="Pet_ID" required><br>
                    Date: <br>
                    <input type="text" name="Date" required><br>
                    Price: <br>
                    <input type="text" name="Price" required><br>
                    <input type="submit" value="Submit"><br>
                </form>
                <?php
            }
            
            elseif($choice=="pet_sales")
            {
                ?>
                <form action="add.php" method="post">
                    <input type="hidden" name="table" value="pet_sales"/>
                    Receipt: <br>
                    <input type="text" name="receipt" required><br>
                    Date: <br>
                    <input type="text" name="date" required><br>
                    Pet_ID: <br>
                    <input type="text" name="Pet_ID" required><br>
                    Pet_Type: <br>
                    <input type="text" name="Pet_Type" required><br>
                    Customer ID: <br>
                    <input type="text" name="Cust_ID" required><br>
                    <input type="submit" value="Submit"><br>
                </form>
                <?php
            }
            elseif($choice=="item_sales")
            {
                ?>
                <form action="add.php" method="post">
                    <input type="hidden" name="table" value="item_sales"/>
                    Receipt: <br>
                    <input type="text" name="receipt" required><br>
                    Date: <br>
                    <input type="text" name="date" required><br>
                    Item_ID: <br>
                    <input type="text" name="item_id" required><br>
                    Customer_ID: <br>
                    <input type="text" name="custo_id" required><br>
                    Quantity sold: <br>
                    <input type="text" name="quantity" required><br>
                    <input type="submit" value="Submit"><br>
                </form>
                <?php
            }
            else
            {
                echo "Issue in addSelector form \n";
            }
        exit();
        ?>
    </body>
</html>

