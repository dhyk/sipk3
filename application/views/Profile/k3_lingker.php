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
                            <h4 class="header-title m-t-0 m-b-30">K3 Lingker</h4>
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#9" data-toggle="tab" aria-expanded="true">
                                        <span class="visible-xs"><i class="fa fa-home"></i></span>
                                        <span class="hidden-xs">Daftar juru las </span> <br>
                                        
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#11" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs"><i class="fa fa-user"></i></span>
                                        <span class="hidden-xs">Daftar tenaga kerja </span> <br>
                                        <span class="hidden-xs"> di ketinggian </span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#12" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                                        <span class="hidden-xs">Daftar  tenaga kerja   </span> <br>
                                        <span class="hidden-xs">di ruang terbatas </span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#13" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                        <span class="hidden-xs">Daftar ahli K3  </span> <br>
                                        <span class="hidden-xs">lingkungan kerja</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#14" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                        <span class="hidden-xs">Rekaman pengukuran & </span> <br>
                                        <span class="hidden-xs"> pengendalian lingkungan kerja</span>
                                    </a>
                                </li>

                                <li class="">
                                    <a href="#15" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                        <span class="hidden-xs"> Rekaman penerapan   </span> <br>
                                        <span class="hidden-xs">higiene & sanitasi</span>
                                    </a>
                                </li>

                                <li class="">
                                    <a href="#16" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                        <span class="hidden-xs"> Rekaman pemeriksaan    </span> <br>
                                        <span class="hidden-xs">dan/atau pengujian</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="9">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card-box table-responsive">
                                                <h4 class="m-t-0 header-title"><b>Daftar Juru Las</b></h4> 
                                                <div class="table-responsive">
                                                    <table class="table m-0">
                                                       <a href="<?=site_url ()?>K3lingker/tambah_juru_las">
                                                        <button class="btn btn-info">Tambah Data</button></a> 
                                                        <thead>
                                                           <tr>
                                                            <th>#</th> 
                                                            <th>Nama Juru Las</th>
                                                            <th>Klasifikasi Juru Las</th>
                                                            <th>No. Sertifikat</th>
                                                            <th>Tanggal Terbit</th>
                                                            <th>Masa Berlaku</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>    
                                                    <tbody>
                                                    <?php 
                                                        
                                                        $i=1;
                                                          foreach($data_juru as $key){ ?>
                                                          <tr>
                                                              <th scope="row"><?php echo $i; ?></th>
                                                              <td><?php echo $key->nama; ?></td>
                                                              <td><?php echo $key->klasifikasi; ?></td>
                                                              <td><?php echo $key->sertifikat; ?></td>
                                                              <td><?php echo $key->tanggal_terbit; ?></td>
                                                              <td><?php echo $key->masa_berlaku; ?></td>
                                                              <td>
                                                                  <a href="<?php echo base_url().'index.php/K3lingker/hapus_jurulas?id='.$key->id_jurulas;?>"><i class="ion-trash-a"></i>Hapus</a>
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
                                       <h4 class="m-t-0 header-title"><b>Daftar tenaga kerja di ketinggian</b></h4> 
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

                   <div class="tab-pane" id="12">
                    <div class="row">
                       <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Daftar tenaga kerja di ruang terbatas</b></h4> 
                            <div class="table-responsive">
                                <table class="table m-0">
                                 <a href="<?=site_url ()?>K3lingker/tambah_tk_ruang">    
                                     <button class="btn btn-info">Tambah Data</button></a> 
                                     <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Petugas</th>
                                            <th>Jenjang</th>
                                            <th>No. Sertifikat</th>
                                            <th>Tanggal Terbit</th>
                                            <th>Masa Berlaku</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php 
                                                        
                                                        $i=1;
                                                          foreach($data_tk_ruang as $key){ ?>
                                                          <tr>
                                                              <th scope="row"><?php echo $i; ?></th>
                                                              <td><?php echo $key->nama; ?></td>
                                                              <td><?php echo $key->jenjang; ?></td>
                                                              <td><?php echo $key->sertifikat; ?></td>
                                                              <td><?php echo $key->tanggal_terbit; ?></td>
                                                              <td><?php echo $key->masa_berlaku; ?></td>
                                                              <td>
                                                                  <a href="<?php echo base_url().'index.php/K3lingker/hapus_ruang?id='.$key->id_ruang;?>"><i class="ion-trash-a"></i>Hapus</a>
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

            <div class="tab-pane" id="13">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b> Daftar ahli K3 Lingkungan Kerja</b></h4> 

                            <div class="table-responsive">
                                <table class="table m-0">
                                    <a href="<?=site_url ()?>K3lingker/tambah_ak3_lingker">
                                        <button class="btn btn-info">Tambah Data</button></a> 
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Petugas</th>
                                                <th>Jenjang</th>
                                                <th>No. Sertifikat</th>
                                                <th>Tanggal Terbit</th>
                                                <th>Masa Berlaku</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                                        
                                                        $i=1;
                                                          foreach($data_ak3 as $key){ ?>
                                                          <tr>
                                                              <th scope="row"><?php echo $i; ?></th>
                                                              <td><?php echo $key->nama; ?></td>
                                                              <td><?php echo $key->jenjang; ?></td>
                                                              <td><?php echo $key->sertifikat; ?></td>
                                                              <td><?php echo $key->tanggal_terbit; ?></td>
                                                              <td><?php echo $key->masa_berlaku; ?></td>
                                                              <td>
                                                                  <a href="<?php echo base_url().'index.php/K3lingker/hapus_k3?id='.$key->id_k3;?>"><i class="ion-trash-a"></i>Hapus</a>
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

                <div class="tab-pane" id="14">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <h4 class="m-t-0 header-title"><b>Rekaman pengukuran dan pengendalian lingkungan kerja</b></h4> 

                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <a href="<?=site_url ()?>K3lingker/tambah_pengukuran_lingker">
                                            <button class="btn btn-info">Tambah Data</button></a> 
                                            <thead>
                                                <tr>
                                                 <th>#</th>
                                                 <th>Tanggal</th>
                                                 <th>Nomor Laporan</th>
                                                 <th>File Laporan</th>
                                                 <th>Aksi</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                         <?php 
                                                        
                                                        $i=1;
                                                        foreach($data_rekaman as $key){ ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $i; ?></th>
                                                                <td><?php echo $key->tanggal; ?></td>
                                                                <td><?php echo $key->nomor; ?></td>
                                                                <td><a target="_blank" href="<?php echo base_url()."upload/upload_berkas_lingker/".$key->file; ?>">Lihat Laporan</a></td>
                                                                <td> 
                                                                    <a href="<?php echo base_url().'index.php/K3listrik/hapus_rekaman?id='.$key->id_rekaman;?>"><i class="ion-trash-a"></i>Hapus</a>
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

                <div class="tab-pane" id="15">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <h4 class="m-t-0 header-title"><b>Rekaman penerapan higiene dan sanitasi</b></h4> 

                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <a href="<?=site_url ()?>K3lingker/tambah_penerapan_higiene">
                                            <button class="btn btn-info">Tambah Data</button></a> 
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tanggal</th>
                                                    <th>Nomor Laporan</th>
                                                    <th>File Laporan</th>
                                                    <th>Aksi</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                           <?php 
                                                        
                                                        $i=1;
                                                        foreach($data_higiene as $key){ ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $i; ?></th>
                                                                <td><?php echo $key->tanggal; ?></td>
                                                                <td><?php echo $key->nomor; ?></td>
                                                                <td><a target="_blank" href="<?php echo base_url()."upload/upload_berkas_lingker/".$key->file; ?>">Lihat Laporan</a></td>
                                                                <td> 
                                                                    <a href="<?php echo base_url().'index.php/K3listrik/hapus_higiene?id='.$key->id_higien;?>"><i class="ion-trash-a"></i>Hapus</a>
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

                <div class="tab-pane" id="16">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <h4 class="m-t-0 header-title"><b>Rekaman pemeriksaan dan/atau pengujian</b></h4> 
                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <a href="<?=site_url ()?>K3lingker/tambah_pemeriksaan">
                                            <button class="btn btn-info">Tambah Data</button></a> 
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tanggal</th>
                                                    <th>Jenis</th>
                                                    <th>Nama Pelaksana</th>
                                                    <th>Lembaga Pelaksana</th>
                                                    <th>File Laporan</th>
                                                    <th>Aksi</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                           <?php 
                                                        
                                                        $i=1;
                                                        foreach($data_pemeriksaan as $key){ ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $i; ?></th>
                                                                <td><?php echo $key->tanggal; ?></td>
                                                                <td><?php echo $key->jenis; ?></td>
                                                                <td><?php echo $key->nama; ?></td>
                                                                <td><?php echo $key->lembaga; ?></td>
                                                                <td><a target="_blank" href="<?php echo base_url()."upload/upload_berkas_lingker/".$key->file; ?>">Lihat Laporan</a></td>
                                                                <td> 
                                                                    <a href="<?php echo base_url().'index.php/K3listrik/hapus_pemeriksaan?id='.$key->id_pemeriksaan;?>"><i class="ion-trash-a"></i>Hapus</a>
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
</div>
</body>                       
