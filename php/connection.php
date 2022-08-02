<?php 

$host = "localhost";
$username = "root";
$password = "";
$dbname = "sekolah";

$con = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$query = $con->query("select * from siswa");

?>

<h1>Data siswa</h1>

<?php while($result = $query->fetch()){ ?>
    <p><?= $result["nama"] ?> </p>
<?php } ?>