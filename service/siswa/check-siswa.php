<?php
session_start();
include '../../connect.php';
$found = "";

if (isset($_SESSION['id_regis'])) {
	$id = $_SESSION['id_regis'];
  $getSiswa = mysqli_query($conn, "SELECT * FROM siswa where id_regis='$id'");
    $cekSiswa = mysqli_num_rows($getSiswa);
    if ($cekSiswa == 0 ) {
      $found = "false";
    }
}




?>