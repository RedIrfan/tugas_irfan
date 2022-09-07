<?php
    require("../connection.php");

    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    
    $query = $con->query("select * from user where username='$username' and password='$password' ")->fetchAll();

    if (count($query) > 0){
        $_SESSION["username"] = $username;
        $_SESSION["user_role"] = $query[0]["role"];
        
        switch ($_SESSION["user_role"]){
            case "customer":
                Header("Location:../index.php");
                break;
            case "admin":
                Header("Location:../pages/admin/index.php");
                break;
        }
    } else{
        $msg = urlencode("Username or Password is wrong!");

        Header("Location:../pages/login.php?msg={$msg}");
    }
?>