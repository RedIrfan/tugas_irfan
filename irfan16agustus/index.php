<?php

    require("connection.php");

    $datas = $con->query("select * from siswa")->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body class="bg-dark">
    <?= require("./pages/layout.php") ?>
    <div class="container py-2 bg-white shadow">
        <a href="./pages/add.php" class="btn btn-primary">Add Student</a>
        <table class="table table-bordered">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Class</th>
                <th>Program</th>
                <th>Address</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php foreach($datas as $data){
                    echo "<tr>";
                        echo "<td>";
                            echo $data['id'];
                        echo "</td>";
                        echo "<td>";
                            echo $data['nama'];
                        echo "</td>";
                        echo "<td>";
                            echo $data['kelas'];;
                        echo "</td>";
                        echo "<td>";
                            echo $data['jurusan'];
                        echo "</td>";
                        echo "<td>";
                            echo $data['alamat'];
                        echo "</td>";
                        echo "<td>";
                            echo "<a class='btn btn-danger' href='./process/delete.php?id=" . $data["id"] . "'>Delete</a>";
                            echo "<a class='btn btn-success' href='./pages/edit.php?id=" . $data["id"] . "'>Edit</a>";
                        echo "</td>";
                    echo "</tr>";
                }?>
            </tbody>
        </table>
    </div>
</body>
</html>         