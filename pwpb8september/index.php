<?php
    require("./connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Home</h1>
        <?php if( ! isset($_SESSION["username"]) ) : ?>
            <a href="./pages/login.php">Login</a>
        <?php else: ?>
            <a href="./process/logout.php">Logout</a>
        <?php endif ?>
    </div>
</body>
</html>