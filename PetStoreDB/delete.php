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
                $sql = "DELETE FROM pets WHERE Pet_ID='$id'";
                if(mysqli_query($conn, $sql))
                {
                    echo "Record deleted successfully\n";
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
                $id = $_POST["Item_ID"];
                $sql = "DELETE FROM items WHERE Item_ID='$id'";
                if(mysqli_query($conn, $sql))
                {
                    echo "Record deleted successfully\n";
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
                $sql = "DELETE FROM employees WHERE Emp_ID='$id'";
                if(mysqli_query($conn, $sql))
                {
                    echo "Record deleted successfully\n";
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
                $sql = "DELETE FROM customers WHERE Cust_ID='$id'";
                if(mysqli_query($conn, $sql))
                {
                    echo "Record Deleted successfully\n";
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
                $sql = "DELETE FROM suppliers WHERE Sup_ID='$id'";
                if(mysqli_query($conn, $sql))
                {
                    echo "Record deleted successfully\n";
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
                $id = $_POST["Trans_ID"];
                $sql = "DELETE FROM pet_suppliers WHERE Trans_ID='$id'";
                if(mysqli_query($conn, $sql))
                {
                    echo "Record deleted successfully\n";
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
                $id = $_POST["receipt"];
                $sql = "DELETE FROM pet_sales WHERE Receipt='$id'";
                if(mysqli_query($conn, $sql))
                {
                    echo "Record deleted successfully\n";
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
                $id = $_POST["receipt"];
                $sql = "DELETE FROM item_sales WHERE Receipt='$id'";
                if(mysqli_query($conn, $sql))
                {
                    echo "Record Deleted successfully\n";
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
                echo "Issue in deleteSelector form \n";
            }
        
        ?>
    </body>
</html>

