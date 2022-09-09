<?php
    require("../../../connection.php");

    $datas = $con->query("select product.id, product.name, category.name, product.price, product.stok from product inner join category on product.category_id=category.id")->fetchAll();
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
        <?php require('../layout.php ') ?>
        <div class="container border">
            <a href="./add.php">Add Product</a>
            <table>
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    <?php foreach($datas as $data):?>
                        <tr>
                            <td><?= $data["id"] ?></td>
                            <td><?= $data["1"] ?></td>
                            <td><?= $data["name"] ?></td>
                            <td><?= $data["price"] ?></td>
                            <td><?= $data["stok"] ?></td>
                            <td>
                                <a href="/pwpb9september/pages/admin/product/edit.php?id=<?= $data["id"] ?>">Edit</a>
                                <a href="/pwpb9september/process/admin/product/delete.php?id=<?= $data["id"] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>