<?php

    require("../connection.php");

    $id = $_GET["id"];
    $name = $_REQUEST["name"];
    $category = $_REQUEST["category"];
    $description = $_REQUEST["description"];
    
    $con->query("update book set name='$name', category_id='$category', description='$description' where id='$id' ");

    Header("Location:../index.php");

?>