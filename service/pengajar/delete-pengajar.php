<?php
  include '../../connect.php';

  $id = $_GET['id'];

  $res = mysqli_query($conn, "DELETE FROM tutor WHERE id_tutor='$id'");
        

  if($res){
    header("Location:../../table-pengajar.php?pesan=delete");
  } else {
    echo "gagal";
  }
?>