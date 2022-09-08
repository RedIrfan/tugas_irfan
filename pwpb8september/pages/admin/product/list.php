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
<?php require('../layout.php ') ?>
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
                    <td></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>