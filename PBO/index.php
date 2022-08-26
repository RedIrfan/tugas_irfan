<?php 
    require("connection.php");

    $sql = $con->get_sql();

    $products = $con->select_from('products', "products.id, products.product_name, products.price, categories.category_name", ['categories', 'products.category_id=categories.id']);

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
    <h1>Products</h1>
    <a href="">Add Product</a>
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php foreach($products as $product): ?>
                <tr>
                    <td><?= $product["id"] ?></td>
                    <td><?= $product["product_name"] ?></td>
                    <td><?= $product["category_name"] ?></td>
                    <td><?= $product["price"] ?></td>
                    <td>
                        <a href="./pages/edit.php?id=<?= $product["id"] ?>">Edit</a>
                        <a href="./process/delete.php?id=<?= $product["id"] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>