<?php 
session_start();

$data = array();

// print_r($_SESSION);
$id = $_SESSION['id_regis'];

$getNilai = mysqli_query($conn, "SELECT pen.tanggal, map.nama, pen.sikap, pen.materi, pen.penekanan_materi, pen.nilai

FROM penilaian pen
join tutor tu USING(id_tutor)
join mapel map USING(id_mapel)
join siswa sis USING(id_siswa)
join registration reg USING(id_regis)

WHERE reg.id_regis=$id

ORDER BY tanggal ASC ");

while($row = mysqli_fetch_array($getNilai)){
	$data[] = $row;
}

?>