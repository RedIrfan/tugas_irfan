<?php
    require("../connection.php");

    $nis = $_GET['nis'];

    $query = $con->query("delete from siswa where nis='$nis'");

    if ($query){
        Header("Location:../index.php");
    }
?>