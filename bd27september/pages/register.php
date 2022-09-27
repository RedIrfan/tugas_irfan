<?php
    require("../connection.php");
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
        
        <div class="container mt-5">
            <h1 class="pb-4 mb-4 border-bottom">Register</h1>
            <form action="../process/register.php" method="post">
                <div class="row row-cols-2">
                    <label for="">Username</label>
                    <div class="col">
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    
                    <label for="">Password</label>
                    <div class="col">
                        <input type="password" name="password" id="password" class="form-control">
                    </div>

                    <label for="">Student Nis</label>
                    <div class="col">
                        <input type="text" name="nis" id="nis" class="form-control">
                    </div>

                    <div></div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100">Register</button>
                        <a href="./login.php">Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>