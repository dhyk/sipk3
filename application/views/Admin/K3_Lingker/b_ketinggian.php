<body class="fixed-left">
    <div id="wrapper">
        <div class="content-page">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <br />
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Daftar tenaga kerja di ketinggian<span class="help-block"><small>*Pastikan Data yang anda masukkan benar</small></span></h4>
                                <div class="card-box table-responsive">
                                    <div class="table-responsive">
                                       
                                    <table class="table m-0">
                                            <a href="<?=site_url ()?>K3lingker/tambah_tenaga_kerja">
                                               <button class="btn btn-info">Tambah Data</button></a> 
                                               <thead>
                                                <tr>
                                                <th>#</th> 
                                                <th>Nama Petugas</th>
                                                <th>Kompetensi & Kewenangan</th>
                                                <th>No. Sertifikat</th>
                                                <th>Tanggal Terbit</th>
                                                <th>Masa Berlaku</th>       
                                                <th>Aksi</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                           <?php 
                                                        
                                                        $i=1;
                                                          foreach($data_ketinggian as $key){ ?>
                                                          <tr>
                                                              <th scope="row"><?php echo $i; ?></th>
                                                              <td><?php echo $key->nama; ?></td>
                                                              <td><?php echo $key->kompentensi; ?></td>
                                                              <td><?php echo $key->sertifikat; ?></td>
                                                              <td><?php echo $key->tanggal_terbit; ?></td>
                                                              <td><?php echo $key->masa_berlaku; ?></td>
                                                              <td>
                                                                  <a href="<?php echo base_url().'index.php/K3lingker/hapus_ketinggian?id='.$key->id_ketinggian;?>"><i class="ion-trash-a"></i>Hapus</a>
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