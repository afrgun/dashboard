<?php
session_start();
include '../../connect.php';


$dataSubmit = array();
$date = date("d/m/Y", strtotime($_SESSION['tanggal']));
$materi = $_SESSION['materi'];

foreach($_POST['id_siswa'] as $item => $value){
  $dataSubmit[] = array( $value, $_SESSION['id_mapel'], $_SESSION['id_tutor'], $date);
}

foreach($_SESSION['datasiswa'] as $data => $value){
  array_push($dataSubmit[$data][] = ($_POST['sikap-'.$value['id_regis']] == '' ? "NULL" : $_POST['sikap-'.$value['id_regis']] ));
  array_push($dataSubmit[$data][] = ($materi == '' ? "NULL" : $materi ));
  array_push($dataSubmit[$data][] = ($_POST['tingkatkan-'.$value['id_regis']] == '' ? "NULL" : $_POST['tingkatkan-'.$value['id_regis']] ));
  array_push($dataSubmit[$data][] = ($_POST['nilai-'.$value['id_regis']] == '' ? "NULL" : $_POST['nilai-'.$value['id_regis']] ));
}

foreach($dataSubmit as $data => $value){
  $res = mysqli_query($conn, "INSERT INTO penilaian VALUES ('$value[0]', '$value[1]', '$value[2]', '$value[3]', '$value[4]', '$value[5]', '$value[6]', '$value[7]')");
}


if($res){
  header("Location:../../penilaian.php");
} else {
  echo "failed";
}

?>