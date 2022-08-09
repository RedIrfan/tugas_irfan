<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../process/add.php" method="post">
        <label for="nama">Name</label>
        <input type="text" id="nama" name="nama">
        <br>
        <label for="kelas">Class</label>
        <input type="text" id="kelas" name="kelas">
        <br>
        <label for="jurusan">Program</label>
        <input type="text" id="jurusan" name="jurusan">
        <br>
        <label for="alamat">address</label>
        <input type="text" id="alamat" name="alamat">
        <br>
        <button type="submit">Add</button>
    </form>    
</body>
</html>