<?php 
require '../header.php';
include '../connect.php';
include '../service/pengajar/service-pengajar.php';
define( 'SCRIPT_ROOT', 'http://localhost/KKP/dashboard/' );
?>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        
        Form Pengajar
      </h1>
    </section>

    <section class="content">
       
      <div class="box box-info">
        <?php 
          if (isset($_GET['id'])) {
            echo '<form class="form-horizontal" method="post" action="'.SCRIPT_ROOT.'service/pengajar/update-pengajar.php?id='.$id.'">';                    
          } else {
              echo '<form class="form-horizontal" method="post" action="'.SCRIPT_ROOT.'service/pengajar/create-pengajar.php">';                    
          }
        ?>

          <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Nama Lengkap</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="tutor_nama" name="tutor_nama" placeholder="Nama Lengkap" value="<?php echo $nama; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Alamat</label>
  
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="tutor_alamat" name="tutor_alamat" placeholder="Alamat" value="<?php echo $alamat; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">No Telp</label>
  
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="tutor_tlp" name="tutor_tlp" placeholder="No Telp" value="<?php echo $tlp; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Pendidikan Terakhir</label>
  
                  <div class="col-sm-8">
                    <select class="form-control" name="tutor_pendidikan">
                      <option <?php if($pendidikan=='Mahasiswa') echo 'selected' ?> value="Mahasiswa">Mahasiswa</option>
                      <option <?php if($pendidikan=='S1_B.Indo') echo 'selected' ?> value="S1_B.Indo">S1 Pend Bahasa Indonesia</option>
                      <option <?php if($pendidikan=='S1_Matematika') echo 'selected' ?> value="S1_Matematika">S1 Matematika</option>
                      <option <?php if($pendidikan=='S1_B.Inggris') echo 'selected' ?> value="S1_B.Inggris">S1 Pend Bahasa Inggris</option>
                      <option <?php if($pendidikan=='S1_Sosiologi') echo 'selected' ?> value="S1_Sosiologi">S1 Sosiologi</option>
                      <option <?php if($pendidikan=='S2_Manajemen_Pendidikan') echo 'selected' ?> value="S1_Manajemen_Pendidikan">S2 Manajemen Pendidikan</option>
                    </select>
                  </div>
                </div>
                
              </div>
              <div class="col-md-6">
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Mata Pelajaran</label>
  
                  <div class="col-sm-10">
                    <div class="col-sm-12">
                      <label> <input <?php if(strpos($bidang,'B.Indo_SD')!=false) echo 'checked'; ?> type="checkbox" value="B.Indo_SD" name="mapel[]"> B.Indonesia SD</label>
                      <label class="ml-3"> <input <?php if(strpos($bidang,'Matematika_SD')!=false) echo 'checked'; ?> type="checkbox" value="Matematika_SD" name="mapel[]"> Matematika SD</label>
                      <label class="ml-3"> <input <?php if(strpos($bidang,'IPA_SD')!=false) echo 'checked'; ?> type="checkbox" value="IPA_SD" name="mapel[]"> IPA SD</label>
                    </div>
                    <div class="col-sm-12">
                      <label> <input <?php if(strpos($bidang,'B.Indo_SMP')!=false) echo 'checked'; ?> type="checkbox" value="B.Indo_SMP" name="mapel[]"> B.Indonesia SMP</label>
                      <label class="ml-3"> <input <?php if(strpos($bidang,'Matematika_SMP')!=false) echo 'checked'; ?> type="checkbox" value="Matematika_SMP" name="mapel[]"> Matematika SMP</label>
                      <label class="ml-3"> <input <?php if(strpos($bidang,'IPA_SMP')!=false) echo 'checked'; ?> type="checkbox" value="IPA_SMP" name="mapel[]"> IPA SMP</label>
                    </div>
                    <div class="col-sm-12">
                      <label> <input <?php if(strpos($bidang,'B.Indo_SMA')!=false) echo 'checked'; ?> type="checkbox" value="B.Indo_SMA" name="mapel[]"> B.Indonesia SMA</label>
                      <label class="ml-3"> <input <?php if(strpos($bidang,'Matematika_SMA')!=false) echo 'checked'; ?> type="checkbox" value="Matematika_SMA" name="mapel[]"> Matematika SMA</label>
                      <label class="ml-3"> <input <?php if(strpos($bidang,'Fisika_SMA')!=false) echo 'checked'; ?> type="checkbox" value="Fisika_SMA" name="mapel[]"> Fisika SMA</label>
                    </div>
                    <div class="col-sm-12">
                      <label> <input <?php if(strpos($bidang,'Biologi')!=false) echo 'checked'; ?> type="checkbox" value="Biologi" name="mapel[]"> Biologi</label>
                      <label class="ml-3"> <input <?php if(strpos($bidang,'Sosiologi')!=false) echo 'checked'; ?> type="checkbox" value="Sosiologi" name="mapel[]"> Sosiologi</label>
                      <label class="ml-3"> <input <?php if(strpos($bidang,'Geografi')!=false) echo 'checked'; ?> type="checkbox" value="Geografi" name="mapel[]"> Geografi</label>
                      <label class="ml-3"> <input <?php if(strpos($bidang,'Sejarah')!=false) echo 'checked'; ?> type="checkbox" value="Sejarah" name="mapel[]"> Sejarah</label>
                    </div>
                  </div>
                </div>  

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">SK</label>
  
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="tutor_sk" name="tutor_sk" placeholder="SK" value="<?php echo $sk; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Status</label>
  
                  <div class="col-sm-10">
                    <select class="form-control" name="tutor_status">
                      <option <?php if($status=='Freelance') echo 'selected' ?> value="Freelance">Frelance</option>
                      <option <?php if($status=='Tetap') echo 'selected' ?> value="Tetap">Tetap</option>
                    </select>
                  </div>
                </div>

                
                
                
              </div>
            </div>
            

          </div>
        

          <div class="box-footer">
            <a href="<?= SCRIPT_ROOT ?>table-pengajar.php" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-info pull-right">Simpan</button>
          </div>

        </form>
      </div>

    </section>
  </div>
  
  <div class="control-sidebar-bg"></div>


<?php include '../footer.php'; ?>

