<?php
    require("connection.php");
    
    $nis = $_GET["nis"];
    if (isset($_POST["nis"])){
        $postnis = $_POST["nis"];
        $name = $_POST["name"];
        $class = $_POST["class"];

        $con->query("update students set nis='$postnis', name='$name', class='$class' where nis='$nis'");

        header("Location:list.php");
    }
    
    $student = $con->query("select * from students where nis='$nis'")->fetch();
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
    <form action="" method="post">
        <div class="card container h-50 mt-5 p-4">
            <div class="row row-cols-2 gs-5 my-auto">
                <label for="nis">Nis</label>
                <div>
                    <input type="text" class="form-control" id="nis" name="nis" placeholder="xxxx.xx.xx" value="<?= $nis ?>">
                </div>
    
                <label for="name">Name</label>
                <div>
                    <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" value="<?= $student['name'] ?>">
                </div>
    
                <label for="class">Class</label>
                <div>
                    <input type="text" class="form-control" id="class" name="class" placeholder="Grade Programs" value="<?= $student['class'] ?>">
                </div>
    
                <div></div>
                <div>
                    <button class="btn btn-success w-100">Update</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>