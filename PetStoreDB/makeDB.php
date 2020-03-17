<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include 'functions.php';
            $conn = connection();
            if(!$conn)
            {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            $sql = "CREATE DATABASE PET_STORE_MANAGEMENT_SYSTEM";
            if(mysqli_query($conn, $sql))
            {
                echo "Database created successfully";
            }
            else
            {
                echo "Error creating Database";
            }
        
        ?>
    </body>
</html>

