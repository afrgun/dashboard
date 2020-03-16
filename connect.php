<?php 
$servername = "localhost";
$database = "gamaui";
$username = "root";
$password = "afrgun123";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>