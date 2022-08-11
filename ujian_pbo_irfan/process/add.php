<?php

    require("../connection.php");

    $name = $_REQUEST["name"];
    $address = $_REQUEST["address"];

    $query = $con->query("insert into perusahaan values(null, '$name', '$address')");

    if ($query){
        header("Location:../index.php");
    }
?>