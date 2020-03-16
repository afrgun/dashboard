<div class="modal fade" id="modal-default<?php echo $value['id_guest']; ?>">
  <div class="modal-dialog popup-detail-registration">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><h3 class="popup-title">Detail Buku Tamu</h3></h4>
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
              <label for="inputEmail3" class="col-sm-4 control-label">Nama Orang Tua</label>
              <div class="col-sm-8">
              <?php 
                echo $value['parent'];
              ?>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label">Kelas</label>
              <div class="col-sm-8">
              <?php 
                echo $value['grade'];
              ?>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label">No Telp</label>
              <div class="col-sm-8">
              <?php 
                echo $value['tlp'];
              ?>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label">Alamat</label>
              <div class="col-sm-8">
              <?php 
                echo $value['address'];
              ?>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label">Message</label>
              <div class="col-sm-8">
              <?php 
                echo $value['message'];
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
        </div>
      </div>
    </div>
  </div>
</div>