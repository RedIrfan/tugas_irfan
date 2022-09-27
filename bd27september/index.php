<?php
    require("./connection.php");

    $students = $con->query("select * from siswa")->fetchAll();

    if ( ! isset($_SESSION["username"])){
        Header("Location:./pages/customer/index.php");
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
<body class="bg-dark">
    <div class="container bg-white">
        <h1 class="pb-4 border-bottom">Irfan Database</h1>
        <a href="./process/logout.php">Logout</a>

        <div class="container">
            <a href="./pages/add.php" class="btn btn-primary my-2">Add Student</a>
            <table class="table table-bordered">
                <thead>
                    <th>Nis</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    <?php foreach($students as $student): ?>
                        <tr>
                            <td><?= $student["nis"] ?></td> 
                            <td><?= $student["nama"] ?></td>
                            <td><?= $student["kelas"] ?></td>
                            <td>
                                <a href="./pages/edit.php?nis=<?= $student['nis'] ?>" class="btn btn-success">Edit</a>
                                <a href="./process/delete.php?nis=<?= $student['nis'] ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>