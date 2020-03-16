<?php

define( 'SCRIPT_ROOT', 'http://localhost/KKP/dashboard/' );
?>

  <aside class="main-sidebar">
    <section class="sidebar">
      
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="index.php">
            <i class="fa fa-th"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?= SCRIPT_ROOT ?>table-contact.php">
            <i class="fa fa-th"></i> <span>Buku Tamu</span>
          </a>
        </li>
        <li>
          <a href="<?= SCRIPT_ROOT ?>table-registration.php">
            <i class="fa fa-th"></i> <span>Registrasi</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= SCRIPT_ROOT ?>table-regular.php"><i class="fa fa-circle-o"></i> Reguler</a></li>
            <li><a href="<?= SCRIPT_ROOT ?>table-private.php"><i class="fa fa-circle-o"></i> Private</a></li>
            <li><a href="<?= SCRIPT_ROOT ?>table-intensive.php"><i class="fa fa-circle-o"></i> Intensive</a></li>
         </ul>
        </li>
        <li>
          <a href="<?= SCRIPT_ROOT ?>table-pengajar.php">
            <i class="fa fa-th"></i> <span>Pengajar</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>Absensi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= SCRIPT_ROOT ?>absensi.php"><i class="fa fa-circle-o"></i> Siswa</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Penilaian</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= SCRIPT_ROOT ?>penilaian.php"><i class="fa fa-circle-o"></i> Harian</a></li>
            <li><a href="<?= SCRIPT_ROOT ?>penilaian-uts.php"><i class="fa fa-circle-o"></i> UTS</a></li>
            <li><a href="<?= SCRIPT_ROOT ?>penilaian-uas.php"><i class="fa fa-circle-o"></i> UAS</a></li>
          </ul>
        </li>
      </ul>
    </section>
  </aside>