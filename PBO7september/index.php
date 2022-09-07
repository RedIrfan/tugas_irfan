<?php
    require("./connection.php")


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .text-center{
        text-align:center;
    }
    .float-left{
        float:left;
    }
</style>
<body>
    <h1 class="text-center">Home</h1>
    <div class="float-left">
        <?php if ( ! isset($_SESSION["username"]) ): ?>
            <a href="./pages/login.php">Login</a>
        <?php else: ?>
            <a href="./process/logout.php">Logout</a>
        <?php endif ?>
    </div>
</body>
</html>