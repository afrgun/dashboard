<?php 
  include '../../connect.php';
  
  $name     = $_POST['tutor_nama'];
  $address  = $_POST['tutor_alamat'];
  $phone    = $_POST['tutor_tlp'];
  $pendidikan	= $_POST['tutor_pendidikan'];
  $mapel    = $_POST['mapel'];
  $sk 		= $_POST['tutor_sk'];
  $status	= $_POST['tutor_status'];
  $bidang = array();

  if(!empty($_POST['mapel'])) {
    foreach($_POST['mapel'] as $check) {
      $bidang[] = $check; 
    }
  }
  $bidang_separated = implode(",", $bidang);
  
  $res = mysqli_query($conn, "INSERT INTO tutor values (NULL, '$name', '$address', '$phone', '$pendidikan', '$bidang_separated','$status', '$sk')");          
  
  if($res){
    header("Location:../../table-pengajar.php?pesan=tambah");
  } else {
    echo "failed";
  }


?>