<?php 
session_start();
require '../header.php';
include '../connect.php';
include '../service/absensi/service-absensi.php';
define( 'SCRIPT_ROOT', 'http://localhost/KKP/dashboard/' );
?>


  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Data Absensi
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
                    <th>Kehadiran</th>
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
                            if($value['status_kehadiran']=='hadir'){
                              $return .= '<td class="green">'.$value['status_kehadiran'].'</td>';
                            } else if($value['status_kehadiran']=='sakit'){
                              $return .= '<td class="yellow">'.$value['status_kehadiran'].'</td>';
                            } else {
                              $return .= '<td class="red">'.$value['status_kehadiran'].'</td>';
                            }
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