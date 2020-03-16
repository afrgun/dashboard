<?php
session_start();

$pengajar = array();

$nama         = "";
$alamat       = "";
$tlp          = "";
$pendidikan   = "";
$bidang       = [];
$status       = "";
$sk           = "";

$getPengajar = mysqli_query($conn, "SELECT * FROM tutor");
while ($row = mysqli_fetch_array($getPengajar)){
  $pengajar[] = $row;
}

if (isset($_GET['id'])) {
	$id = $_GET['id'];
  $getDetailPengajar = mysqli_query($conn, "SELECT * FROM tutor where id_tutor='$id'");
  if (count($getDetailPengajar) == 1 ) {
    $get = mysqli_fetch_array($getDetailPengajar);
    
    $nama         = $get['nama'];
    $alamat       = $get['alamat'];
    $tlp          = $get['no_telp'];
    $pendidikan   = $get['pendidikan'];
    $bidang       = $get['bidang'];
    $status       = $get['status'];
    $sk           = $get['sk'];
    
  }
}





?>