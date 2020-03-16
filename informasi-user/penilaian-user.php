<?php 
session_start();
require '../header.php';
include '../connect.php';
include '../service/penilaian/service-penilaian.php';
define( 'SCRIPT_ROOT', 'http://localhost/KKP/dashboard/' );
?>


  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Data Penilaian
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
                    <th>Tanggal</th>
                    <th>Mata Pelajaran</th>
                    <th>Sikap</th>
                    <th>Materi</th>
                    <th>Materi yang perlu ditingkatkan</th>
                    <th>Nilai</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                    foreach($data as $key => $value){
                      $no = $key + 1;
                      $return .= '
                        <tr>
                            <td>'.$no.'</td>
                            <td>'.$value['tanggal'].'</td>
                            <td>'.$value['nama'].'</td>';
                      $return .= ($value['sikap']=="NULL") ? '<td> - </td>' : '<td>'.$value['sikap'].'</td>';
                      $return .= ($value['materi']=="NULL") ? '<td> - </td>' : '<td>'.$value['materi'].'</td>';
                      $return .= ($value['penekanan_materi']=="NULL") ? '<td> - </td>' : '<td>'.$value['penekanan_materi'].'</td>';
                      $return .= ($value['nilai']=="NULL") ? '<td> - </td>' : '<td>'.$value['nilai'].'</td>';
                      $return .='</tr>';
                        
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

<?php include '../footer.php'; ?>