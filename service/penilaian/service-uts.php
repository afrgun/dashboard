<?php 
session_start();

$data = array();

// print_r($_SESSION);
$id = $_SESSION['id_regis'];

$getNilai = mysqli_query($conn, "SELECT tut.nama, map.nama, uts.materi, uts.nilai, uts.keterangan

FROM uts uts
join siswa sis using(id_siswa)
join tutor tut using(id_tutor)
join mapel map using(id_mapel)
join registration reg using(id_regis)

WHERE reg.id_regis=$id

ORDER BY tanggal ASC ");

while($row = mysqli_fetch_array($getNilai)){
	$data[] = $row;
}

?>