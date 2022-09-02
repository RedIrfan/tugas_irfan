<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">Login</h1>
    <div class="grid-3">
        <div></div>
        <div class="container border pt-2 pb-2 ps-2 pe-2">
            <form action="../process/login.php" method="post">
                <div class="grid-2">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </div>
                <br>
                <div class="grid-2">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <br>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>