<?php
    require("../connection.php");

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = $con->query("select * from user where username='$username' and password='$password'")->fetch();

    if ($query){
        $_SESSION['username'] = $username;
        
        Header("Location:../index.php");
    }
    else{
        Header("Location:../pages/login.php");
    }
?>