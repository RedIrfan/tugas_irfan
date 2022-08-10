<?php

    require("../connection.php");

    $id = $_GET["id"];

    $book = $con->query("select * from book where id='$id'")->fetchAll()[0];
    $categories = $con->query("select * from category ");

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
    <h1>Edit Book</h1>
    <form action="../process/edit.php?id=<?= $id ?>" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?= $book['name'] ?>">
        <br>
        <label for="category">Category</label>
        <select name="category" id="category">
            <?php
                foreach($categories as $category){
                    if ($category["id"] == $book["category_id"]){
                        echo "<option value='" . $category["id"] . "' selected>";
                    }else {
                        echo "<option value='" . $category["id"] . "'>";
                    }

                        echo $category["name"];
                    echo "</option>";
                }
            ?>
        </select>
        <br>
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10"><?= $book["description"] ?></textarea>
        <br>
        <button type="submit">Edit</button>
    </form>
</body>
</html>