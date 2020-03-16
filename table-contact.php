<?php 
include 'header.php';
include 'connect.php';
include 'service/contact/service-contact.php';
?>


  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Data Buku Tamu
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
                    <th>Nama Anak</th>
                    <th>Nama Orang Tua</th>
                    <th>Kelas</th>
                    <th>No Telp</th>
                    <th>Alamat</th>
                    <th>Pesan</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                    $return = "";
                    $id = "";
                    foreach($contact as $data => $value){
                      $no = $data + 1;
                        $id = $value['id_guest'];
                        $return .= '
                            <tr>
                                <td>'.$no.'</td>
                                <td>'.$value['nama'].'</td>
                                <td>'.$value['parent'].'</td>
                                <td>'.$value['grade'].'</td>
                                <td>'.$value['tlp'].'</td>
                                <td>'.$value['address'].'</td>
                                <td>'.$value['message'].'</td>
                                <td>'.$value['status'].'</td>
                                <td>
                                    <div class="btn-action">
                                        <a href="#" class="btn-cstm btn btn-block btn-default" data-toggle="modal" data-target="#modal-default'.$value['id_guest'].'">
                                          <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="form/form-contact.php?id='.$value['id_guest'].'" class="btn-cstm btn btn-block btn-warning">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="service/contact/delete-contact.php?id='.$value['id_guest'].'" class="btn-cstm btn btn-block btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        
                                    </div>
                                </td>
                            </tr>
                        ';
                        
                      include 'modal/modal-contact.php'; 
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




<?php include 'footer.php'; ?>