<?php 
  define( 'SCRIPT_ROOT', 'http://localhost/KKP/dashboard/' );
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
    
  $id = $_GET['id'];
  $res = mysqli_query($conn, "UPDATE tutor SET nama='$name', alamat='$address', no_telp='$phone', pendidikan='$pendidikan', bidang='$bidang_separated', status='$status', sk='$sk' WHERE id_tutor='$id'");

  if($res){
    header("Location:../../table-pengajar.php?pesan=edit");
  } else {
    echo "gagal";
  }
?>