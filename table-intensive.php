<?php 
include 'header.php';
include 'connect.php';
include 'service/siswa/service-siswa.php';
?>


  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Data Siswa Intensive
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-body table-responsive">
              <table id="example2" class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Jadwal</th>
                    <th>Jam</th>
                    <th>Asal Sekolah</th>
                    <th>Password</th>
                    <th>Kehadiran</th>
                    <th>Sakit</th>
                    <th>Alpha</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                    $return = "";
                    $id = "";
                    foreach($siswaInt as $data => $value){
                      $no = $data + 1;
                        $id = $value['id_siswa'];
                        $dataHadir = get_count_hadir($conn, $id);
                        $dataSakit = get_count_sakit($conn, $id);
                        $dataAlpha = get_count_alpha($conn, $id);
                        $return .= '
                            <tr>
                              <td>'.$no.'</td>
                              <td>'.$value['nama_lengkap'].'</td>
                              <td>'.$value['kelas'].'</td>
                              <td>'.$value['4'].'</td>
                              <td>'.$value['nama'].'</td>
                              <td>'.$value['asal_sekolah'].'</td>
                              <td>'.$value['password'].'</td>';
                              
                              if (empty($dataHadir)) {
                                $return .='<td>-</td>';
                              } else {
                                foreach($dataHadir as $post => $val){
                                  $return .='<td>'.$val['jumlah'].'</td>';
                                }
                              }

                              if (empty($dataSakit)) {
                                $return .='<td>-</td>';
                              } else {
                                foreach($dataSakit as $post => $val){
                                  $return .='<td>'.$val['jumlah'].'</td>';
                                }
                              }

                              if (empty($dataAlpha)) {
                                $return .='<td>-</td>';
                              } else {
                                foreach($dataAlpha as $post => $val){
                                  $return .='<td>'.$val['jumlah'].'</td>';
                                }
                              }
                        
                        $return .='
                            <td>
                                <div class="btn-action">
                                  <a href="#" class="btn-cstm btn btn-block btn-default" data-toggle="modal" data-target="#modal-default'.$value['id_siswa'].'">
                                    <i class="fa fa-eye"></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                        ';
                        
                      include 'modal/modal-siswa.php'; 
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