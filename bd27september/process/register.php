<?php
    require("../connection.php");

    $username = $_POST["username"];
    $password = $_POST["password"];
    $nis = $_POST["nis"];

    $query = $con->query("insert into user values(null, '$username', '$password', '$nis')");

    if ($query){
        Header("Location:../pages/login.php");
    }
?>