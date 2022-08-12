<?php
    require('../connection.php');

    $id = $_GET["id"];

    $con->query("delete from siswa where id='$id'");

    Header("Location:../index.php");
?>