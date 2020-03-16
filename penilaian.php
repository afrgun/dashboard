<?php 
session_start();
require 'header.php';
include 'connect.php';
include 'service/pengajar/service-pengajar.php';
include 'service/mapel/service-mapel.php';
define( 'SCRIPT_ROOT', 'http://localhost/KKP/dashboard/' );
?>

<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Penilaian Siswa Harian
        <div class="col-xs-3 mb-3 pull-right">
          <a target="_blank" href="report/report-nilai-harian.php" class="btn btn-block btn-primary">Print Data Nilai Harian</a>
        </div>
      </h1>

    </section>

    <section class="content">
    
        <div class="box box-info">
            <div class="box-body">
              <div class="row">
                <form id="getdatafornilai_form" class="form-horizontal" method="post" action="<?php SCRIPT_ROOT ?>service/penilaian/searchdata.php">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Kelas</label>
      
                      <div class="col-sm-10">
                        <select id="kelas" class="form-control" name="kelas">
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Tanggal</label>
                      <div class="col-sm-10">
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right" id="datepicker" name="tanggal">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Mata Pelajaran</label>
      
                      <div class="col-sm-10">
                        <select id="mapel" class="form-control" name="mapel">
                          <?php 
                            foreach ($mapel as $row):
                              echo '<option value='.$row['id_mapel'].'>'.$row['nama'].'</option>';
                            endforeach;
                            ?>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Nama Pengajar</label>
        
                        <div class="col-sm-10">
                          <select id="pengajar" class="form-control" name="pengajar">
                          <?php 
                            foreach ($pengajar as $row):
                              echo '<option value='.$row['id_tutor'].'>'.$row['nama'].'</option>';
                            endforeach;
                            ?>
                          </select>
                        </div>
                      </div>
                    
                  </div>
                  <div class="col-md-6">
                    
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Pilihan Program</label>
      
                      <div class="col-sm-10">
                        <select id="program" class="form-control" name="program">
                          <option value="1">Regular</option>
                          <option value="2">Private</option>
                          <option value="3">Intensive UN</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Hari</label>
      
                      <div class="col-sm-10">
                        <select id="hari" class="form-control" name="hari">
                          <option value="1">Senin & Rabu</option>
                          <option value="2">Selasa & Kamis</option>
                          <option value="3">Rabu & Jumat</option>
                          <option value="4">Senin,Rabu & Jumat</option>
                          <option value="5">Selasa,Kamis & Jumat</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Jam</label>
      
                      <div class="col-sm-10">
                        <select id="jam" class="form-control" name="jam">
                          <option value="1">08.00 - 09.30</option>
                          <option value="2">09.30 - 11.00</option>
                          <option value="3">13.30 - 15.00</option>
                          <option value="4">15.00 - 16.30</option>
                          <option value="5">16.30 - 18.00</option>
                          <option value="6">18.30 - 20.00</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Materi</label>
      
                      <div class="col-sm-10">
                        <input type="text" id="materi" name="materi" class="form-control col-sm-12"/>
                      </div>
                    </div>
                    
                  </div>
                  <div class="col-md-12">
                    <input id="getDataForNilai" type="submit" class="btn btn-info pull-right" value="Cari Data">
                  </div>
                </form>
                <form method="post" action="<?php SCRIPT_ROOT ?>service/penilaian/submit_penilaian.php">
     
                  <div class="col-md-12 table-absensi-siswa">

                    <table id="tablePenilaian" class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No ID</th>
                          <th>Nama Anak</th>
                          <th>Sikap</th>
                          <th>Materi yang perlu ditingkatkan</th>
                          <th>Nilai</th>
                        </tr>
                      </thead>
                    </table>
             
                  
                  </div>
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info pull-right">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
        </div>
    </section>
  </div>
  
  <div class="control-sidebar-bg"></div>



<?php include 'footer.php'; ?>
