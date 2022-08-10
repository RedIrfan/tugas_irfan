<?php
    require("../connection.php");

    $id = $_GET['id'];

    $con->query("delete from book where id='$id'");

    Header("Location:../index.php");
?>