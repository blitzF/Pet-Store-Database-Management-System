<?php
    session_start();
    echo "In selector \n";
    $action = $_POST["choice"];
    if($action == "new")
    {
        header("Location: addInputter.php");
    }
    elseif($action=="update")
    {
        header("Location: befoUpdateInputter.php");
    }
    elseif($action=="delete")
    {
        header("Location: deleteInputter.php");
    }
    exit();
?>