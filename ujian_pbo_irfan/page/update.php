<?php
    require("../connection.php");

    $id = $_GET['id'];
    
    $query = $con->query("select * from perusahaan where");
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
    <h1>Edit Company</h1>
    <form action="../process/update.php?id=$id" method="post">
        <label for="name">Name: </label>
        <input type="text" id="name" name="name">
        <br>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address">
        <br>
        <button type="submit">Add</button>
    </form>
</body>
</html>