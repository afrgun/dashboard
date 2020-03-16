<?php 
include 'header.php';
include 'connect.php';
include 'service/pengajar/service-pengajar.php';
?>


  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Data Pengajar
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-2 mb-3">
          <a href="form/form-pengajar.php" class="btn btn-block btn-primary">Tambah Pengajar</a>
        </div>
        <div class="col-xs-2 mb-3 pull-right">
          <a target="_blank" href="report/report-pengajar.php" class="btn btn-block btn-primary">Print Data Pengajar</a>
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
                    <th>No telp</th>
                    <th>Pendidikan</th>
                    <th>Mata Pelajaran</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                    $return = "";
                    $id = "";
                    foreach($pengajar as $data => $value){
                      $no = $data + 1;
                        $id = $value['id_tutor'];
                        $return .= '
                            <tr>
                              <td>'.$no.'</td>
                              <td>'.$value['nama'].'</td>
                              <td>'.$value['alamat'].'</td>
                              <td>'.$value['no_telp'].'</td>
                              <td>'.str_replace('_', ' ', $value['pendidikan']).'</td>
                              <td>'.str_replace('_', ' ', $value['bidang']).'</td>
                              <td>'.$value['status'].'</td>
                              <td>
                                <div class="btn-action">
                                  <a href="#" class="btn-cstm btn btn-block btn-default" data-toggle="modal" data-target="#modal-default'.$value['id_tutor'].'">
                                    <i class="fa fa-eye"></i>
                                  </a>
                                  <a href="form/form-pengajar.php?id='.$value['id_tutor'].'" class="btn-cstm btn btn-block btn-warning">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <a href="service/pengajar/delete-pengajar.php?id='.$value['id_tutor'].'" class="btn-cstm btn btn-block btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </a>
                                  
                                </div>
                              </td>
                            </tr>
                        ';
                        
                      include 'modal/modal-pengajar.php'; 
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