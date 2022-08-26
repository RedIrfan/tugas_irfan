<?php
    require("../connection.php");

    $id = $_GET["id"];

    $product = $con->select_from("products", " * ", [], "id=$id")[0];
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
    <h1>Edit Product</h1>
    <form action="../process/edit.php?id=<?= $id ?>" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?= $product["product_name"] ?>">
        <br>
        <label for="category">Category</label>
        <select name="category" id="category">
            <?php foreach($categories as $category): ?>
                <option value="<?= $category["id"] ?>"
                    <?php if ($category["id"] == $product["category_id"]){
                        echo "selected";
                    }?>
                >
                    <?= $category["category_name"] ?>
                </option>
            <?php endforeach ?>
        </select>
        <br>
        <label for="price">Price</label>
        <input type="number" id="price" name="price" value="<?= $product["price"] ?>" >
        <br>
        <button type="submit">Edit</button>
    </form>
</body>
</html>