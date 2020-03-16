<?php 
session_start();
require '../header.php';
include '../connect.php';
include '../service/siswa/service-dataprofile.php';
include '../service/penilaian/service-uts.php';
define( 'SCRIPT_ROOT', 'http://localhost/KKP/dashboard/' );

?>


  <div class="content-wrapper">

    <section class="content">
      <div class="row flex-center">
        <div class="col-xs-11">
          
          <div class="box box-primary">
            <div class="box-body box-profile user-custom">

            <h3 class="text-center">LAPORAN REKAPITULASI KBM SISWA TENGAH SEMESTER</h3>
            <br/><br/>
              
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Nama Lengkap</th>
                      <th>Alamat Lengkap</th>
                      <th>No Telp</th>
                      <th>Kelas</th>
                      <th>Program</th>
                      <th>Hari</th>
                      <th>Jam</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php 
                    foreach($dataProfile as $key => $value){
                      $return .= '<td>'.$value['nama_lengkap'].'</td>';
                      $return .= '<td>'.$value['alamat_lengkap'].'</td>';
                      $return .= '<td>'.$value['no_telp'].'</td>';
                      $return .= '<td>'.$value['kelas'].'</td>';
                      $return .= '<td>'.$value['nama'].'</td>';
                      $return .= '<td>'.$value['5'].'</td>';
                      $return .= '<td>'.$value['6'].'</td>';
                    }

                    echo $return;
                  ?>
                    </tr>
                  </tbody>
                </table>
                <br/><br/>
                
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Tutor</th>
                      <th>Mata Pelajaran</th>
                      <th>Materi</th>
                      <th>Kehadiran</th>
                      <th>Nilai</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    foreach($data as $key => $value){
                      $returnuts .= '<tr>';
                      $returnuts .= '<td>'.$value['0'].'</td>';
                      $returnuts .= '<td>'.$value['nama'].'</td>';
                      $returnuts .= '<td>'.$value['materi'].'</td>';
                      $returnuts .= ($value['materi']!=NULL ? '<td>Hadir</td>' : '<td>-</td>');
                      $returnuts .= '<td>'.$value['nilai'].'</td>';
                      $returnuts .= '<td>'.$value['keterangan'].'</td>';
                      $returnuts .= '</tr>';
                    }

                    echo $returnuts;
                  ?>
                  </tbody>
                </table>
                <br/><br/>            

              <a target="_blank" href="../report/report-siswa-uts.php" class="btn btn-primary btn-block"><b>Print</b></a>
            </div>
            <!-- /.box-body -->
          </div>

        </div>
      </div>
    </section>
  </div>
  
  <div class="control-sidebar-bg"></div>

<?php include '../footer.php'; ?>