<?php 
session_start();

// print_r($_SESSION);
define( 'SCRIPT_ROOT', 'http://localhost/KKP/dashboard/' );
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?= SCRIPT_ROOT ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= SCRIPT_ROOT ?>bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= SCRIPT_ROOT ?>bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= SCRIPT_ROOT ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?= SCRIPT_ROOT ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?= SCRIPT_ROOT ?>dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?= SCRIPT_ROOT ?>dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?= SCRIPT_ROOT ?>style/style.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Ga</b>ma</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Gama</b>UI</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= SCRIPT_ROOT ?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['nama_user']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?= SCRIPT_ROOT ?>logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <?php 
  if($_SESSION['role'] == 1){
    include 'sidebar/sidebar-admin.php';
  } else if($_SESSION['role'] == 2) {
    include 'sidebar/sidebar-staff.php';
  } else {
    include 'sidebar/sidebar-user.php';
  }
  ?>