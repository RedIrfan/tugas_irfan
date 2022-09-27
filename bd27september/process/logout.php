<?php
    session_start();
    session_destroy();

    require("../connection.php");

    Header("Location:../pages/customer/index.php");
?>