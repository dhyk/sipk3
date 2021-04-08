<body class="fixed-left">
    <!-- Begin page -->
    <div id="wrapper">
        <div class="content-page">
            <!-- Start content -->
            <br>
            <div class="content">
                <div class="container">
                 <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-30">K3 Mekanik</h4>
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#9" data-toggle="tab" aria-expanded="true">
                                        <span class="visible-xs"><i class="fa fa-home"></i></span>
                                        <span class="hidden-xs">Daftar bejana bertekanan </span> <br>
                                        <span class="hidden-xs">& tangki Timbun</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#11" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs"><i class="fa fa-user"></i></span>
                                        <span class="hidden-xs">Daftar ketel </span> <br>
                                        <span class="hidden-xs">uap </span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#12" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                                        <span class="hidden-xs">Daftar Mesin  </span> <br>
                                        <span class="hidden-xs">Tenaga & Produksi </span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#13" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                        <span class="hidden-xs">Daftar alat </span> <br>
                                        <span class="hidden-xs">angkat & angkut</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#14" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                        <span class="hidden-xs">Daftar elevator</span> <br>
                                        <span class="hidden-xs"> & eskalator</span>
                                    </a>
                                </li>

                                <li class="">
                                    <a href="#15" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                        <span class="hidden-xs">Daftar  </span> <br>
                                        <span class="hidden-xs">alat ukur</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="9">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card-box table-responsive">
                                                <h4 class="m-t-0 header-title"><b>Daftar bejana bertekanan & tangki Timbun</b></h4> 
                                                <div class="table-responsive">
                                                    <table class="table m-0">
                                                       <a href="<?=site_url ()?>K3mekanik/tambah_bejana">
                                                        <button class="btn btn-info">Tambah Data</button></a> 
                                                        <thead>
                                                           <tr>
                                                            <th>#</th> 
                                                            <th>Kode/Nomer Aset</th>
                                                            <th>Fungsi</th>
                                                            <th>No. Sertifikat/Kelayakan</th>
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
                                                        foreach($data_bejana as $key){ ?>
                                                       <tr>
                                                        <th scope="row"><?php echo $i; ?></th>
                                                        <td><?php echo $key->nomor; ?></td>
                                                        <td><?php echo $key->fungsi; ?></td>
                                                        <td><?php echo $key->sertifikat; ?></td>
                                                        <td><?php echo $key->tanggal; ?></td>
                                                        <td><?php echo $key->masa; ?></td>
                                                        <td><?php echo $key->tanggal_rekam; ?></td>
                                                        <td><a target="_blank" href="<?php echo base_url()."upload/upload_berkas_mekanik".$key->file; ?>">Lihat Laporan</a></td>
                                                        <td>
                                            
                                                            <a href="<?php echo base_url().'index.php/K3mekanik/hapus_bejana?id='.$key->id_bejana;?>"><i class="ion-trash-a"></i>Hapus</a>
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

                        <div class="tab-pane" id="11">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                       <h4 class="m-t-0 header-title"><b>Daftar Ketel Uap</b></h4> 
                                       <div class="table-responsive">
                                           <table class="table m-0">
                                            <a href="<?=site_url ()?>K3mekanik/tambah_ketel_uap">
                                               <button class="btn btn-info">Tambah Data</button></a> 
                                               <thead>
                                                <tr>
                                                   <th>#</th>
                                                   <th>Kode/Nomer Aset</th>
                                                   <th>Jenis</th>
                                                   <th>Kapasitas</th>
                                                   <th>No. Sertifikat/Kelayakan</th>
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
                                               foreach($data_ketel as $key){ ?>
                                               <tr>
                                                   <th scope="row"><?php echo $i; ?></th>
                                                   <td><?php echo $key->nomor; ?></td>
                                                   <td><?php echo $key->jenis; ?></td>
                                                   <td><?php echo $key->kapasitas; ?></td>
                                                   <td><?php echo $key->sertifikat; ?></td>
                                                   <td><?php echo $key->tanggal; ?></td>
                                                   <td><?php echo $key->masa; ?></td>
                                                   <td><?php echo $key->tanggal_rekam; ?></td>
                                                   <td><a target="_blank" href="<?php echo base_url()."upload/upload_berkas_mekanik".$key->file; ?>">Lihat Laporan</a></td>
                                                   <td>
                                    
                                                       <a href="<?php echo base_url().'index.php/K3mekanik/hapus_ketel?id='.$key->id_ketel;?>"><i class="ion-trash-a"></i>Hapus</a>
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

                   <div class="tab-pane" id="12">
                    <div class="row">
                       <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Daftar Mesin Tenaga & Produksi</b></h4> 
                            <div class="table-responsive">
                                <table class="table m-0">
                                 <a href="<?=site_url ()?>K3mekanik/tambah_mesin">    
                                     <button class="btn btn-info">Tambah Data</button></a> 
                                     <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Kode/Nomer Aset</th>
                                            <th>Nama</th>
                                            <th>Fungsi</th>
                                            <th>No. Sertifikat/Kelayakan</th>
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
                                                          foreach($data_mesin as $key){ ?>
                                                          <tr>
                                                              <th scope="row"><?php echo $i; ?></th>
                                                              <td><?php echo $key->nomor; ?></td>
                                                              <td><?php echo $key->nama; ?></td>
                                                              <td><?php echo $key->fungsi; ?></td>
                                                              <td><?php echo $key->sertifikat; ?></td>
                                                              <td><?php echo $key->tanggal; ?></td>
                                                              <td><?php echo $key->masa; ?></td>
                                                              <td><?php echo $key->tanggal_rekam; ?></td>
                                                              <td><a target="_blank" href="<?php echo base_url()."upload/upload_berkas_mekanik".$key->file; ?>">Lihat Laporan</a></td>
                                                              <td>
                                               
                                                                  <a href="<?php echo base_url().'index.php/K3mekanik/hapus_mesin?id='.$key->id_mesin;?>"><i class="ion-trash-a"></i>Hapus</a>
                                                              </td>
                                                             
                                                          </tr>
                                                          <?php $i++;
                                                                        } ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="13">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b> Daftar alat angkat & angkut</b></h4> 

                            <div class="table-responsive">
                                <table class="table m-0">
                                    <a href="<?=site_url ()?>K3mekanik/tambah_alat_angkat">
                                        <button class="btn btn-info">Tambah Data</button></a> 
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Kode/Nomer Aset</th>
                                                <th>Jenis</th>
                                                <th>Kapasitas</th>
                                                <th>No. Sertifikat/Kelayakan</th>
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
                                                          foreach($data_alat_angkat as $key){ ?>
                                                          <tr>
                                                              <th scope="row"><?php echo $i; ?></th>
                                                              <td><?php echo $key->nomor; ?></td>
                                                              <td><?php echo $key->jenis; ?></td>
                                                              <td><?php echo $key->kapasitas; ?></td>
                                                              <td><?php echo $key->sertifikat; ?></td>
                                                              <td><?php echo $key->tanggal; ?></td>
                                                              <td><?php echo $key->masa; ?></td>
                                                              <td><?php echo $key->tanggal_rekam; ?></td>
                                                              <td><a target="_blank" href="<?php echo base_url()."upload/upload_berkas_mekanik".$key->file; ?>">Lihat Laporan</a></td>
                                                              <td>
                                               
                                                                  <a href="<?php echo base_url().'index.php/K3mekanik/hapus_angkat?id='.$key->id_angkat;?>"><i class="ion-trash-a"></i>Hapus</a>
                                                              </td>
                                                             
                                                          </tr>
                                                          <?php $i++;
                                                                        } ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="14">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <h4 class="m-t-0 header-title"><b>Daftar elevator & eskalator</b></h4> 

                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <a href="<?=site_url ()?>K3mekanik/tambah_elevator_eskalator">
                                            <button class="btn btn-info">Tambah Data</button></a> 
                                            <thead>
                                                <tr>
                                                 <th>#</th>
                                                 <th>Kode/Nomer Aset</th>
                                                 <th>Jenis</th>
                                                 <th>Kapasitas</th>
                                                 <th>No. Sertifikat/Kelayakan</th>
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
                                                          foreach($data_elevator as $key){ ?>
                                                          <tr>
                                                              <th scope="row"><?php echo $i; ?></th>
                                                              <td><?php echo $key->nomor; ?></td>
                                                              <td><?php echo $key->jenis; ?></td>
                                                              <td><?php echo $key->kapasitas; ?></td>
                                                              <td><?php echo $key->sertifikat; ?></td>
                                                              <td><?php echo $key->tanggal; ?></td>
                                                              <td><?php echo $key->masa; ?></td>
                                                              <td><?php echo $key->tanggal_rekam; ?></td>
                                                              <td><a target="_blank" href="<?php echo base_url()."upload/upload_berkas_mekanik".$key->file; ?>">Lihat Laporan</a></td>
                                                              <td>
                                               
                                                                  <a href="<?php echo base_url().'index.php/K3mekanik/hapus_elevator?id='.$key->id_mesin;?>"><i class="ion-trash-a"></i>Hapus</a>
                                                              </td>
                                                             
                                                          </tr>
                                                          <?php $i++;
                                                                        } ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="15">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <h4 class="m-t-0 header-title"><b>Daftar Alat Ukur</b></h4> 

                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <a href="<?=site_url ()?>K3mekanik/tambah_alat_ukur">
                                            <button class="btn btn-info">Tambah Data</button></a> 
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
                                                              <td><a target="_blank" href="<?php echo base_url()."upload/upload_berkas_mekanik".$key->file; ?>">Lihat Laporan</a></td>
                                                              <td>
                                               
                                                                  <a href="<?php echo base_url().'index.php/K3mekanik/hapus_ukur?id='.$key->id_ukur;?>"><i class="ion-trash-a"></i>Hapus</a>
                                                              </td>
                                                             
                                                          </tr>
                                                          <?php $i++;
                                                                        } ?>
                                            </tr>
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
</div>
</body>                       
