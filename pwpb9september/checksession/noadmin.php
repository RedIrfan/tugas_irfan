<?php
    if (isset($_SESSION["user_role"])){
        if ($_SESSION["user_role"] == 1){
            Header("Location:/pwpb9september/pages/admin/index.php");
        }
    }
?>