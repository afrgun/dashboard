<?php

$contact = array();
$namalengkap  = "";
$namaorangtua = "";
$kelas        = "";
$tlp          = "";
$alamat       = "";
$message      = "";
$status       = "";

$getContact = mysqli_query($conn, "SELECT * FROM guest");
while ($row = mysqli_fetch_array($getContact)){
  $contact[] = $row;
}

if (isset($_GET['id'])) {
	$id = $_GET['id'];
  $getDetailContact = mysqli_query($conn, "SELECT * FROM guest where id_guest='$id'");
  if (count($getDetailContact) == 1 ) {
    $get = mysqli_fetch_array($getDetailContact);
    
    $namalengkap  = $get['nama'];
    $namaorangtua = $get['parent'];
    $kelas        = $get['grade'];
    $tlp          = $get['tlp'];
    $alamat       = $get['address'];
    $message      = $get['message'];
    $status       = $get['status'];
    
  }
}




?>