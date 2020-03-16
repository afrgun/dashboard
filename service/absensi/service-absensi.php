<?php 
session_start();

$data = array();

$id = $_SESSION['id_regis'];

$getNilai = mysqli_query($conn, "SELECT pen.tanggal, map.nama, pen.status_kehadiran

FROM absensi pen
join mapel map USING(id_mapel)
join siswa sis USING(id_siswa)
join registration reg USING(id_regis)

WHERE reg.id_regis=$id

ORDER BY tanggal ASC");

while($row = mysqli_fetch_array($getNilai)){
	$data[] = $row;
}

?>