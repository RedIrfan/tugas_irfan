<?php
    require("../../connection.php");

    if (isset($_SESSION["username"])){
        Header("Location:../../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Irfan Home</h1>
        <a href="../login.php">Login</a>
    </div>
</body>
</html>