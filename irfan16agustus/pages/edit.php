<?php
    require("../connection.php");

    $id = $_GET["id"];

    $siswa = $con->query("select * from siswa where id='$id'")->fetchAll()[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Document</title>
</head>
<body class="bg-dark">
    <?= require("./layout.php") ?>
    <div class="container bg-white py-2">
        <form action="../process/edit.php?id=<?= $siswa['id'] ?>" method="post" class="row row-cols-2">
            <label for="nama">Name</label>
            <div class="col">
                <input class="form-control" type="text" id="nama" name="nama" value=<?= $siswa["nama"] ?>>
            </div>

            <label for="kelas">Class</label>
            <div class="col">
                <input class="form-control" type="text" id="kelas" name="kelas" value=<?= $siswa["kelas"] ?>>
            </div>

            <label for="jurusan">Program</label>
            <div class="col">
                <input class="form-control" type="text" id="jurusan" name="jurusan" value=<?= $siswa["jurusan"] ?>>
            </div>

            <label for="alamat">address</label>
            <div class="col">
                <input class="form-control" type="text" id="alamat" name="alamat" value=<?= $siswa["alamat"] ?>>
            </div>
            
            <div class="col"></div>
            <div class="col">
                <button class="btn btn-primary w-100" type="submit">Edit</button>
            </div>
        </form>    
    </div>
</body>
<script src="../js/bootstrap.js"></script>
</html>