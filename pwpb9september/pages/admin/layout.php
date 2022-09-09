<?php 
    $root = realpath($_SERVER['DOCUMENT_ROOT']);
    require("$root/pwpb9september/checksession/adminonly.php"); 
?>
<link rel="stylesheet" href="/pwpb9september/css/style.css">
<div class="navbar bg-dark" style="height:90vh;">
    <div class="container">
        <h1>Admin</h1>
        <a href="/pwpb9september/pages/admin/index.php">Dashboard</a>
        <br>
        <a href="/pwpb9september/pages/admin/product/list.php">Product</a>
        <br>
        <a href="/pwpb9september/process/logout.php">Logout</a>
    </div>
</div>