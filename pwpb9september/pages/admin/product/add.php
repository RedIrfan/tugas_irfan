<?php
    require("../../../connection.php");

    $categories = $con->query("select * from category")->fetchAll();

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
    <title>Document</title>
</head>
<body>
    <div class="grid-3">
        <?php require("../layout.php") ?>
        <div class="container border">
            <h1>Add Product</h1>
            <span style="color:red;"><?= $msg ?></span>
            <form action="/pwpb9september/process/admin/product/add.php" method="post">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
                <br>
                <label for="category">Category</label>
                <select name="category" id="category">
                    <?php foreach($categories as $category): ?>
                        <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                    <?php endforeach ?>
                </select>
                <br>
                <label for="price">Price</label>
                <input type="number" name="price" id="price">
                <br>
                <label for="stok">Stock</label>
                <input type="number" name="stok" id="stok">
                <br>
                <button type="submit">Add</button>
            </form>
        </div>
    </div>
</body>
</html>