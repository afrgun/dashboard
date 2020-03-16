
<!-- id_siswa
id_mapel = ok
id_tutor = ok
tanggal = ok
status_kehadiran = ok -->

<?php
session_start();
include '../../connect.php';


$dataSubmit = array();
$date = date("d/m/Y", strtotime($_SESSION['tanggal']));

foreach($_POST['id_siswa'] as $item => $value){
  $dataSubmit[] = array($value, $_SESSION['id_mapel'], $_SESSION['id_tutor'], $date);
}

foreach($_SESSION['datasiswa'] as $data => $value){
  array_push($dataSubmit[$data][] = $_POST[$value['id_regis']]);
}

foreach($dataSubmit as $data => $value){
  $res = mysqli_query($conn, "INSERT INTO absensi values ('$value[0]', '$value[1]', '$value[2]', '$value[3]', '$value[4]')");
}


if($res){
  header("Location:../../absensi.php");
} else {
  echo "failed";
}

?>