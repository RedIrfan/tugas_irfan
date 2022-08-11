<?php

    require('../connection.php');

    $id = $_GET["id"];

    $query = $con->query("delete from perusahaan where id='$id'");

    if ($query){
        header("Location:../index.php");
    }

?>