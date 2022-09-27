<?php
    require("../connection.php");

    $nis = $_GET["nis"];

    $nisnew = $_POST["nis"];
    $name = $_POST["name"];
    $class = $_POST["class"];

    $query = $con->query("update siswa set nis='$nisnew', nama='$name', kelas='$class' where nis='$nis' ");

    if ($query){
        Header("Location:../index.php");
    }
?>