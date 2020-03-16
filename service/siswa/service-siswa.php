<?php
session_start();
include 'connect.php';

$siswaReg   = array();
$siswaPriv  = array();
$siswaInt   = array();


  $getReg = mysqli_query($conn, "SELECT sis.id_siswa, reg.id_regis, reg.nama_lengkap, reg.kelas, h.nama, j.nama, reg.no_telp, reg.asal_sekolah,
  reg.nama_orangtua, reg.alamat_lengkap, u.password

	from siswa sis
  join registration reg USING(id_regis)
  join hari h USING(id_hari)
  join jam j USING(id_jam)
  join program p USING(id_program)
  join user u USING(id_regis)
  
  where p.nama='regular' 
  AND 
  reg.status_account='active'");
  while ($row = mysqli_fetch_array($getReg)){
    $siswaReg[] = $row;
  }

  $getPriv = mysqli_query($conn, "SELECT sis.id_siswa, reg.id_regis, reg.nama_lengkap, reg.kelas, h.nama, j.nama, reg.no_telp, reg.asal_sekolah,
  reg.nama_orangtua, reg.alamat_lengkap, u.password

	from siswa sis
  join registration reg USING(id_regis)
  join hari h USING(id_hari)
  join jam j USING(id_jam)
  join program p USING(id_program)
  join user u USING(id_regis)
  
  where p.nama='private' 
  AND
  reg.status_account='active'");
  while ($row = mysqli_fetch_array($getPriv)){
    $siswaPriv[] = $row;
  }

  $getInt = mysqli_query($conn, "SELECT sis.id_siswa, reg.id_regis, reg.nama_lengkap, reg.kelas, h.nama, j.nama, reg.no_telp, reg.asal_sekolah,
  reg.nama_orangtua, reg.alamat_lengkap, u.password

	from siswa sis
  join registration reg USING(id_regis)
  join hari h USING(id_hari)
  join jam j USING(id_jam)
  join program p USING(id_program)
  join user u USING(id_regis)
  
  where p.nama='intensive' 
  AND
  reg.status_account='active'");
  while ($row = mysqli_fetch_array($getInt)){
    $siswaInt[] = $row;
  }

  function get_count_hadir($con, $id){
    $getJumlah = mysqli_query($con, "SELECT status_kehadiran, count(*) as jumlah 
    from absensi 
    where id_siswa='$id'
    AND
    status_kehadiran='hadir'
    group by status_kehadiran");

    $dataJumlah  = array();
    
    while($row = mysqli_fetch_array($getJumlah)){
     $dataJumlah[] = $row; 
    }
    return $dataJumlah;
  }

  function get_count_sakit($con, $id){
    $getJumlah = mysqli_query($con, "SELECT status_kehadiran, count(*) as jumlah 
    from absensi 
    where id_siswa='$id'
    AND
    status_kehadiran='sakit'
    group by status_kehadiran");

    $dataJumlah  = array();
    
    while($row = mysqli_fetch_array($getJumlah)){
     $dataJumlah[] = $row; 
    }
    return $dataJumlah;
  }

  function get_count_alpha($con, $id){
    $getJumlah = mysqli_query($con, "SELECT status_kehadiran, count(*) as jumlah 
    from absensi 
    where id_siswa='$id'
    AND
    status_kehadiran='alpha'
    group by status_kehadiran");

    $dataJumlah  = array();
    
    while($row = mysqli_fetch_array($getJumlah)){
     $dataJumlah[] = $row; 
    }
    return $dataJumlah;
  }

  
  
?>