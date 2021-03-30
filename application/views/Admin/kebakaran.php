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
                            <h4 class="header-title m-t-0 m-b-30">Pencegahan dan Penanggulangan Kebakaran <span class="help-block"><small>*Pastikan Data yang anda masukkan benar</small></h4>
                            </span>

                            <div class="col-md-12">
                            <?php echo form_open_multipart('index.php/Kebakaran/simpan_kebakaran_utama');?>
                                <!-- <form class="form-horizontal"  enctype="multipart/index.php/Kebakaran/simpan_kebakaran_utama" method="post" > -->
<div class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Jumlah karyawan di tempat kerja</label>
                                        <div class="col-md-10">
                                            <input type="number" class="form-control" value="" required name=jumlah_karyawan>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Jumlah unit kerja di tempat kerja</label>
                                        <div class="col-md-10">
                                            <input type="number" class="form-control" value="" required name="jumlah_unit">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Sumber potensi bahaya kebakaran</label>
                                        <div class="col-md-10">
                                            <select class="form-control" required name="sumber_potensi">
                                                            <option>Bahan Kimia Berbahaya</option>
                                                            <option>Limbah B3</option>
                                                            <option>Peralatan Listrik</option>
                                                            <option>Instalasi Listrik</option>
                                                            <option>Material Mudah Terbakar</option>
                                                            <option>Proses Produksi / Jasa</option>
                                                            <option>Kegiatan Produksi dan Jasa</option>
                                                            <option>Lingkungan</option>
                                                            <option>Lainnya</option>
                                                        </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Klasifikasi tingkat potensi bahaya kebakaran</label>
                                        <div class="col-md-10">
                                            <select class="form-control" required name="klasifikasi_potensi">
                                                            <option>Ringan</option>
                                                            <option>Sedang I</option>
                                                            <option>Sedang II</option>
                                                            <option>Sedang III</option>
                                                            <option>Berat</option>
                                                        </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Asal sumber potensi bahaya kebakaran</label>
                                        <div class="col-md-10">
                                            <select class="form-control" required name="asal_sumber">
                                                <option>Internal</option>
                                                <option>Eksternal</option>            
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Sistem pencegahan kebakaran</label>
                                        <div class="col-md-10">
                                            <select class="form-control" required name="sistem_pencegahan">
                                                <option>Pemasangan APAR</option>
                                                <option>Pemasangan Alarm</option>
                                                <option>Pemasangan Sprinkler</option>
                                                <option>Pemasangan Hydrant</option>
                                                <option>Pemasangan Smoke Detector</option>
                                           </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Jumlah Petugas Kebakaran </label>
                                        <div class="col-md-10">
                                            <input type="number" class="form-control" value="" required name="jumlah_petugas">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Jumlah koordinator unit penanggulangan kebakaran </label>
                                        <div class="col-md-10">
                                            <input type="number" class="form-control" value="" required name="jumlah_koordinator">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                            <label class="col-md-2 control-label">Masukkan File</label>
                                            <div class="col-md-10">
                                              <input type="file" name="berkas_penanggulangan" required id="filer_input2" multiple="multiple">
                                              <span class="help-block"><small>Prosedur Penanggulangan Kebakaran</small></span>
                                            </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Masukkan File</label>
                                        <div class="col-md-10">
                                            <input type="file" name="berkas_kerja" required id="filer_input2" multiple="multiple">
                                            <span class="help-block"><small>Prosedur Kerja untuk Mencegah Kebakaran</small></span>                   
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Masukkan File</label>
                                        <div class="col-md-10">
                                            <input type="file" name="berkas_regu" required id="filer_input2" multiple="multiple">
                                            <span class="help-block"><small>Regu penanggulangan kebakaran</small></span>
                                        </div>

                                    </div>

                                    <div class="col-sm-offset-10 col-sm-12">
                                                    <button type="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
                                                    <?php //echo form_close(); ?>
                                                    

                                                    
                                                </div>
                                </div>    
                                </form>
                            </div>
                                <br>

                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#9" data-toggle="tab" aria-expanded="true">
                                            <span class="visible-xs"><i class="fa fa-home"></i></span>
                                            <span class="hidden-xs">Petugas</span> <br>
                                            <span class="hidden-xs">kebakaran</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#11" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs"><i class="fa fa-user"></i></span>
                                            <span class="hidden-xs">Koordinator </span> <br>
                                            <span class="hidden-xs">unit </span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#12" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                                            <span class="hidden-xs"> AK3 </span> <br>
                                            <span class="hidden-xs">Spesialis </span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#13" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                            <span class="hidden-xs">Rekaman pelaksanaan</span> <br>
                                            <span class="hidden-xs"> latihan & gladi</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#14" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                            <span class="hidden-xs">Rekaman pemeriksaan</span> <br>
                                            <span class="hidden-xs">APAR</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a href="#15" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                            <span class="hidden-xs">Rekaman pemeriksaan </span> <br>
                                            <span class="hidden-xs">instalasi alarm</span>
                                        </a>
                                    </li>
                                     <li class="">
                                        <a href="#16" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                            <span class="hidden-xs">Rekaman pemeriksaan </span> <br>
                                            <span class="hidden-xs">instalasi fire hydrant</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#17" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                            <span class="hidden-xs">Rekaman pemeriksaan </span> <br>
                                            <span class="hidden-xs">instalasi sprinkler</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#18" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                            <span class="hidden-xs">Sertifikat/Izin pemakaian  </span> <br>
                                            <span class="hidden-xs">instalasi pemadam kebakaran</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">

                                    <div class="tab-pane active" id="9">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <h4 class="m-t-0 header-title"><b>Daftar nama petugas peran kebakaran</b></h4> 

                                                    <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <a href="<?=site_url ()?>Kebakaran/tambah_petugas_kebakaran">
                                                        <button class="btn btn-info">Tambah Data</button></a> 
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Nama</th>
                                                                <th>Sertfikat Kursus Tingkat I</th>
                                                                <th>Tanggal Terbit</th>
                                                                <th>Masa Berlaku</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                        
                                                            $i=1;
                                                            foreach($data_petugas as $key){ ?>
                                                     <tr>
                                                                <th scope="row"><?php echo $i; ?></th>
                                                                <td><?php echo $key->nama; ?></td>
                                                                <td><a target="_blank" href="<?php echo base_url()."upload/upload_berkas_kebakaran/".$key->sertifikat; ?>">Lihat Sertifikat</a></td>
                                                                <td><?php echo $key->tanggal_terbit; ?></td>
                                                                <td><?php echo $key->masa_berlaku; ?></td>
                                                                <td>
                                                                   <a href="<?php echo base_url()."index.php/Kebakaran/hapus_kebakaran_petugas?id=".$key->id_petugas; ?>"><i class="ion-trash-a"></i>Hapus</a>
                                                                </td>
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
                                    
                                    <div class="tab-pane" id="11">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <h4 class="m-t-0 header-title"><b>Daftar nama koordinator unit penanggulangan kebakaran</b></h4> 

                                                     <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <a href="<?=site_url ()?>Kebakaran/tambah_koordinator">
                                                        <button class="btn btn-info">Tambah Data</button></a> 
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Nama</th>
                                                                <th>Sertfikat Kursus Tingkat II</th>
                                                                <th>Tanggal Terbit</th>
                                                                <th>Masa Berlaku</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php 
                                                        
                                                        $i=1;
                                                        foreach($data_penanggulangan as $key){ ?>
                                                 <tr>
                                                            <th scope="row"><?php echo $i; ?></th>
                                                            <td><?php echo $key->nama; ?></td>
                                                            <td><a target="_blank" href="<?php echo base_url()."upload/upload_berkas_kebakaran/".$key->sertifikat; ?>">Lihat Sertifikat</a></td>
                                                            <td><?php echo $key->tanggal_terbit; ?></td>
                                                            <td><?php echo $key->masa_berlaku; ?></td>
                                                            <td>
                                                               <a href="<?php echo base_url()."index.php/Kebakaran/hapus_kebakaran_penanggulangan?id=".$key->id_penanggulangan; ?>"><i class="ion-trash-a"></i>Hapus</a>
                                                            </td>
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
                                                <h4 class="m-t-0 header-title"><b>Daftar nama AK3 spesialis penanggulangan kebakaran</b></h4> 

                                                 <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <a href="<?=site_url ()?>Kebakaran/tambah_ak3_spesialis">
                                                        <button class="btn btn-info">Tambah Data</button></a> 
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Nama</th>
                                                                <th>Nomor Sertifikat</th>
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
                                                            <td><?php echo $key->sertifikat; ?></td>
                                                            <td><?php echo $key->tanggal_terbit; ?></td>
                                                            <td><?php echo $key->masa_berlaku; ?></td>
                                                            <td>
                                                               <a href="<?php echo base_url()."index.php/Kebakaran/hapus_kebakaran_ak3?id=".$key->id_ak3; ?>"><i class="ion-trash-a"></i>Hapus</a>
                                                            </td>
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
                                            <h4 class="m-t-0 header-title"><b>Rekaman pelaksanaan latihan dan gladi penanggulangan kebakaran</b></h4> 

                                           <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <a href="<?=site_url ()?>Kebakaran/tambah_rekaman_latihan">
                                                        <button class="btn btn-info">Tambah Data</button></a> 
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Nama</th>
                                                                <th>Nomor Sertifikat</th>
                                                                <th>Tanggal Terbit</th>
                                                                <th>Masa Berlaku</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                     <?php   foreach($data_gladi as $key){ ?>
                                                 <tr>
                                                            <th scope="row"><?php echo $i; ?></th>
                                                            <td><?php echo $key->nama; ?></td>
                                                            <td><?php echo $key->sertifikat; ?></td>
                                                            <td><?php echo $key->tanggal_terbit; ?></td>
                                                            <td><?php echo $key->masa_berlaku; ?></td>
                                                            <td>
                                                               <a href="<?php echo base_url()."index.php/Kebakaran/hapus_kebakaran_gladi?id=".$key->id_gladi;?>"><i class="ion-trash-a"></i>Hapus</a>
                                                            </td>
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
                                            <h4 class="m-t-0 header-title"><b>Rekaman pelaksanaan APAR</b></h4> 

                                           <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <a href="<?=site_url ()?>Kebakaran/tambah_rekaman_apar">
                                                        <button class="btn btn-info">Tambah Data</button></a> 
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Tanggal Pemeriksaan</th>
                                                                <th>File Laporan Pemeriksaan</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                       <?php foreach($data_apar as $key){ ?>
                                                 <tr>
                                                            <th scope="row"><?php echo $i; ?></th>
                                                            <td><?php echo $key->tanggal_periksa; ?></td>
                                                            <td><?php echo $key->file; ?></td>
                                                           <td>
                                                               <a href="<?php echo base_url()."index.php/Kebakaran/hapus_kebakaran_apar?id=".$key->id_apar; ?>"><i class="ion-trash-a"></i>Hapus</a>
                                                            </td>
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
                                            <h4 class="m-t-0 header-title"><b>Rekaman pemeriksaan instalasi alarm kebakaran otomatis</b></h4> 

                                           <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <a href="<?=site_url ()?>Kebakaran/tambah_rekaman_instalasi_alarm">
                                                        <button class="btn btn-info">Tambah Data</button></a> 
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Tanggal Pemeriksaan</th>
                                                                <th>File Laporan Pemeriksaan</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php foreach($data_alarm as $key){ ?>
                                                 <tr>
                                                            <th scope="row"><?php echo $i; ?></th>
                                                            <td><?php echo $key->tanggal_periksa; ?></td>
                                                            <td><?php echo $key->file; ?></td>
                                                          
                                                            <td>
                                                               <a href="<?php echo base_url()."index.php/Kebakaran/hapus_kebakaran_alarm?id=".$key->id_alarm; ?>"><i class="ion-trash-a"></i>Hapus</a>
                                                            </td>
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
                                            <h4 class="m-t-0 header-title"><b>Rekaman pemeriksaaan instalasi fire hydrant</b></h4> 

                                           <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <a href="<?=site_url ()?>Kebakaran/tambah_rekaman_instalasi_fire">
                                                        <button class="btn btn-info">Tambah Data</button></a> 
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Tanggal Pemeriksaan</th>
                                                                <th>File Laporan Pemeriksaan</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php foreach($data_hydrant as $key){ ?>
                                                 <tr>
                                                            <th scope="row"><?php echo $i; ?></th>
                                                            <td><?php echo $key->tanggal_periksa; ?></td>
                                                            <td><?php echo $key->file; ?></td>
                                                          
                                                            <td>
                                                               <a href="<?php echo base_url()."index.php/Kebakaran/hapus_kebakaran_hydrant?id=".$key->id_hydrant; ?>"><i class="ion-trash-a"></i>Hapus</a>
                                                            </td>
                                                           <?php $i++;
                                                                } ?>
                                                        </tbody>
                                                    </table>
                                                </div>

                                        </div>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="tab-pane" id="17">
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                            <h4 class="m-t-0 header-title"><b>Rekaman pemeriksaaan instalasi sprinkler</b></h4> 

                                           <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <a href="<?=site_url ()?>Kebakaran/tambah_rekaman_instalasi_sprinkler">
                                                        <button class="btn btn-info">Tambah Data</button></a> 
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Tanggal Pemeriksaan</th>
                                                                <th>File Laporan Pemeriksaan</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php foreach($data_sprinkler as $key){ ?>
                                                 <tr>
                                                            <th scope="row"><?php echo $i; ?></th>
                                                            <td><?php echo $key->tanggal_periksa; ?></td>
                                                            <td><?php echo $key->file; ?></td>
                                                          
                                                            <td>
                                                               <a href="<?php echo base_url()."index.php/Kebakaran/hapus_kebakaran_sprinkler?id=".$key->id_sprinkler; ?>"><i class="ion-trash-a"></i>Hapus</a>
                                                            </td>
                                                           <?php $i++;
                                                                } ?>
                                                        </tbody>
                                                    </table>
                                                </div>

                                        </div>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="tab-pane" id="18">
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                            <h4 class="m-t-0 header-title"><b>Sertifikat/Izin pemakaian instalasi pemadam kebakaran </b></h4> 

                                           <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <a href="<?=site_url ()?>Kebakaran/tambah_izin_instalasi_pemadam">
                                                        <button class="btn btn-info">Tambah Data</button></a> 
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Tanggal Pemeriksaan</th>
                                                                <th>Masa Berlaku</th>
                                                                <th>File Sertifikat</th>
                                                               
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php 
                                                        
                                                        $i=1;
                                                        foreach($data_instalasi as $key){ ?>
                                                 <tr>
                                                            <th scope="row"><?php echo $i; ?></th>
                                                            <td><?php echo $key->tanggal_periksa; ?></td>
                                                            <td><?php echo $key->masa_berlaku; ?></td>
                                                            <td><a target="_blank" href="<?php echo base_url()."upload/upload_berkas_kebakaran/".$key->file_sertifikat; ?>">Lihat Sertifikat</a></td>
                                                            
                                                            <td>
                                                               <a href="<?php echo base_url()."index.php/Kebakaran/hapus_kebakaran_instalasi?id=".$key->id_instalasi; ?>"><i class="ion-trash-a"></i>Hapus</a>
                                                            </td>
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
</div>
</div>
</div>
</body>