<?php
session_start();
include '../../connect.php';
$_SESSION['datasiswa'] = array();
$_SESSION['id_mapel'] = "";
$_SESSION['tanggal']  = "";
$_SESSION['id_tutor'] = "";
$kelas                = "";
$program              = "";
$hari                 = "";
$jam                  = "";

$kelas    = $_POST['kelas'];
$program  = $_POST['program'];
$hari     = $_POST['hari'];
$jam      = $_POST['jam'];

$_SESSION['id_mapel'] = $_POST['mapel'];
$_SESSION['id_tutor'] = $_POST['pengajar'];
$_SESSION['tanggal']  = $_POST['tanggal'];
$_SESSION['materi']	  = $_POST['materi'];

$data = array();

$getData = mysqli_query($conn, "SELECT sis.id_siswa, sis.id_regis, reg.nama_lengkap

from siswa sis
join registration reg USING(id_regis)

where reg.kelas='$kelas'
AND
reg.id_program='$program'
AND
reg.id_hari='$hari'
AND
reg.id_jam='$jam'");

if($getData){
  while($row = mysqli_fetch_array($getData)){
    $_SESSION['datasiswa'][] = $row;
  }
  echo json_encode($_SESSION['datasiswa']);
} else {
  header("Location:../../absensi.php");
}




?>