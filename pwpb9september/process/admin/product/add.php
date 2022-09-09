<?php
    require("../../../connection.php");

    $name = $_REQUEST["name"];
    $category = $_REQUEST["category"];
    $price = $_REQUEST["price"];
    $stok = $_REQUEST["stok"];

    if ($name != "" && $category != "" && $price != "" && $stok != "" ){
        $query = $con->query("insert into product values(null, '$name', '$category', '$price', '$stok')");

        if ($query){
            Header("Location:../../../pages/admin/product/list.php");
        } else{
            Header("Location:../../../pages/admin/product/add.php");
        }
    } else{
        $msg = "All input is required!";

        Header("Location:../../../pages/admin/product/add.php?msg={$msg}");
    }

?>