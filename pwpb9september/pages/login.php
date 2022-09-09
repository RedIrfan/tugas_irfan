<?php
    $msg = "";

    if (isset($_GET["msg"])){
        $msg = $_GET["msg"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <span style="color:red;"><?= $msg ?></span>
        <form action="../process/login.php" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <br>
            <button type="submit">Login</button>
            <br>
            <a href="./register.php">don't have an account?</a>
        </form>
    </div>
</body>
</html>