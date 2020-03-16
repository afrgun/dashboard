<?php 
  session_start();
  include '../../connect.php';
  
  $id_regis = $_SESSION['id_regis'];
  $password = date("Y").''.$hari.''.$jam.''.$id_regis;
  
  $resCreate = mysqli_query($conn, "INSERT INTO user values (NULL, '$name', '$password', '3', '$id_regis')");          
  
  if($resCreate){
    echo "success";
  } else {
    echo "create user failed";
  }


?>