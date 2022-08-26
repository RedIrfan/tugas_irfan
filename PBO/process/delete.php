<?php 
    require("../connection.php");

    $id = $_GET["id"];

    $query = $con->delete_from("products", "id=$id");

    if ($query){
        Header("Location:../index.php");
    }

?>