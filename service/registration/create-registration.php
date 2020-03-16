<?php 
  include '../../connect.php';
  
  $name     = $_POST['regis_name'];
  $ttl      = $_POST['regis_ttl'];
  $agama    = $_POST['regis_agama'];
  $address  = $_POST['regis_alamat'];
  $kelas    = $_POST['regis_kelas'];
  $sekolah  = $_POST['regis_asal_sekolah'];
  $phone    = $_POST['regis_phone'];
  $ortu     = $_POST['regis_ortu'];
  $email    = $_POST['regis_email'];
  $prestasi = $_POST['regis_prestasi'];
  $program  = $_POST['regis_program'];
  $hari     = $_POST['regis_hari'];
  $jam      = $_POST['regis_jam'];
  $sumber   = $_POST['regis_sumber'];
  $date     = $_POST['tanggal_daftar'];
  $datetime = $date.' 00:00:00';
  
  $res = mysqli_query($conn, "INSERT INTO registration values (NULL, '$name', '$ttl', '$agama', '$address', '$sekolah','$kelas', '$phone',
                      '$email', '$prestasi', '$ortu', '$program', '$hari', '$jam', '$sumber', '-', '$datetime', 'unpaid', 'non-active')");          
  
  if($res){
    header("Location:../../table-registration.php?pesan=tambah");
  } else {
    echo "failed";
  }

  // INSERT INTO `registration` VALUES (NULL, 'af','depok-02/25/2020','islam','depok','smp 12 depok','4','12039808','byk','-','regular','1','1','presentasi','-','02/17/2020','unpaid','non-active');

?>