<?php
    session_start();

    if (isset($_REQUEST["submitBTN"])){
        $_SESSION["id"] = $_REQUEST["id"];
        $_SESSION["username"] = $_REQUEST["username"];

        header("Location:tampil_session.php");
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
    <form action="">

        <label for="id">Id</label>
        <input type="number" name="id" id="id">
        <br>
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <br>
        <button type="submit" name="submitBTN">Login</button>

    </form>
</body>
</html>