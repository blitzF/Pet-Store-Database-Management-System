<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            session_start();
            include "functions.php";
            $choice = $_SESSION["t"];
            $pkk = $_POST["ID"];
            $conn = connection();
            
            
            if($choice=="pets")
            {   
                $sql = "SELECT * FROM pets WHERE Pet_ID='$pkk'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                
                ?>
                <form action="update.php" method="post">
                    <input type="hidden" name="table" value="pets"/>
                    <input type="hidden" name="Pet_ID" value="<?php echo $pkk;?>"><br>
                    Type: <br>
                    <input type="text" name="type" value="<?php echo $row['Type']; ?>"><br>
                    Name: <br>
                    <input type="text" name="Name" value="<?php echo $row['Name']; ?>"><br>
                    Sex: <br>
                    <input type="text" name="Sex" value="<?php echo $row['Sex']; ?>"><br>
                    Age: <br>
                    <input type="text" name="Age" value="<?php echo $row['Age']; ?>"><br>
                    Price: <br>
                    <input type="text" name="Price" value="<?php echo $row['Price']; ?>"><br>
                    Sold: <br>
                    <input type="text" name="Sold" value="<?php echo $row['Sold']; ?>"><br>
                    <input type="submit" value="Submit"><br>
                </form>
                <?php
                    
            }
            elseif($choice=="items")
            {   
                $sql = "SELECT * FROM items WHERE Item_ID='$pkk'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                ?>
                <form action="update.php" method="post">
                    <input type="hidden" name="table" value="items"/>
                    <input type="hidden" name="Item_ID" value="<?php echo $pkk;?>"><br>
                    Price: <br>
                    <input type="text" name="price" value="<?php echo $row['Price']; ?>"><br>
                    Inventory: <br>
                    <input type="text" name="inventory" value="<?php echo $row['Inventory']; ?>"><br>
                    Item Name: <br>
                    <input type="text" name="item_name" value="<?php echo $row['Item Name']; ?>"><br>
                    Pet_Type: <br>
                    <input type="text" name="Pet_Type" value="<?php echo $row['Pet_Type']; ?>"><br>
                    <input type="submit" value="Submit"><br>
                </form>
                <?php
            }
            elseif($choice=="employees")
            {   
                $sql = "SELECT * FROM employees WHERE Emp_ID='$pkk'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
               ?>
                <form action="update.php" method="post">
                    <input type="hidden" name="table" value="employees"/>
                    <input type="hidden" name="Emp_ID" value="<?php echo $pkk;?>"><br>
                    First Name: <br>
                    <input type="text" name="Fname" value="<?php echo $row['FName']; ?>"><br>
                    Last Name: <br>
                    <input type="text" name="LName" value="<?php echo $row['Lname']; ?>"><br>
                    Job Type: <br>
                    <input type="text" name="job_type" value="<?php echo $row['Job_Type']; ?>"><br>
                    SSN: <br>
                    <input type="text" name="ssn"> value="<?php echo $row['SSN']; ?>"<br>
                    <input type="submit" value="Submit"><br>
                </form>
                <?php 
            }
            elseif($choice=="customers")
            {   
                $sql = "SELECT * FROM customers WHERE Cust_ID='$pkk'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                ?>
                <form action="update.php" method="post">
                    <input type="hidden" name="table" value="customers"/>
                    
                    <input type="hidden" name="Cust_ID" value="<?php echo $pkk;?>"><br>
                    First Name: <br>
                    <input type="text" name="Fname" value="<?php echo $row['FName']; ?>"><br>
                    Last Name: <br>
                    <input type="text" name="LName" value="<?php echo $row['Lname']; ?>"><br>
                    Address: <br>
                    <input type="text" name="address" value="<?php echo $row['Address']; ?>"><br>
                    Email: <br>
                    <input type="text" name="email" value="<?php echo $row['Email']; ?>"><br>
                    Phone: <br>
                    <input type="text" name="phone" value="<?php echo $row['Phone']; ?>"><br>
                    <input type="submit" value="Submit"><br>
                </form>
                <?php
            }
            elseif($choice=="suppliers")
            {   
                $sql = "SELECT * FROM suppliers WHERE Sup_ID='$pkk'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                ?>
                <form action="update.php" method="post">
                    <input type="hidden" name="table" value="suppliers"/>
                   
                    <input type="hidden" name="Sup_ID" value="<?php echo $pkk;?>"><br>
                    Name: <br>
                    <input type="text" name="Sup_Name" value="<?php echo $row['Sup_Name']; ?>"><br>
                    Item_ID <br>
                    <input type="text" name="Items_ID" value="<?php echo $row['Items_ID']; ?>"><br>
                    Quantity <br>
                    <input type="text" name="quantity" value="<?php echo $row['Quantity']; ?>"><br>
                    Price: <br>
                    <input type="text" name="price" value="<?php echo $row['Price']; ?>"><br>
                    Date <br>
                    <input type="text" name="date" value="<?php echo $row['Date']; ?>"><br>
                    Items_Name <br>
                    <input type="text" name="items_name" value="<?php echo $row['Items_Name']; ?>"><br>
                    <input type="submit" value="Submit"><br>
                </form>
                <?php
            }
            elseif($choice=="pet_suppliers")
            {   
                $sql = "SELECT * FROM pet_suppliers WHERE Trans_ID='$pkk'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                ?>
                <form action="update.php" method="post">
                    <input type="hidden" name="table" value="pet_suppliers"/>
                   
                    <input type="hidden" name="Trans_ID" value="<?php echo $pkk;?>"><br>
                    Supp_ID: <br>
                    <input type="text" name="Supp_ID" value="<?php echo $row['Supp_ID']; ?>"><br>
                    Name: <br>
                    <input type="text" name="Supp_Name" value="<?php echo $row['Supp_Name']; ?>"><br>
                    Item_ID <br>
                    <input type="text" name="Pet_ID" value="<?php echo $row['Pet_ID']; ?>"><br>                   
                    Date: <br>
                    <input type="text" name="Price" value="<?php echo $row['Price']; ?>"><br>
                    Price: <br>
                    <input type="text" name="Date" value="<?php echo $row['Date']; ?>"><br>
                    <input type="submit" value="Submit"><br>
                </form>
                <?php
            }
            
            elseif($choice=="pet_sales")
            {   
                $sql = "SELECT * FROM pet_sales WHERE Receipt='$pkk'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                ?>
                <form action="update.php" method="post">
                    <input type="hidden" name="table" value="pet_sales"/>
                    
                    <input type="hidden" name="receipt" value="<?php echo $pkk;?>"><br>
                    Date: <br>
                    <input type="text" name="date"  value="<?php echo $row['Date']; ?>"><br>
                    Pet_ID: <br>
                    <input type="text" name="Pet_ID" value="<?php echo $row['Pet_ID']; ?>"><br>
                    Pet_Type: <br>
                    <input type="text" name="Pet_Type" value="<?php echo $row['Pet_Type']; ?>"><br>
                    Customer ID: <br>
                    <input type="text" name="Cust_ID" value="<?php echo $row['Customer_ID']; ?>"><br>
                    <input type="submit" value="Submit"><br>
                </form>
                <?php
            }
            elseif($choice=="item_sales")
            {   
                $sql = "SELECT * FROM item_sales WHERE Receipt='$pkk'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                ?>
                <form action="update.php" method="post">
                    <input type="hidden" name="table" value="item_sales"/>
                   
                    <input type="hidden" name="receipt" value="<?php echo $pkk;?>"><br>
                    Date: <br>
                    <input type="text" name="date" value="<?php echo $row['Date']; ?>"><br>
                    Item_ID: <br>
                    <input type="text" name="item_id" value="<?php echo $row['Item_ID']; ?>"><br>
                    Customer_ID: <br>
                    <input type="text" name="custo_id" value="<?php echo $row['Custo_ID']; ?>"><br>
                    Quantity Sold: <br>
                    <input type="text" name="quantity" value="<?php echo $row['Quantity']; ?>"><br>
                    <input type="submit" value="Submit"><br>
                </form>
                <?php
            }
            else
            {
                echo "Issue in addSelector form \n";
            }
        
        ?>
    </body>
</html>


