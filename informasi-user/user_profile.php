<?php 
session_start();
require '../header.php';
include '../connect.php';
include '../service/siswa/service-dataprofile.php';
define( 'SCRIPT_ROOT', 'http://localhost/KKP/dashboard/' );

?>


  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <div class="row flex-center">
        <div class="col-xs-6">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <!-- <img class="profile-user-img img-responsive img-circle" src="dist/img/user4-128x128.jpg" alt="User profile picture"> -->
              <?php 
                foreach($dataProfile as $key => $value){
                  echo '<h3 class="profile-username text-center">'.$value['nama_lengkap'].'</h3>';
                }

                foreach($dataProfile as $key => $value){
                  echo '<p class="text-muted text-center">'.$value['no_telp'].'</p>';
                }

              ?>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Asal Sekolah</strong>
              <?php
              foreach($dataProfile as $key => $value){
                echo '<p class="text-muted">'.$value['asal_sekolah'].'</p>';
              }
              ?>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>
              <?php
              foreach($dataProfile as $key => $value){
                echo '<p class="text-muted">'.$value['alamat_lengkap'].'</p>';
              }
              ?>

              <hr>

              <strong><i class="fa fa-book margin-r-5"></i> Prestasi</strong>
              <?php
              foreach($dataProfile as $key => $value){
                echo '<p class="text-muted">'.$value['prestasi'].'</p>';
              }
              ?>

              <hr>

              <strong><i class="fa fa-book margin-r-5"></i> Email</strong>
              <?php
              foreach($dataProfile as $key => $value){
                echo '<p class="text-muted">'.$value['email'].'</p>';
              }
              ?>

              <hr>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
       
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <div class="control-sidebar-bg"></div>

<?php include '../footer.php'; ?>
