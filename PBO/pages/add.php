<?php
    require("../connection.php");

    $categories = $con->select_from("categories", " * ");

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
    <h1>Add Product</h1>
    <form action="../process/add.php" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
        <br>
        <label for="category">Category</label>
        <select name="category" id="category">
            <?php foreach($categories as $category): ?>
                <option value="<?= $category["id"] ?>">
                    <?= $category["category_name"] ?>
                </option>
            <?php endforeach ?>
        </select>
        <br>
        <label for="price">Price</label>
        <input type="number" value="1000" id="price" name="price">
        <br>
        <button type="submit">Add</button>
    </form>
</body>
</html>