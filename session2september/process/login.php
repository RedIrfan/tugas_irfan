<?php
    session_start();

    if (isset($_REQUEST["username"]) && isset($_REQUEST["password"]) ){

        $_SESSION["username"] = $_REQUEST["username"];
        $_SESSION["password"] = $_REQUEST["password"];

        Header("Location:../index.php");

    } else{
        Header("Location:../pages/login.php");
    }
?>