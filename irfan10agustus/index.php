<?php

    require("connection.php");

    $books = $con->query("select book.id, book.name, book.description, category.name from book inner join category on book.category_id=category.id")->fetchAll();


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
    <h1>Books</h1>
    <a href="./pages/add.php">Add Book</a>
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php
                foreach($books as $book){
                    echo "<tr>";
                        echo "<td>";
                            echo $book["id"];
                        echo "</td>";
                        echo "<td>";
                            echo $book[1];
                        echo "</td>";
                        echo "<td>";
                            echo $book["name"];
                        echo "</td>";
                        echo "<td>";
                            echo $book["description"];
                        echo "</td>";
                        echo "<td>";
                            echo "<a href='./process/delete.php?id=" . $book["id"] . "'>";
                                echo "Delete";
                            echo "</a>";
                            echo "<a href='./pages/edit.php?id=" . $book["id"] . "'>";
                                echo "Edit";
                            echo "</a>";
                        echo "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>