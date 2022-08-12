<?php 

    require("../connection.php");

    $id = $_GET["id"];

    $nama = $_REQUEST["nama"];
    $kelas = $_REQUEST["kelas"];
    $jurusan = $_REQUEST["jurusan"];
    $alamat = $_REQUEST["alamat"];

    $con->query("update siswa set nama='$nama', kelas='$kelas', jurusan='$jurusan', alamat='$alamat' where id='$id'");

    Header("Location:../index.php");

?>