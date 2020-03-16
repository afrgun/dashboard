<?php
session_start();

$mapel = array();

$getMapel = mysqli_query($conn, "SELECT * FROM mapel");
while ($row = mysqli_fetch_array($getMapel)){
  $mapel[] = $row;
}

?>