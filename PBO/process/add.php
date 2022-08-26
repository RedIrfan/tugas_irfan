<?php

    require("../connection.php");

    $name = $_REQUEST["name"];
    $category = $_REQUEST["category"];
    $price = $_REQUEST["price"];

    $query = $con->insert_to("products", "null, '$name', '$category', '$price'");

    if ($query){
        Header("Location:../index.php");
    }
?>