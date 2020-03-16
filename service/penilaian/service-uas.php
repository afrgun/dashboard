<?php 
session_start();

$data = array();

$id = $_SESSION['id_regis'];

$getNilai = mysqli_query($conn, "SELECT tut.nama, map.nama, uas.materi, uas.nilai, uas.keterangan

FROM uas uas
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