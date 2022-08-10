<?php

    require("../connection.php");

    $name = $_REQUEST["name"];
    $category = $_REQUEST["category"];
    $description = $_REQUEST["description"];

    $con->query("insert into book values(null, '$name', '$category', '$description')");

    Header("Location:../index.php");

?>