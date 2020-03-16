<?php
session_start();

$dataProfile   = array();

$id = $_SESSION['id_regis'];

$getDataProfile = mysqli_query($conn, "SELECT reg.nama_lengkap, reg.alamat_lengkap, reg.no_telp, reg.kelas, prog.nama, 
h.nama, j.nama , reg.asal_sekolah, reg.prestasi, reg.email

FROM registration reg
join program prog using(id_program)
join hari h using(id_hari)
join jam j using(id_jam)

where id_regis=$id");

while($row = mysqli_fetch_array($getDataProfile)){
	$dataProfile[] = $row;
}

?>