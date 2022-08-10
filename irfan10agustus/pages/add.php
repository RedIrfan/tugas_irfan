<?php
    require("../connection.php");

    $categories = $con->query("select * from category");

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
    <h1>Add Book</h1>
    <form action="../process/add.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="category">Category</label>
        <select name="category" id="category">
            <?php
                foreach($categories as $category){
                    echo "<option value='" . $category["id"] . "'>";
                        echo $category["name"];
                    echo "</option>";
                }
            ?>
        </select>
        <br>
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Add</button>
    </form>
</body>
</html>