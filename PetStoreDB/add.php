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
                $sql = "INSERT INTO pets VALUES ('$id', '$type','$name','$sex','$age','$price', '$sold')";
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
                
                $sql = "INSERT INTO items VALUES ('$itemid', '$price','$inventory','$itemname', '$pt')";
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
                $sql = "INSERT INTO employees VALUES ('$id', '$fname','$lname','$jobtype','$ssn')";
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
                $sql = "INSERT INTO customers VALUES ('$id', '$fname','$lname','$address','$email','$phone')";
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
                
                $sql = "INSERT INTO suppliers VALUES ('$id', '$name','$sitem','$quantity', '$price', '$date', '$iname')";
                if(mysqli_query($conn, $sql))
                {
                    echo "Added to suppliers <br>";
                    ?>
                    
                    <a href="tableSelector.php">Homepage</a>
                    <?php
                }
                else
                {
                    echo "Error: ".$sql . "<br>" . mysqli_error($conn);
                } 
                
                echo "Please enter new values so that an entry could be added to items <br>";
                ?>
                <form action="add.php" method="post">
                    <input type="hidden" name="table" value="items"/>
                    <input type="hidden" name="Item_ID" value="<?php echo $sitem;?>">
                    Price that you want to sell at: <br>
                    <input type="text" name="price" required><br>
                    <input type="hidden" name="inventory" value="<?php echo $quantity;?>">
                    <input type="hidden" name="item_name" value="<?php echo $iname;?>">
                    Pet_Type: <br>
                    <input type="text" name="Pet_Type" required><br>
                    <input type="submit" value="Submit"><br>
                </form>
                <?php

                
               /* $sql = "INSERT INTO items VALUES ('$sitem', '$price', '$quantity', '$iname')";
                if(mysqli_query($conn, $sql))
                {
                    echo "<br> Added to items <br>";
                    ?>
                    
                    <a href="tableSelector.php">Homepage</a>
                    <?php
                }
                else
                {
                    echo "Error: ".$sql . "<br>" . mysqli_error($conn);
                } 
                */
                
                
                
            }
            
            elseif($choice=="pet_suppliers")
            {   
                #$tid = $_POST["Trans_ID"];
                $tid = NULL;
                $id = $_POST["Supp_ID"];
                $name= $_POST["Supp_Name"];
                $sitem = $_POST["Pet_ID"];
                $quantity = $_POST["Date"];
                $price = $_POST["Price"];
                
                $sql = "INSERT INTO pet_suppliers VALUES ('$tid', '$id', '$name','$sitem','$quantity', '$price')";
                if(mysqli_query($conn, $sql))
                {
                    echo "Added to pet_suppliers <br>";
                    /*?>
                    
                    <a href="tableSelector.php">Homepage</a>
                    <?php */
                }
                else
                {
                    echo "Error: ".$sql . "<br>" . mysqli_error($conn);
                } 
                echo "Please enter the following values so that this pet is added to the pets table <br>";
                ?>
                    
                <form action="add.php" method="post">
                    <input type="hidden" name="table" value="pets"/>
                    <input type="hidden" name="Pet_ID" value="<?php echo $sitem;?>"><br>
                    Type: <br>
                    <input type="text" name="type" required><br>
                    Name: <br>
                    <input type="text" name="Name" required><br>
                    Sex: <br>
                    <input type="text" name="Sex" required><br>
                    Age: <br>
                    <input type="text" name="Age" required><br>
                    <input type="hidden" name="Price" value="<?php echo $price;?>">
                    Sold? (input 1 or 0): <br>
                    <input type="text" name="Sold" required><br>
                    <input type="submit" value="Submit"><br>
                </form>
                
                    
                    
                <?php
                /*$sql = "INSERT INTO pets VALUES ('$sitem', '$type', '$name', '$sex', '$age', '$price', '$sold')";
                if(mysqli_query($conn, $sql))
                {
                    echo "<br> Added to items <br>";
                    ?>
                    
                    <a href="tableSelector.php">Homepage</a>
                    <?php
                }
                else
                {
                    echo "Error: ".$sql . "<br>" . mysqli_error($conn);
                } */
                
                
                
                
            }
            
            elseif($choice=="pet_sales")
            {
                $receipt = $_POST["receipt"];
                $date= $_POST["date"];
                $id = $_POST["Pet_ID"];
                $ptype = $_POST["Pet_Type"];
                $cid = $_POST["Cust_ID"];
                $sql = "INSERT INTO pet_sales VALUES ('$receipt', '$date','$id','$ptype','$cid')";
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
                
                $sql = "UPDATE pets SET Sold='1' WHERE Pet_ID='$id'";
                if(mysqli_query($conn, $sql))
                {
                    echo "Updated the sold value in pets <br>";
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
                $cid= $_POST["custo_id"];
                $quantity = $_POST["quantity"];
                $sql = "INSERT INTO item_sales VALUES ('$receipt', '$date','$id', '$cid', $quantity)";
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
                
                $sql = "SELECT Inventory FROM items WHERE Item_ID='$id'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                $new_quantity = $row['Inventory'] - $quantity;
                
                
                $sql = "UPDATE items SET Inventory='$new_quantity' WHERE Item_ID='$id'";
                if(mysqli_query($conn, $sql))
                {
                    echo "Updated successfully\n";
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
                echo "Issue in addSelector form \n";
            }
        
        ?>
    </body>
</html>
