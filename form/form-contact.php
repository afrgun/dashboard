<?php 
require '../header.php';
include '../connect.php';
include '../service/contact/service-contact.php';
define( 'SCRIPT_ROOT', 'http://localhost/KKP/dashboard/' );
?>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        
        Edit Contact
      </h1>
    </section>

    <section class="content">
       
      <div class="box box-info">
            <?php 
              if (isset($_GET['id'])) {
                echo '<form class="form-horizontal" method="post" action="'.SCRIPT_ROOT.'service/contact/update-contact.php?id='.$id.'">';                    
              } else {
                  echo '<form class="form-horizontal" method="post" action="#">';                    
              }
            ?>
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Lengkap" value="<?php echo $namalengkap;?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Nama Orang Tua</label>
    
                    <div class="col-sm-8">
                        <input type="nama" class="form-control" id="inputEmail3" placeholder="Nama Orang Tua" value="<?php echo $namaorangtua;?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Kelas</label>
                    <div class="col-sm-8">
                      <input type="nama" class="form-control" id="inputEmail3" placeholder="Kelas" value="<?php echo $kelas;?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">No Tlp</label>
    
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="No Telp" value="<?php echo $tlp;?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Alamat</label>
    
                    <div class="col-sm-8">
                      <input type="nama" class="form-control" id="inputEmail3" placeholder="Alamat" value="<?php echo $alamat;?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Message</label>
    
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Message" value="<?php echo $message;?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Status</label>
    
                    <div class="col-sm-8">
                      <select class="form-control" name="status">
                        <option <?php if($status=='active') echo 'selected' ?> value="active">Active</option>
                        <option <?php if($status=='non-active') echo 'selected' ?> value="non-active">Non-active</option>
                      </select>
                    </div>
                  </div>
                  
                </div>
                <div class="col-md-6">
                  
                </div>
              </div>
              

            </div>

            <div class="box-footer">
              <a href="<?= SCRIPT_ROOT ?>table-contact.php" class="btn btn-default">Cancel</a>
              <button type="submit" class="btn btn-info pull-right">Simpan</button>
            </div>

          </form>
        </div>

    </section>
  </div>
  
  <div class="control-sidebar-bg"></div>


<?php include '../footer.php'; ?>
