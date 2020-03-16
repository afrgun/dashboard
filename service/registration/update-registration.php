<?php 
  session_start();
  define( 'SCRIPT_ROOT', 'http://localhost/KKP/dashboard/' );
  include '../../connect.php';

  $phone    = $_POST['regis_phone'];
  $program  = $_POST['regis_program'];
  $hari     = $_POST['regis_hari'];
  $jam      = $_POST['regis_jam'];
  $pembayaran = $_POST['status_pembayaran'];
  $account    = $_POST['status_account'];
  $name    = $_POST['regis_name'];

  $id = $_GET['id'];
  $_SESSION['id_regis'] = $id;

  $currentStatusAccount = "";
  $currentStatusPayment = "";
  
  
  if($account==""){
    $cekStatusAccount = mysqli_query($conn, "SELECT status_account from registration where id_regis='$id'");
    while ($row = mysqli_fetch_array($cekStatusAccount)){
      $currentStatusAccount = $row['status_account'];
    }

    $res = mysqli_query($conn, "UPDATE registration SET no_telp='$phone', id_program='$program', id_hari='$hari', id_jam='$jam',
    status_payment='$pembayaran', status_account='$currentStatusAccount' WHERE id_regis='$id'");

  } else if($pembayaran ==""){
    $cekStatusPayment = mysqli_query($conn, "SELECT status_payment from registration where id_regis='$id'");
    while ($row = mysqli_fetch_array($cekStatusPayment)){
      $currentStatusPayment = $row['status_payment'];
    }

    if($account=="active"){
      include '../user/check-user.php';
      if($found=="false"){
        include '../siswa/check-siswa.php';
        if($found=="false"){
          include '../siswa/create-siswa.php';
          if($result=="success"){
            include '../user/create-user.php';
            $res = mysqli_query($conn, "UPDATE registration SET no_telp='$phone', id_program='$program', id_hari='$hari', id_jam='$jam',
                  status_payment='$currentStatusPayment', status_account='$account' WHERE id_regis='$id'");
          }
        } else {
          include '../user/create-user.php';
          $res = mysqli_query($conn, "UPDATE registration SET no_telp='$phone', id_program='$program', id_hari='$hari', id_jam='$jam',
                status_payment='$currentStatusPayment', status_account='$account' WHERE id_regis='$id'");
        }  
      } else {
        $res = mysqli_query($conn, "UPDATE registration SET no_telp='$phone', id_program='$program', id_hari='$hari', id_jam='$jam',
              status_payment='$currentStatusPayment', status_account='$account' WHERE id_regis='$id'");
      }
    } else{
      include '../user/check-user.php';
      if($found!="true"){
        include '../user/delete-user.php';
        if($result=="success"){
          $res = mysqli_query($conn, "UPDATE registration SET no_telp='$phone', id_program='$program', id_hari='$hari', id_jam='$jam',
                status_payment='$currentStatusPayment', status_account='$account' WHERE id_regis='$id'");
        }
      } else {
        $res = mysqli_query($conn, "UPDATE registration SET no_telp='$phone', id_program='$program', id_hari='$hari', id_jam='$jam',
              status_payment='$currentStatusPayment', status_account='$account' WHERE id_regis='$id'");
      }
    }

  } else {
    echo "terjadi kesalahan";
  }
  
  
  
   
  if($res){
    header("Location:../../table-registration.php?pesan=edit");
  } else {
    echo "gagal";
  }
?>