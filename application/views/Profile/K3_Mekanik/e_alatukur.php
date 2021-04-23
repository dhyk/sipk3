<body class="fixed-left">
    <div id="wrapper">
        <div class="content-page">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <br />
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Daftar Alat Ukur<span class="help-block"><small>*Pastikan Data yang anda masukkan benar</small></span></h4>
                                <div class="card-box table-responsive">
                                    <div class="table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <!-- <a href="<?=site_url ()?>K3mekanik/tambah_alat_ukur">
                                            <button class="btn btn-info">Tambah Data</button></a>  -->
                                            <thead>
                                                <tr>
                                                   <th>#</th>
                                                   <th>Kode/Nomor Aset</th>
                                                   <th>Jenis</th>
                                                   <th>No. Sertifikat Kalibrasi</th>
                                                   <th>Tanggal Terbit</th>
                                                   <th>Masa Berlaku</th>
                                                   <th>Tanggal Rekaman</th>
                                                   <th>File Laporan</th>
                                                   <th>Aksi</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                           <?php 
                                                        
                                                        $i=1;
                                                          foreach($data_ukur as $key){ ?>
                                                          <tr>
                                                              <th scope="row"><?php echo $i; ?></th>
                                                              <td><?php echo $key->nomor; ?></td>
                                                              <td><?php echo $key->jenis; ?></td>
                                                              <td><?php echo $key->sertifikat; ?></td>
                                                              <td><?php echo $key->tanggal; ?></td>
                                                              <td><?php echo $key->masa; ?></td>
                                                              <td><?php echo $key->tanggal_rekam; ?></td>
                                                              <td><a target="_blank" href="<?php echo base_url()."upload/upload_berkas_mekanik/".$key->file; ?>">Lihat Laporan</a></td>
                                                              <td>
                                               
                                                                  <a href="<?php echo base_url().'index.php/K3mekanik/hapus_ukur?id='.$key->id_ukur;?>"><i class="ion-trash-a"></i>Hapus</a>
                                                              </td>
                                                             
                                                          </tr>
                                                          <?php $i++;
                                                                        } ?>
                                         
                                        </tbody>
                                    </table>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>