<?php
session_start();

$_SESSION['status'] = 'logout';
unset($_SESSION['nama_user']);
unset($_SESSION['role']);
unset($_SESSION['datasiswa']);
unset($_SESSION['id_siswa']);
unset($_SESSION['id_regis']);

header("location:../landingpage/index.php");
?>