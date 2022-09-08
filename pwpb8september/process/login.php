<?php
    require("../connection.php");

    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];

    $query = $con->query("select * from user where username='$username' and password='$password' ")->fetchAll();

    if (count($query) > 0){
        $data = $query[0];

        $_SESSION["username"] = $_REQUEST["username"];
        $_SESSION["user_role"] = $data["role"];

        switch ($data["role"]) {
            case 1:
                Header("Location:../pages/admin/index.php");
                break;
                
            default:
                    Header("Location:../index.php");
                break;
        }
    } else{
        $msg = "Username or Password is wrong!";

        Header("Location:../pages/login.php?msg={$msg}");
    }

?>