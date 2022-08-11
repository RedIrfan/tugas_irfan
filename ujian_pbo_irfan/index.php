<?php
    require("connection.php");

    $query = $con->query("select * from perusahaan");
    $companies = $query->fetchAll();
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
    <h1>Companies</h1>
    <a href="page/add.php">Add Company</a>
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php foreach($companies as $company){
                echo "<tr>";
                    echo "<td>" . $company["id"] . "</td>";
                    echo "<td>" . $company["name"] . "</td>";
                    echo "<td>" . $company["address"] . "</td>";
                    echo "<td>";
                        echo "<a href='./process/delete.php?id=" . $company["id"] . "'> Delete </a>";
                        echo "<a href='./process/edit.php?id=" . $company["id"] . "'> Edit </a>";
                    echo "</td>";
                echo "</tr>";
            };
            ?>
        </tbody>
    </table>
</body>
</html>