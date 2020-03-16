<div class="modal fade" id="modal-default<?php echo $value['id_tutor']; ?>">
  <div class="modal-dialog popup-detail-registration">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><h3 class="popup-title">Detail Pengajar</h3></h4>
      </div>
      <div class="modal-body">
        <div class="row form-horizontal">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label">Nama Lengkap</label>
              <div class="col-sm-8">
              <?php 
                echo $value['nama'];
              ?>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label">Alamat</label>
              <div class="col-sm-8">
              <?php 
                echo $value['alamat'];
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
              <label for="inputEmail3" class="col-sm-4 control-label">Mata Pelajaran</label>
              <div class="col-sm-8">
              <?php 
                echo str_replace('_', ' ', $value['bidang']);
              ?>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label">Pendidikan</label>
              <div class="col-sm-8">
              <?php 
                echo str_replace('_', ' ', $value['pendidikan']);
              ?>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label">Status</label>
              <div class="col-sm-8">
              <?php 
                echo $value['status'];
              ?>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label">SK</label>
              <div class="col-sm-8">
              <?php 
                echo $value['sk'];
              ?>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>