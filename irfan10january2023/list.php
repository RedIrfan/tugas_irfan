<?php 
    require('connection.php');

    $students = $con->query("select * from students")->fetchAll();
?>
<!DOCTYPE html>
<html lang="en" height="100vh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        counter-reset: rowNumber;
    }
    table tr{
        counter-increment: rowNumber;
    }
    table tr .number:first-child::before{
        content:counter(rowNumber);
    }
</style>
<body>
    <div class="card container h-50 mt-5 p-4 ">
        <a href="insert.php" class="btn btn-primary">Add New</a>
        <div class="overflowing h-100">
            <table class="table h-100 mb-0">
                <tbody >
                    <?php if (count($students) > 0) : ?>
                        <?php foreach($students as $student) : ?>
                            <tr>
                                <th class="number"></th>
                                <td><?= $student[0] ?></td>
                                <td><?= $student[1] ?></td>
                                <td><?= $student[2] ?></td>
                                <td>
                                    <a href="edit.php?nis=<?= $student[0] ?>" class="btn btn-success">Edit</a>
                                    <a href="delete.php?nis=<?= $student[0] ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    <?php else : ?>
                        <td colspan="4" class="text-center">nothing to see here</td>
                    <?php endif ?>
                </tbody>
                <thead>
                    <th>#</th>
                    <th>Nis</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Actions</th>
                </thead>
                <tfoot class="mb-0 pb-0">
                    <th>#</th>
                    <th>Nis</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Actions</th>
                </tfoot>
            </table>
        </div>
    </div>
</body>
</html>