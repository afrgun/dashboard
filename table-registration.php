<?php 
session_start();
include 'header.php';
include 'connect.php';
include 'service/registration/service-registration.php';
?>


  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Data Registration
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-2 mb-3">
          <?php if($_SESSION['role']==1 ){
            echo '<a href="form/form-registration.php" class="btn btn-block btn-primary">Tambah</a>';
          } else {
            echo '';
          }
          ?>
        </div>
        <div class="col-xs-2 mb-3 pull-right">
          <a target="_blank" href="report/report-siswa.php" class="btn btn-block btn-primary">Print Data Siswa Aktif</a>
        </div>
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-body table-responsive">
              <table id="example2" class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kelas</th>
                    <th>No Telp</th>
                    <th>Orangtua</th>
                    <th>Program</th>
                    <th>Hari</th>
                    <th>Jam</th>
                    <th>Status Pembayaran</th>
                    <th>Status Account</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $return = "";
                  $id = "";
                  foreach($regist as $data => $value){
                    $no = $data + 1;
                      $id = $value['id_regis'];
                      $return .= '
                          <tr>
                              <td>'.$no.'</td>
                              <td>'.$value['nama_lengkap'].'</td>
                              <td>'.$value['alamat_lengkap'].'</td>
                              <td>'.$value['kelas'].'</td>
                              <td>'.$value['no_telp'].'</td>
                              <td>'.$value['nama_orangtua'].'</td>
                              <td>'.$value['11'].'</td>
                              <td>'.$value['12'].'</td>
                              <td>'.$value['nama'].'</td>
                              <td>'.$value['status_payment'].'</td>
                              <td>'.$value['status_account'].'</td>
                              <td>
                                  <div class="btn-action">
                                      <a href="#" class="btn-cstm btn btn-block btn-default" data-toggle="modal" data-target="#modal-default'.$value['id_regis'].'">
                                        <i class="fa fa-eye"></i>
                                      </a>
                                      <a href="form/form-registration.php?id='.$value['id_regis'].'" class="btn-cstm btn btn-block btn-warning">
                                          <i class="fa fa-edit"></i>
                                      </a>
                                      <a href="service/registration/delete-registration.php?id='.$value['id_regis'].'" class="btn-cstm btn btn-block btn-danger" '.($_SESSION['role']!=1 ? "disabled" : "").'>
                                          <i class="fa fa-trash"></i>
                                      </a>
                                      
                                  </div>
                              </td>
                          </tr>
                      ';
                      
                    include 'modal/modal-registration.php'; 
                  }
                  echo $return;

                  ?>
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
    </section>
  </div>
  
  <div class="control-sidebar-bg"></div>


<?php include 'footer.php'; ?>