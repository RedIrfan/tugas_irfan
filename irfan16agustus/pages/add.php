<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body class="bg-dark">
    <?= require("./layout.php") ?>
    <div class="container bg-white py-2">
        <form action="../process/add.php" method="post" class="row row-cols-2">
            <label for="nama">Name</label>
            <div>
                <input class="form-control" type="text" id="nama" name="nama">
            </div>  
            <label for="kelas">Class</label>
            <div>
                <input class="form-control" type="text" id="kelas" name="kelas">
            </div>

            <label for="jurusan">Program</label>
            <div>
                <input class="form-control" type="text" id="jurusan" name="jurusan">
            </div>

            <label for="alamat">Address</label>
            <div>
                <input class="form-control" type="text" id="alamat" name="alamat">
            </div>

            <div class="col"></div>
            <div>
                <button class="w-100 btn btn-primary" type="submit">Add</button>
            </div>
        </form>    
    </div>
</body>
<script src="../js/bootstrap.js"></script>
</html>