<?php
session_start();
include '../../connect.php';
$found = "";

if (isset($_SESSION['id_regis'])) {
	$id = $_SESSION['id_regis'];
  $getUser = mysqli_query($conn, "SELECT * FROM user where id_regis='$id'");
    $cekUser = mysqli_num_rows($getUser);
    if ($cekUser == 0 ) {
      $found = "false";
    }
}




?>