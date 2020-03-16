<?php
  include '../../connect.php';

  $id = $_GET['id'];

  $result = mysqli_query($conn, "DELETE FROM user WHERE id_regis='$id'");
        
  if($result){
    echo "success";
  } else {
    echo "gagal";
  }
?>