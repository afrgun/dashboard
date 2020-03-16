<?php 
session_start();
require '../header.php';
include '../connect.php';
include '../service/registration/service-registration.php';
define( 'SCRIPT_ROOT', 'http://localhost/KKP/dashboard/' );
?>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        
        Edit Registration
      </h1>
    </section>

    <section class="content">
       
      <div class="box box-info">
            <?php 
              $disabled = "";
              $dis_account = "";
              if (isset($_GET['id'])) {
                $disabled = "readonly";
                $dis_account = ($payment=="unpaid" || $_SESSION['role']!=1 ? "disabled" : "");
                echo '<form class="form-horizontal" method="post" action="'.SCRIPT_ROOT.'service/registration/update-registration.php?id='.$id.'">';                    
              } else {
                  echo '<form class="form-horizontal" method="post" action="'.SCRIPT_ROOT.'service/registration/create-registration.php">';                    
              }
            ?>
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" placeholder="Nama Lengkap" name='regis_name' id='regis_name' value="<?php echo $name;?>" <?php echo $disabled ?>>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Tanggal Lahir</label>
                    <div class="col-sm-8">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="datepicker" name='regis_ttl' id='regis_ttl' value="<?php echo $ttl; ?>" <?php echo $disabled ?>>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Agama</label>
    
                    <div class="col-sm-8">
                    <select class="form-control" name="regis_agama" id="regis_agama" <?php echo $disabled ?>>
                      <option <?php if($agama=='islam') echo 'selected' ?> value="islam">ISLAM</option>
                      <option <?php if($agama=='kristen') echo 'selected' ?> value="kristen">KRISTEN</option>
                      <option <?php if($agama=='budha') echo 'selected' ?> value="budha">BUDHA</option>
                      <option <?php if($agama=='hindu') echo 'selected' ?> value="hindu">HINDU</option>
                      <option <?php if($agama=='konghucu') echo 'selected' ?> value="konghucu">KONGHUCU</option>
                      <option <?php if($agama=='dll') echo 'selected' ?> value="dll">Dan Lain-Lain</option>
                    </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Alamat</label>
                    <div class="col-sm-8">
                      <textarea name='regis_alamat' id='regis_alamat' class="form-control" <?php echo $disabled ?>><?php echo $address;?></textarea>
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Kelas</label>
    
                    <div class="col-sm-8">
                      <select name="regis_kelas" id="regis_kelas" class="form-control" <?php echo $disabled ?>>
                        <option <?php if($kelas=='4') echo 'selected' ?> value="4">4</option>
                        <option <?php if($kelas=='5') echo 'selected' ?> value="5">5</option>
                        <option <?php if($kelas=='6') echo 'selected' ?> value="6">6</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Asal Sekolah</label>
    
                    <div class="col-sm-8">
                      <input type="text" class="form-control" placeholder="Asal Sekolah" name='regis_asal_sekolah' id='regis_asal_sekolah' value="<?php echo $sekolah;?>" <?php echo $disabled ?>>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">No Telp</label>
    
                    <div class="col-sm-8">
                      <input type="text" class="form-control" placeholder="No Telp" name='regis_phone' id='regis_phone' value="<?php echo $phone;?>" <?php if($_SESSION['role']==2) echo "readonly" ?>>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Email</label>
    
                    <div class="col-sm-8">
                      <input type="text" class="form-control" placeholder="Email" name='regis_email' id='regis_email' value="<?php echo $email;?>" <?php echo $disabled ?>>
                    </div>
                  </div>

                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Nama Orang Tua</label>
    
                    <div class="col-sm-8">
                      <input type="text" class="form-control" placeholder="Nama Orang Tua" name='regis_ortu' id='regis_ortu' value="<?php echo $ortu;?>" <?php echo $disabled ?>>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Prestasi</label>
    
                    <div class="col-sm-8">
                      <textarea name='regis_prestasi' id='regis_prestasi' class="form-control" <?php echo $disabled ?>><?php echo $prestasi;?></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Pilihan Program</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="regis_program" id="regis_program" <?php if($_SESSION['role']==2) echo "readonly" ?>>
                        <option <?php if($program=='1') echo 'selected' ?> value="1">Regular</option>
                        <option <?php if($program=='2') echo 'selected' ?> value="2">Private</option>
                        <option <?php if($program=='3') echo 'selected' ?> value="3">Intensive</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Hari</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="regis_hari" id="regis_hari" <?php if($_SESSION['role']==2) echo "readonly" ?>>
                        <option <?php if($hari=='1') echo 'selected' ?> value="1">Senin & Rabu</option>
                        <option <?php if($hari=='2') echo 'selected' ?> value="2">Selasa & Kamis</option>
                        <option <?php if($hari=='3') echo 'selected' ?> value="3">Rabu & Jumat</option>
                        <option <?php if($hari=='4') echo 'selected' ?> value="4">Senin,Rabu & Jumat</option>
                        <option <?php if($hari=='5') echo 'selected' ?> value="5">Selasa,Kamis & Jumat</option>
                        <option <?php if($hari=='6') echo 'selected' ?> value="6">Custom</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Jam</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="regis_jam" id="regis_jam" <?php if($_SESSION['role']==2) echo "readonly" ?>>
                        <option <?php if($jam=='1') echo 'selected' ?> value="1">08.00 - 09.30</option>
                        <option <?php if($jam=='2') echo 'selected' ?> value="2">09.30 - 11.00</option>
                        <option <?php if($jam=='3') echo 'selected' ?> value="3">13.30 - 15.00</option>
                        <option <?php if($jam=='4') echo 'selected' ?> value="4">15.00 - 16.30</option>
                        <option <?php if($jam=='5') echo 'selected' ?> value="5">16.30 - 18.00</option>
                        <option <?php if($jam=='6') echo 'selected' ?> value="6">18.30 - 20.00</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Sumber Informasi</label>
    
                    <div class="col-sm-8">
                      <select class="form-control" name="regis_sumber" id="regis_sumber" <?php echo $disabled ?>>
                        <option value="presentasi">Presentasi</option>
                        <option value="majalah">Majalah</option>
                        <option value="brosur">Brosur</option>
                        <option value="teman">Teman</option>
                        <option value="spanduk">Spanduk</option>
                        <option value="lainlain">Lain-Lain </option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Tanggal Daftar</label>
    
                    <div class="col-sm-8">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="tanggaldaftar" name="tanggal_daftar" value="<?php echo $date; ?>" <?php echo $disabled ?>>
                      </div>
                    </div>
                   
                  </div>

                  <?php 
                    if (isset($_GET['id'])) { ?>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-4 control-label">Status Pembayaran</label>
        
                        <div class="col-sm-8">
                          <select class="form-control" name="status_pembayaran"  <?php if($_SESSION['role']!=2) echo "disabled" ?>>
                            <option <?php if($payment=='unpaid') echo 'selected' ?> value="unpaid">Unpaid</option>
                            <option <?php if($payment=='paid') echo 'selected' ?> value="paid">Paid</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-4 control-label">Status Account</label>
        
                        <div class="col-sm-8">
                          <select class="form-control" name="status_account" <?php echo $dis_account; ?>>
                            <option <?php if($account=='active') echo 'selected' ?> value="active">Active</option>
                            <option <?php if($account=='non-active') echo 'selected' ?> value="non-active">Non-active</option>
                          </select>
                        </div>
                      </div>
                   <?php } ?>


                </div>
              </div>
              

            </div>

            <div class="box-footer">
              <a href="<?= SCRIPT_ROOT ?>table-registration.php" class="btn btn-default">Cancel</a>
              <button type="submit" class="btn btn-info pull-right">Simpan</button>
            </div>

          </form>
        </div>


    </section>
  </div>
  
  <div class="control-sidebar-bg"></div>


<?php include '../footer.php'; ?>
