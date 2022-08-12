<?php 

    require("../connection.php");

    $nama = $_REQUEST["nama"];
    $kelas = $_REQUEST["kelas"];
    $jurusan = $_REQUEST["jurusan"];
    $alamat = $_REQUEST["alamat"];

    $con->query("insert into siswa values(null, '$nama', '$kelas', '$jurusan', '$alamat')");

    Header("Location:../index.php");

?>