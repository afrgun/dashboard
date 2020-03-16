<?php
  include '../../connect.php';

  $id = $_GET['id'];

  $res = mysqli_query($conn, "DELETE FROM registration WHERE id_regis='$id'");
        

  if($res){
    header("Location:../../table-registration.php?pesan=delete");
  } else {
    echo "gagal";
  }
?>