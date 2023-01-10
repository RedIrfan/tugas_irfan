<?php
$host = "localhost";
$database = "irfanjanuaryof2023";
$username = "root";
$password = "";

$con = new PDO("mysql:host=$host;dbname=$database", $username, $password);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<style>
    .overflowing {
        overflow: auto;
        padding-bottom: 0px;
    }
    .overflowing thead, .overflowing tfoot{
        background-color: white;
    }
    .overflowing thead th{
        top:0;
        background-color: white;
        position:sticky;
    }
    .overflowing tfoot th{
        bottom:0;
        position: sticky;
        background-color: white;
    }
</style>