<?php 
  session_start();
  include '../../connect.php';
  
  $id_regis = $_SESSION['id_regis'];
  
  $result = mysqli_query($conn, "INSERT INTO siswa values (NULL, '$id_regis', NULL)");          
  
  if($result){
    echo "success";
  } else {
    echo "failed";
  }


?>