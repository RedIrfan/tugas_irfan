<?php
    require("../../../connection.php");

    $product_id = $_REQUEST["id"];

    $query = $con->query("delete from product where id='$product_id' ");

    Header("Location:/pwpb9september/pages/admin/product/list.php");
?>