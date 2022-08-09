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
</head>
<body>
    <a href="./pages/add.php">Add Student</a>
    <table>
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
                        echo $data['id'];
                    echo "</td>";
                echo "</tr>";
            }?>
        </tbody>
    </table>
</body>
</html>