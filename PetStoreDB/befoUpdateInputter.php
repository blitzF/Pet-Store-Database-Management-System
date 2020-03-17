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
                <form action="updateInputter.php" method="post">
                    <input type="hidden" name="table" value="pets"/>
                    Pet_ID: <br>
                    <input type="text" name="ID"><br>
                    
                    <input type="submit" value="Submit"><br>
                </form>
                <?php
                    
            }
            elseif($choice=="items")
            {
                ?>
                <form action="updateInputter.php" method="post">
                    <input type="hidden" name="table" value="items"/>
                    Item_ID: <br>
                    <input type="text" name="ID"><br>
                    <input type="submit" value="Submit"><br>
                </form>
                <?php
            }
            elseif($choice=="employees")
            {
               ?>
                <form action="updateInputter.php" method="post">
                    <input type="hidden" name="table" value="employees"/>
                    Employee_ID: <br>
                    <input type="text" name="ID"><br>
                    <input type="submit" value="Submit"><br>
                </form>
                <?php 
            }
            elseif($choice=="customers")
            {
                ?>
                <form action="updateInputter.php" method="post">
                    <input type="hidden" name="table" value="customers"/>
                    Customer_ID: <br>
                    <input type="text" name="ID"><br>
                    
                    <input type="submit" value="Submit"><br>
                </form>
                <?php
            }
            elseif($choice=="suppliers")
            {
                ?>
                <form action="updateInputter.php" method="post">
                    <input type="hidden" name="table" value="suppliers"/>
                    Supplier_ID: <br>
                    <input type="text" name="ID"><br>
                    
                    <input type="submit" value="Submit"><br>
                </form>
                <?php
            }
            
            elseif($choice=="pet_suppliers")
            {
                ?>
                <form action="updateInputter.php" method="post">
                    <input type="hidden" name="table" value="pet_suppliers"/>
                    Trans_ID: <br>
                    <input type="text" name="ID"><br>
                    
                    <input type="submit" value="Submit"><br>
                </form>
                <?php
            }
            elseif($choice=="pet_sales")
            {
                ?>
                <form action="updateInputter.php" method="post">
                    <input type="hidden" name="table" value="pet_sales"/>
                    Receipt: <br>
                    <input type="text" name="ID"><br>
                    
                    <input type="submit" value="Submit"><br>
                </form>
                <?php
            }
            elseif($choice=="item_sales")
            {
                ?>
                <form action="updateInputter.php" method="post">
                    <input type="hidden" name="table" value="item_sales"/>
                    Receipt: <br>
                    <input type="text" name="ID"><br>
                    
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
