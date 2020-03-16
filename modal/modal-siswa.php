<div class="modal fade" id="modal-default<?php echo $value['id_siswa']; ?>">
  <div class="modal-dialog popup-detail-registration">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><h3 class="popup-title">Detail Siswa</h3></h4>
      </div>
      <div class="modal-body">
        <div class="row form-horizontal">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label">Nama Lengkap</label>
              <div class="col-sm-8">
              <?php 
                echo $value['nama_lengkap'];
              ?>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label">Nama Orang Tua</label>
              <div class="col-sm-8">
              <?php 
                echo $value['nama_orangtua'];
              ?>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label">No Telp</label>
              <div class="col-sm-8">
              <?php 
                echo $value['no_telp'];
              ?>
              </div>
            </div>

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label">Jadwal</label>
              <div class="col-sm-8">
              <?php 
                echo $value['3'];
              ?>
              </div>
            </div>

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label">Jam</label>
              <div class="col-sm-8">
              <?php 
                echo $value['nama'];
              ?>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label">Kelas</label>
              <div class="col-sm-8">
              <?php 
                echo $value['kelas'];
              ?>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label">Alamat</label>
              <div class="col-sm-8">
              <?php 
                echo $value['alamat_lengkap'];
              ?>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>