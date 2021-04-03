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
                                <h4 class="header-title m-t-0 m-b-30">Informasi Umum K3</h4>

                                <div class="col-md-12">
                                    <form class="form-horizontal">

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nama Perusahaan</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" readonly="" value="<?php echo $informasi_umum[0]->nama_perusahaan; ?>">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Alamat Perusahaan</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" readonly="" value="<?php echo $informasi_umum[0]->alamat; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nomor Izin Berusaha</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" readonly="" value="<?php echo $informasi_umum[0]->nib; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Jumlah Karyawan</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" readonly="" value="<?php echo $informasi_umum[0]->jumlah_karyawan; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nomor Pengesahaan</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" readonly="" value="<?php echo $informasi_umum[0]->no_p2k3; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Tanggal Pengesahan</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" readonly="" value="<?php echo $informasi_umum[0]->tanggal_p2k3; ?>">
                                            </div>
                                        </div>
                                    </form>
                                    <?php echo form_open_multipart('index.php/Admin/aksi_upload_smk3'); ?>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Dokumen K3 Terakhir </label>
                                        <div class="col-md-10"><a href="<?php echo base_url() . 'upload/upload_smk3/' . $sertifikat_smk[0]->file_sertifikat; ?>" target="blank_"> >>klik disini<< </a>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="form-group">
                                        <div class="p-20">
                                            <!-- <div class="form-group clearfix"> -->

                                            <label class="col-md-2 control-label">Upload Dokumen K3</label>
                                            <div class="col-md-10">
                                                <input type="file" name="berkas" id="filer_input2" multiple="multiple">
                                                <br />
                                            </div>
                                            <!-- </div> -->

                                        </div>
                                    </div>

                                    <div class="col-sm-offset-10 col-sm-12">
                                        <button type="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
                                        <?php //echo form_close(); 
                                        ?>



                                    </div>
                                    </form>

                                </div>
                                <br>
                                <br />
                                <br />
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#1" data-toggle="tab" aria-expanded="true">
                                            <span class="visible-xs"><i class="fa fa-home"></i></span>
                                            <span class="hidden-xs">Sertifikat Standard</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#profile" data-toggle="tab" aria-expanded="true">
                                            <span class="visible-xs"><i class="fa fa-user"></i></span>
                                            <span class="hidden-xs">Sertfikat Produk/Jasa</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#messages" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                                            <span class="hidden-xs">Izin Berusaha</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#settings" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                            <span class="hidden-xs">Daftar Ahli K3 Umum</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="1">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <h4 class="m-t-0 header-title"><b>Sertfikat Standard</b></h4>

                                                    <div class="table-responsive">
                                                        <table class="table m-0">
                                                            <a href="<?= site_url() ?>Admin/tambah_sertifikat_standard">
                                                                <button class="btn btn-info">Tambah Data</button></a>
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Nama Sertfikat </th>
                                                                    <th>Tanggal Terbit</th>
                                                                    <th>Masa Berlaku</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i = 1;
                                                                foreach ($data_standard as $key) { ?>
                                                                    <tr>
                                                                        <th scope="row"><?php echo $i; ?></th>
                                                                        <td><?php echo $key->nama_sertifikat_standard; ?></td>
                                                                        <td><?php echo $key->tanggal_terbit; ?></td>
                                                                        <td><?php echo $key->masa_berlaku; ?></td>
                                                                        <td>
                                                                            <a href="<?php echo base_url() . 'upload/upload_sertifikat_standard/' . $key->file_sertifikat; ?>" target="_blank"><i class="ion-eye"></i>Lihat |</a>

                                                                            <a href="<?php echo base_url() . 'index.php/Admin/hapus_sertifikat_standard?id=' . $key->id_sertifikat_standard; ?>"><i class="ion-trash-a"></i>Hapus</a>
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

                                    <div class="tab-pane" id="profile">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <h4 class="m-t-0 header-title"><b>Sertfikat Produk</b></h4>

                                                    <div class="table-responsive">
                                                        <table class="table m-0">
                                                            <a href="<?= site_url() ?>Admin/tambah_sertifikat_produk">
                                                                <button class="btn btn-info">Tambah Data</button></a>
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Nama Sertifikat</th>
                                                                    <th>Tanggal Terbit</th>
                                                                    <th>Masa Berlaku</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i = 1;
                                                                foreach ($data_produk as $key) { ?>
                                                                    <tr>
                                                                        <th scope="row"><?php echo $i; ?></th>
                                                                        <td><?php echo $key->nama_sertifikat_produk; ?></td>
                                                                        <td><?php echo $key->tanggal_terbit; ?></td>
                                                                        <td><?php echo $key->masa_berlaku; ?></td>
                                                                        <td>

                                                                            <a href="<?php echo base_url() . 'index.php/Admin/hapus_sertifikat_produk?id=' . $key->id_sertifikat_produk; ?>"><i class="ion-trash-a"></i>Hapus</a>
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

                                    <div class="tab-pane" id="messages">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <h4 class="m-t-0 header-title"><b>Izin Berusaha</b></h4>

                                                    <div class="table-responsive">
                                                        <table class="table m-0">
                                                            <a href="<?= site_url() ?>Admin/tambah_izin_berusaha">
                                                                <button class="btn btn-info">Tambah Data</button></a>
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Nama Izin</th>
                                                                    <th>Nomor Izin</th>
                                                                    <th>Tanggal Terbit</th>
                                                                    <th>Masa Berlaku</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i = 1;
                                                                foreach ($data_izin as $key) { ?>
                                                                    <tr>
                                                                        <th scope="row"><?php echo $i; ?></th>
                                                                        <td><?php echo $key->nama_izin_usaha; ?></td>
                                                                        <td><?php echo $key->nomor_izin; ?></td>
                                                                        <td><?php echo $key->tanggal_terbit; ?></td>
                                                                        <td><?php echo $key->masa_berlaku; ?></td>
                                                                        <td>

                                                                            <a href="<?php echo base_url() . 'index.php/Admin/hapus_izin_berusaha?id=' . $key->id_izin_usaha; ?>">
                                                                                <i class="ion-trash-a"></i>Hapus</a>
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

                                    <div class="tab-pane" id="settings">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <h4 class="m-t-0 header-title"><b>Daftar Ahli</b></h4>

                                                    <div class="table-responsive">
                                                        <table class="table m-0">
                                                            <a href="<?= site_url() ?>Admin/tambah_daftar_ahlik3">
                                                                <button class="btn btn-info">Tambah Data</button></a>
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Nama</th>
                                                                    <th>Nomor </th>
                                                                    <th>Tanggal Terbit</th>
                                                                    <th>Masa Berlaku</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i = 1;
                                                                foreach ($data_ahli as $key) { ?>
                                                                    <tr>
                                                                        <th scope="row"><?php echo $i; ?></th>
                                                                        <td><?php echo $key->nama; ?></td>
                                                                        <td><?php echo $key->nomor; ?></td>
                                                                        <td><?php echo $key->tangggal_terbit; ?></td>
                                                                        <td><?php echo $key->masa_berlaku; ?></td>
                                                                        <td>

                                                                            <a href="<?php echo base_url() . 'index.php/Admin/hapus_ahlik3?id=' . $key->id_ahlik3umum; ?>">
                                                                                <i class="ion-trash-a"></i>Hapus</a>
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
            </div>
        </div>
    </div>
</body>