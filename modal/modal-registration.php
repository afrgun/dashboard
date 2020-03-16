<div class="modal fade" id="modal-default<?php echo $value['id_regis']; ?>">
    <div class="modal-dialog popup-detail-registration">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title"><h3 class="popup-title">Detail Registrasi</h3></h4>
        </div>
        <div class="modal-body">
          <div class="row form-horizontal">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Nama Lengkap</label>
                <div class="col-sm-8"><?php echo $value['nama_lengkap']; ?></div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Tempat Tanggal Lahir</label>
                <div class="col-sm-8"><?php echo $value['ttl']; ?></div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Agama</label>
                <div class="col-sm-8"><?php echo $value['agama']; ?></div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Alamat</label>
                <div class="col-sm-8"><?php echo $value['alamat_lengkap']; ?></div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Kelas</label>
                <div class="col-sm-8"><?php echo $value['kelas']; ?></div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Asal Sekolah</label>
                <div class="col-sm-8"><?php echo $value['asal_sekolah']; ?></div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">No Handphone</label>
                <div class="col-sm-8"><?php echo $value['no_telp']; ?></div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Nama Orang Tua</label>
                <div class="col-sm-8"><?php echo $value['nama_orangtua']; ?></div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
                <div class="col-sm-8"><?php echo $value['email']; ?></div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Prestasi</label>
                <div class="col-sm-8"><?php echo $value['prestasi']; ?></div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Pilihan Program</label>
                <div class="col-sm-8"><?php echo $value['11']; ?></div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Hari</label>
                <div class="col-sm-8"><?php echo $value['12']; ?></div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Jam</label>
                <div class="col-sm-8"><?php echo $value['nama']; ?></div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Info Sumber</label>
                <div class="col-sm-8"><?php echo $value['sumber']; ?></div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Tanggal Daftar</label>
                <div class="col-sm-8"><?php echo date("D, d M Y g:i", strtotime($value['tanggal_daftar'])) ?></div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Status Akun</label>
                <div class="col-sm-8"><?php echo $value['status_account']; ?></div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Status Pembayaran</label>
                <div class="col-sm-8"><?php echo $value['status_payment']; ?></div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>