<?php
    require("../connection.php");

    $name = $_REQUEST["name"];
    $address = $_REQUEST["address"];

    $query = $con->query("update perusahaan set name='$name',  ");

?>