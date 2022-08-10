<?php

    $host = "localhost";
    $dbname = "irfandb";
    $username = "root";
    $password = "";

    $con = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // $con->query("update book set name='Harry pitter' where id=1");

?>