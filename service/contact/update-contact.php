<?php 
  define( 'SCRIPT_ROOT', 'http://localhost/KKP/dashboard/' );
  include '../../connect.php';

  $status  = $_POST['status'];
    
  $id = $_GET['id'];
  $res = mysqli_query($conn, "UPDATE guest SET status='$status' WHERE id_guest='$id'");

  if($res){
    header("Location:../../table-contact.php?pesan=edit");
  } else {
    echo "gagal";
  }
?>