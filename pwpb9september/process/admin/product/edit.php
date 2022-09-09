<?php
    require("../../../connection.php");

    $id = $_REQUEST["id"];
    $name = $_REQUEST["name"];
    $category = $_REQUEST["category"];
    $price = $_REQUEST["price"];
    $stok = $_REQUEST["stok"];

    if ($name != "" && $category != "" && $price != "" && $stok != "" ){
        $query = $con->query("update product set name='$name', category_id='$category', price='$price', stok='$stok' where id='$id' ");

        if ($query){
            Header("Location:../../../pages/admin/product/list.php");
        } else{
            Header("Location:../../../pages/admin/product/edit.php?id=$id");
        }
    } else{
        $msg = "All input is required!";

        Header("Location:../../../pages/admin/product/edit.php?msg={$msg}&id=$id");
    }

?>