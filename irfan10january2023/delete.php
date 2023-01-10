<?php
    require("connection.php");

    if (isset($_GET["nis"])){
        $nis = $_GET["nis"];
        
        $con->query("delete from students where nis='$nis'");
        
    } 
    
    header("Location:list.php");
?>