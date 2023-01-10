<?php
    require("connection.php");

    if (isset($_POST["nis"])){
        $nis = $_POST["nis"];
        $name = $_POST["name"];
        $class = $_POST["class"];

        $con->query("insert into students values('$nis', '$name', '$class')");

        header("Location:list.php");
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
<body>
    <form action="" method="post">
        <div class="card container h-50 mt-5 p-4">
            <div class="row row-cols-2 gs-5 my-auto">
                <label for="nis">Nis</label>
                <div>
                    <input type="text" class="form-control" id="nis" name="nis" placeholder="xxxx.xx.xx">
                </div>
    
                <label for="name">Name</label>
                <div>
                    <input type="text" class="form-control" id="name" name="name" placeholder="John Doe">
                </div>
    
                <label for="class">Class</label>
                <div>
                    <input type="text" class="form-control" id="class" name="class" placeholder="Grade Programs">
                </div>
    
                <div></div>
                <div>
                    <button class="btn btn-primary w-100">Add</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>