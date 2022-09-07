<?php
    require("../connection.php");

    session_destroy();

    Header("Location:../index.php");
?>