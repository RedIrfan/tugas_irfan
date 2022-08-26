<?php

    require("../connection.php");

    $id = $_GET["id"];

    $name = $_REQUEST["name"];
    $category = $_REQUEST["category"];
    $price = $_REQUEST["price"];

    $query = $con->update("products", "product_name='$name', category_id='$category', price='$price'", "id='$id'");

    if ($query){
        Header("Location:../index.php");
    }

?>