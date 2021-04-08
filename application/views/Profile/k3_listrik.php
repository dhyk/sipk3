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
                            <h4 class="header-title m-t-0 m-b-30">K3 Instalasi Kelistrikan <span class="help-block"><small>*Pastikan Data yang anda masukkan benar</small></h4>

                            <div class="col-md-12">
                                <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/K3listrik/simpan_k3listrik';?>">

                                    <div class="form-group clearfix">
                                        <label class="col-md-2 control-label">Apakah memiliki pembangkit listrik diatas 200 KVA ? </label>
                                        <div class="col-md-10">
                                             <div class="radio radio-success">
                                                <input type="radio" name="pembangkit" id="radio4" value="Ya" required>
                                                <label for="radio4">Ya</label>
                                            </div>

                                            <div class="radio radio-success">
                                                <input type="radio" name="pembangkit" id="radio4" value="Tidak">
                                                <label for="radio4">Tidak</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Sumber bahaya instalasi listrik</label>
                                        <div class="col-md-10">
                                        <select class="form-control" required name="bahaya" value="<?php if($data_k3listrik!=null){ echo $data_k3listrik[0]->sumber_bahaya;}?>">
                                                <option>Pembangkit Listrik</option>
                                                <option>Transmisi Listrik</option>
                                                <option>Distribusi Listrik</option>
                                                <option>Pemanfaatan Listrik</option>
                                           </select>   
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Standar instalasi listrik</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" required name="standar">
                                            <span class="help-block"><small>Tuliskan Nama standar dan Nomor/Kodenya. Misalnya SNI - 04-2000</small></span>
                                        </div>
                                    </div>

                                   <div class="form-group clearfix">
                                        <label class="col-md-2 control-label">Apakah ada AK3 listrik ? </label>
                                        <div class="col-md-10">
                                             <div class="radio radio-success">
                                                <input type="radio" name="ak3" id="radio4" value="Ada" required>
                                                <label for="radio4">Ada</label>
                                            </div>

                                            <div class="radio radio-success">
                                                <input type="radio" name="ak3" id="radio4" value="Tidak">
                                                <label for="radio4">Tidak ada</label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group clearfix">
                                        <label class="col-md-2 control-label">Apakah ada teknisi K3 listrik ? </label>
                                        <div class="col-md-10">
                                             <div class="radio radio-success">
                                                <input type="radio" name="teknisi" id="radio4" value="Ada" required>
                                                <label for="radio4">Ada</label>
                                            </div>

                                            <div class="radio radio-success">
                                                <input type="radio" name="teknisi" id="radio4" value="Tidak">
                                                <label for="radio4">Tidak ada</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group clearfix">
                                        <div class="col-md-2">
                                        <input type="submit" value="Simpan" class="btn btn-success">
                                        </div>
                                    </div>

                                    
                                    </form>
                                </div>
                                <br>

                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#9" data-toggle="tab" aria-expanded="true">
                                            <span class="visible-xs"><i class="fa fa-home"></i></span>
                                            <span class="hidden-xs">sertifikat ijin pemakaian</span> <br>
                                            <span class="hidden-xs">kelayakan instalasi listrik</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#11" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs"><i class="fa fa-user"></i></span>
                                            <span class="hidden-xs">sertifikat ijin pemakaian </span> <br>
                                            <span class="hidden-xs">kelayakan instalasi penyalur petir</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#12" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                                            <span class="hidden-xs"> Daftar AK3  </span> <br>
                                            <span class="hidden-xs">Listrik </span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#13" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                            <span class="hidden-xs">Daftar Tekniki</span> <br>
                                            <span class="hidden-xs">K3 Listrik</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#14" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                            <span class="hidden-xs">rekaman pemeriksaan &</span> <br>
                                            <span class="hidden-xs">pengujian instalasi listrik </span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a href="#15" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                            <span class="hidden-xs">rekaman pemeriksaan &  </span> <br>
                                            <span class="hidden-xs">pengujian instalasi penyalur petir</span>
                                        </a>
                                    </li>
                                    
                                </ul>

                                <div class="tab-content">

                                    <div class="tab-pane active" id="9">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <h4 class="m-t-0 header-title"><b>sertifikat ijin pemakaian/kelayakan instalasi listrik</b></h4> 

                                                    <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <a href="<?=site_url ()?>K3listrik/tambah_kelayakan_listrik">
                                                        <button class="btn btn-info">Tambah Data</button></a> 
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>No. Sertfikat</th>
                                                                <th>Tanggal Terbit</th>
                                                                <th>Masa Berlaku</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php 
                                                        $i=1;
                                                        foreach ($data_ijin_listrik as $key){ ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $i;?></th>
                                                                <td><?php echo $key->sertifikat;?></td>
                                                                <td><?php echo $key->tanggal_terbit;?></td>
                                                                <td><?php echo $key->masa_berlaku;?></td>
                                                                <td>
                                                                    
                                                                    <a href="<?php echo base_url().'index.php/K3listrik/hapus_ijin_listrik?id='.$key->id_ijin_listrik;?>"><i class="ion-trash-a"></i>Hapus</a>
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
                                    
                                    <div class="tab-pane" id="11">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <h4 class="m-t-0 header-title"><b>sertifikat ijin pemakaian/kelayakan instalasi penyalur petir</b></h4> 

                                                     <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <a href="<?=site_url ()?>K3listrik/tambah_kelayakan_petir">
                                                        <button class="btn btn-info">Tambah Data</button></a> 
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>No. Sertfikat</th>
                                                                <th>Tanggal Terbit</th>
                                                                <th>Masa Berlaku</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                            $i=1;
                                                            foreach ($data_ijin_petir as $key){ ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $i;?></th>
                                                                <td><?php echo $key->sertifikat;?></td>
                                                                <td><?php echo $key->tanggal_terbit;?></td>
                                                                <td><?php echo $key->masa_berlaku;?></td>
                                                                <td>
                                                                    <a href="<?php echo base_url().'index.php/K3listrik/hapus_ijin_petir?id='.$key->id_ijin_petir;?>"><i class="ion-trash-a"></i>Hapus</a>
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

                                    <div class="tab-pane" id="12">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card-box table-responsive">
                                                <h4 class="m-t-0 header-title"><b>Daftar AK3 Listrik</b></h4> 

                                                 <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <a href="<?=site_url ()?>K3listrik/tambah_ak3_listrik">
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
                                                                    <a href="<?php echo base_url().'index.php/K3listrik/hapus_ak3?id='.$key->id_ak3_listrik;?>"><i class="ion-trash-a"></i>Hapus</a>
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

                                    <div class="tab-pane" id="13">
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                            <h4 class="m-t-0 header-title"><b>daftar Teknisi K3 Listrik</b></h4> 

                                           <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <a href="<?=site_url ()?>K3listrik/tambah_teknisi">
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
                                                        foreach($data_teknisi as $key){ ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $i; ?></th>
                                                                <td><?php echo $key->nama; ?></td>
                                                                <td><?php echo $key->sertifikat; ?></td>
                                                                <td><?php echo $key->tanggal_terbit; ?></td>
                                                                <td><?php echo $key->masa_berlaku; ?></td>
                                                                <td> 
                                                                    <a href="<?php echo base_url().'index.php/K3listrik/hapus_teknisi?id='.$key->id_teknisi;?>"><i class="ion-trash-a"></i>Hapus</a>
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

                                    <div class="tab-pane" id="14">
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                            <h4 class="m-t-0 header-title"><b>rekaman pemeriksaan & pengujian instalasi listrik </b></h4> 

                                           <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <a href="<?=site_url ()?>K3listrik/tambah_rekaman_pemeriksaan_listrik">
                                                        <button class="btn btn-info">Tambah Data</button></a> 
                                                        <thead>
                                                       
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Tanggal Pemeriksaan</th>
                                                                <th>File Laporan Pemeriksaan & Pengujian</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php 
                                                        
                                                        $i=1;
                                                        foreach($data_pemeriksaan_listrik as $key){ ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $i; ?></th>
                                                                <td><?php echo $key->tanggal_pemeriksaan; ?></td>
                                                                <td><a target="_blank" href="<?php echo base_url()."upload/upload_berkas_listrik/".$key->sertifikat; ?>">Lihat Laporan</a></td>
                                                                <td> 
                                                                    <a href="<?php echo base_url().'index.php/K3listrik/hapus_pemeriksaan_listrik?id='.$key->id_pemeriksaan;?>"><i class="ion-trash-a"></i>Hapus</a>
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

                                    <div class="tab-pane" id="15">
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                            <h4 class="m-t-0 header-title"><b>rekaman pemeriksaan & pengujian instalasi penyalur petir</b></h4> 

                                           <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <a href="<?=site_url ()?>K3listrik/tambah_rekaman_pemeriksaan_petir">
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
                                                        <?php 
                                                        
                                                        $i=1;
                                                        foreach($data_pemeriksaan_petir as $key){ ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $i; ?></th>
                                                                <td><?php echo $key->tanggal_pemeriksaan; ?></td>
                                                                <td><a target="_blank" href="<?php echo base_url()."upload/upload_berkas_listrik/".$key->sertifikat; ?>">Lihat Sertifikat</a></td>
                                                                <td> 
                                                                    <a href="<?php echo base_url().'index.php/K3listrik/hapus_pemeriksaan_petir?id='.$key->id_pemeriksaan;?>"><i class="ion-trash-a"></i>Hapus</a>
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

                                    
                                    
                                </div>


                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>
</body>