<?php
    require("../connection.php");

    $nis = $_POST["nis"];
    $name = $_POST["name"];
    $class = $_POST['class'];

    $query = $con->query("insert into siswa values('$nis', '$name', '$class')");

    if ($query){
        Header("Location:../index.php");
    } else{
        echo $query->error_get_last();
    }
?>