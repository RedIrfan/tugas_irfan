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
    <title>Document</title>
</head>
<body>
    <form action="../process/edit.php?id=<?= $siswa['id'] ?>" method="post">
        <label for="nama">Name</label>
        <input type="text" id="nama" name="nama" value=<?= $siswa["nama"] ?>>
        <br>
        <label for="kelas">Class</label>
        <input type="text" id="kelas" name="kelas" value=<?= $siswa["kelas"] ?>>
        <br>
        <label for="jurusan">Program</label>
        <input type="text" id="jurusan" name="jurusan" value=<?= $siswa["jurusan"] ?>>
        <br>
        <label for="alamat">address</label>
        <input type="text" id="alamat" name="alamat" value=<?= $siswa["alamat"] ?>>
        <br>
        <button type="submit">Edit</button>
    </form>    
</body>
</html>