<?php
    if (isset($_SESSION["username"])){
        if ($_SESSION["user_role"] != 1){
            Header("Location:/pwpb9september/index.php");
        }
    }
?>