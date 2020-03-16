<?php
  include '../../connect.php';

  $id = $_GET['id'];

  $res = mysqli_query($conn, "DELETE FROM guest WHERE id_guest='$id'");
        

  if($res){
    header("Location:../../table-contact.php?pesan=delete");
  } else {
    echo "gagal";
  }
?>