<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include 'functions.php';
            $conn = connection();
            
            $choice = $_POST["table"];
            
            if($choice=="pets")
            {   
                $id = $_POST["Pet_ID"];
                $type= $_POST["type"];
                $name = $_POST["Name"];
                $sex = $_POST["Sex"];
                $age = $_POST["Age"];
                $price = $_POST["Price"];
                $sold = $_POST["Sold"];
                $sql = "Update pets SET Pet_ID='$id', Type='$type', Name='$name', Sex='$sex', Age='$age', Price='$price', Sold='$sold'
                        WHERE Pet_ID='$id'";
                if(mysqli_query($conn, $sql))
                {
                    echo "New record made successfully\n";
                    ?>
                    
                    <a href="tableSelector.php">Homepage</a>
                    <?php
                }
                else
                {
                    echo "Error: ".$sql . "<br>" . mysqli_error($conn);
                }
            }
            elseif($choice=="items")
            {
                $itemid = $_POST["Item_ID"];
                $price= $_POST["price"];
                $inventory = $_POST["inventory"];
                $itemname = $_POST["item_name"];
                $pt = $_POST["Pet_Type"];
                
                $sql = "UPDATE items SET Item_ID='$itemid', Price= '$price', Inventory='$inventory',Item Name='$itemname, Pet_Type='$pt'
                        WHERE Item_ID='$itemid'";
                if(mysqli_query($conn, $sql))
                {
                    echo "New record made successfully\n";
                    ?>
                    
                    <a href="tableSelector.php">Homepage</a>
                    <?php
                }
                else
                {
                    echo "Error: ".$sql . "<br>" . mysqli_error($conn);
                }
            }
            elseif($choice=="employees")
            {
                $id = $_POST["Emp_ID"];
                $fname= $_POST["Fname"];
                $lname = $_POST["LName"];
                $jobtype = $_POST["job_type"];
                $ssn = $_POST["ssn"];
                $sql = "UPDATE employees SET Emp_ID='$id',FName= '$fname',Lname='$lname',Job_Type='$jobtype',SSN='$ssn'
                        WHERE Emp_ID='$id'";
                if(mysqli_query($conn, $sql))
                {
                    echo "New record made successfully\n";
                    ?>
                    
                    <a href="tableSelector.php">Homepage</a>
                    <?php
                }
                else
                {
                    echo "Error: ".$sql . "<br>" . mysqli_error($conn);
                }
            }
            elseif($choice=="customers")
            {
                $id = $_POST["Cust_ID"];
                $fname= $_POST["Fname"];
                $lname = $_POST["LName"];
                $address = $_POST["address"];
                $email = $_POST["email"];
                $phone = $_POST["phone"];
                $sql = "UPDATE customers SET Cust_ID='$id',FName= '$fname',Lname='$lname',Address='$address',Email='$email',Phone='$phone'
                        WHERE Cust_ID='$id'";
                if(mysqli_query($conn, $sql))
                {
                    echo "New record made successfully\n";
                    ?>
                    
                    <a href="tableSelector.php">Homepage</a>
                    <?php
                }
                else
                {
                    echo "Error: ".$sql . "<br>" . mysqli_error($conn);
                } 
            }
            elseif($choice=="suppliers")
            {
                $id = $_POST["Sup_ID"];
                $name= $_POST["Sup_Name"];
                $sitem = $_POST["Items_ID"];
                $quantity = $_POST["quantity"];
                $price = $_POST["price"];
                $date = $_POST["date"];
                $iname = $_POST["items_name"];
                
                $sql = "UPDATE suppliers SET Sup_ID='$id',Sup_Name= '$name',Items_ID='$sitem',Quantity='$quantity',Price='$price',Date= '$date', Items_Name='$iname'
                        WHERE Sup_ID='$id'";
                if(mysqli_query($conn, $sql))
                {
                    echo "New record made successfully\n";
                    ?>
                    
                    <a href="tableSelector.php">Homepage</a>
                    <?php
                }
                else
                {
                    echo "Error: ".$sql . "<br>" . mysqli_error($conn);
                } 
            }
            
            elseif($choice=="pet_suppliers")
            {
                $id = $_POST["Supp_ID"];
                $name= $_POST["Supp_Name"];
                $sitem = $_POST["Pet_ID"];
                $date = $_POST["Date"];
                $price = $_POST["Price"];
                
                $sql = "UPDATE pet_suppliers SET Supp_ID='$id',Supp_Name= '$name',Pet_ID='$sitem',Date= '$date', Price='$price'
                        WHERE Supp_ID='$id'";
                if(mysqli_query($conn, $sql))
                {
                    echo "New record made successfully\n";
                    ?>
                    
                    <a href="tableSelector.php">Homepage</a>
                    <?php
                }
                else
                {
                    echo "Error: ".$sql . "<br>" . mysqli_error($conn);
                } 
            }
            elseif($choice=="pet_sales")
            {
                $receipt = $_POST["receipt"];
                $date= $_POST["date"];
                $id = $_POST["Pet_ID"];
                $ptype = $_POST["Pet_Type"];
                $cid = $_POST["Cust_ID"];
                $sql = "UPDATE pet_sales SET Receipt='$receipt',Date= '$date',Pet_ID='$id',Pet_Type = '$ptype',Customer_ID='$cid'
                        WHERE Receipt='$receipt'";
                if(mysqli_query($conn, $sql))
                {
                    echo "New record made successfully\n";
                    ?>
                    
                    <a href="tableSelector.php">Homepage</a>
                    <?php
                }
                else
                {
                    echo "Error: ".$sql . "<br>" . mysqli_error($conn);
                } 
            }
            elseif($choice=="item_sales")
            {
                $receipt = $_POST["receipt"];
                $date= $_POST["date"];
                $id = $_POST["item_id"];
                $cid = $_POST["custo_id"];
                $quantity = $_POST["quantity"];
                $sql = "UPDATE item_sales SET Receipt='$receipt', Date='$date',Item_ID='$id', Custo_ID='$cid', Quantity='$quantity'
                        WHERE Receipt='$receipt'";
                if(mysqli_query($conn, $sql))
                {
                    echo "New record made successfully\n";
                    ?>
                    
                    <a href="tableSelector.php">Homepage</a>
                    <?php
                }
                else
                {
                    echo "Error: ".$sql . "<br>" . mysqli_error($conn);
                } 
            }
            else
            {
                echo "Issue in updateSelector form \n";
            }
        
        ?>
    </body>
</html>


