<?php
session_start();
include 'connect.php';

$regist = array();
$name     = "";
$ttl      = "";
$agama    = "";
$address  = "";
$kelas    = "";
$sekolah  = "";
$phone    = "";
$email    = "";
$ortu     = "";
$prestasi = "";
$program  = "";
$hari     = "";
$jam      = "";
$sumber   = "";
$ket      = "";
$date     = "";
$payment  = "";
$account  = "";

if($_SESSION['role']==1){
  $getRegist = mysqli_query($conn, "SELECT regis.id_regis, regis.nama_lengkap, regis.ttl, regis.agama, regis.alamat_lengkap, 
regis.asal_sekolah, regis.kelas, regis.no_telp, regis.email, regis.prestasi, regis.nama_orangtua, p.nama, 
d.nama, h.nama, regis.sumber, regis.keterangan, regis.tanggal_daftar, regis.status_payment, regis.status_account

	from registration regis
	join hari d USING(id_hari)
  join jam h USING(id_jam)
  join program p USING(id_program)");
} else {
  $getRegist = mysqli_query($conn, "SELECT regis.id_regis, regis.nama_lengkap, regis.ttl, regis.agama, regis.alamat_lengkap, 
regis.asal_sekolah, regis.kelas, regis.no_telp, regis.email, regis.prestasi, regis.nama_orangtua, p.nama, 
d.nama, h.nama, regis.sumber, regis.keterangan, regis.tanggal_daftar, regis.status_payment, regis.status_account

	from registration regis
	join hari d USING(id_hari)
  join jam h USING(id_jam)
  join program p USING(id_program)
  where regis.status_payment='unpaid'");
}



while ($row = mysqli_fetch_array($getRegist)){
	$regist[] = $row;
}



if (isset($_GET['id'])) {
	$id = $_GET['id'];
  $getDetailContact = mysqli_query($conn, "SELECT * FROM registration where id_regis='$id'");
  if (count($getDetailContact) == 1 ) {
    $get = mysqli_fetch_array($getDetailContact);
    
    $name     = $get['nama_lengkap'];
    $ttl      = $get['ttl'];
    $agama    = $get['agama'];
    $address  = $get['alamat_lengkap'];
    $kelas    = $get['kelas'];
    $sekolah  = $get['asal_sekolah'];
    $phone    = $get['no_telp'];
    $email    = $get['email'];
    $ortu     = $get['nama_orangtua'];
    $prestasi = $get['prestasi'];
    $program  = $get['id_program'];
    $hari     = $get['id_hari'];
    $jam      = $get['id_jam'];
    $sumber   = $get['sumber'];
    $ket      = $get['keterangan'];

    $date = date("Y/m/d", strtotime($get['tanggal_daftar']));
    // $date     = $get['tanggal_daftar'];
    $payment  = $get['status_payment'];
    $account  = $get['status_account'];
    
  }
}




?>
