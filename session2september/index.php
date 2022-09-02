<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="border">
        <h1 class="text-center">Home</h1>
        <div class="border grid-2">
            <div class="d-flex">
                <a href="" class="me-2">Home</a>
                <?php
                    if(isset($_SESSION["username"])){
                        echo "<a href='./pages/user.php'>User</a>";
                    }
                ?>
            </div>

            <div>
                <?php
                    if(isset($_SESSION["username"])){
                        echo "<a href='./process/logout.php'>Logout</a>";
                    } else{
                        echo "<a href='./pages/login.php'>Login</a>";
                    }
                ?>
            </div>
        </div>
    </div>
    <br>
    <div class="grid-2">
        <div class="container border bg-blue">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quos tempora voluptatum nisi iure sunt eos, ut omnis incidunt odit iste asperiores ea. Consequatur reprehenderit veniam corporis quibusdam. Perferendis, autem?</p>
        </div>

        <div class="container border bg-red">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quos tempora voluptatum nisi iure sunt eos, ut omnis incidunt odit iste asperiores ea. Consequatur reprehenderit veniam corporis quibusdam. Perferendis, autem?</p>
        </div>
    </div>

    <br>

    <div class="container border bg-yellow">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quos tempora voluptatum nisi iure sunt eos, ut omnis incidunt odit iste asperiores ea. Consequatur reprehenderit veniam corporis quibusdam. Perferendis, autem?</p>
    </div>

    <br>

    <div class="container border bg-green">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum nisi iste placeat, quod magnam porro? Delectus, rerum molestias? Error illum natus, eaque amet vero cupiditate voluptatibus deserunt quos magni voluptas.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quisquam ad exercitationem beatae sint optio adipisci nobis sunt debitis nulla, similique qui consequatur asperiores, rerum laborum earum dicta expedita quas.
        </p>
    </div>

</body>
</html>