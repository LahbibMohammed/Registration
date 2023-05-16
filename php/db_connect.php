<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Échec de la connexion à la base de données : " . mysqli_connect_error());
}
?>
