<?php
    require("../connection.php");

    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];

    if ($username != "" && $password != ""){
        $query = $con->query("insert into user values(null, '$username', '$password', 2)");

        if ($query){
            Header("Location:../pages/login.php");
        } else{
            Header("Location:../pages/register.php");
        }
    }
    else{
        $msg = "Username and Password is required!";

        Header("Location:../pages/register.php?msg={$msg}");
    }

?>