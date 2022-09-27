<?php
    require("../connection.php");

    $nis = $_GET["nis"];

    $student = $con->query("select * from siswa where nis='$nis'")->fetch();

    if ( ! isset($_SESSION["username"])){
        Header("Location:./customer/index.php");
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
        <h1 class="pb-4 mb-4 border-bottom">Irfan Database</h1>
        <a href="../process/logout.php">Logout</a>
        
        <form action="../process/edit.php?nis=<?= $nis ?>" method="post">
            <div class="container">
                <div class="row row-cols-2">
                    <label for="nis">Nis:</label>
                    <div class="col">
                        <input type="text" name="nis" id="nis" class="form-control" value="<?= $student['nis'] ?>">
                    </div>

                    <label for="name">Name:</label>
                    <div class="col">
                        <input type="text" name="name" id="name" class="form-control" value="<?= $student['nama'] ?>">
                    </div>
    
                    <label for="class">Class:</label>
                    <div class="col">
                        <input type="text" name="class" id="class" class="form-control" value="<?= $student['kelas'] ?>">
                    </div>

                    <div></div>
                    <div>
                        <button type="submit" class="btn btn-primary w-100">Edit Student</button>
                    </div>
                </div>
                <br>
            </div>
        </form>
    </div>
</body>
</html>