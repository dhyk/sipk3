<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">
        <div class="content-page">
            <!-- Start content -->
            <br>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Detail Tugas</h4>
                                <?php echo form_open_multipart('index.php/Admin/aksi_upload_smk3'); ?>
                                    <div class="form-horizontal">

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nama Pengadu</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="nama" value="Roy Achmad" readonly=""
                                                  >

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Judul Pengaduan</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="judul"  value="Pemutusan Kontrak Pegawai" readonly="" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nama Perusahaan</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="nama_perusahaan"  value="PT. Petrokimia (Persero)" readonly="" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Jenis Pengaduan</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="jenis" value="Kelompok" readonly="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Tanggal Pengaduan</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="tanggal" value="19/03/2021" readonly="" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nama Pengawas</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="nama_pengawas" value="achmad" readonly="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nomor SPT</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="nomor_sah" value="093725172-SPT" readonly="" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Dokumen Pengaduan </label>
                                            <div class="col-md-10"><a href="" target="blank_"> >>klik disini<< </a>
                                            </div>
                                        </div>
                                        <br />
                                       
                                        <div class="col-sm-offset-9 col-sm-12">
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
                                            <a href="<?= site_url() ?>Pengawas/daftar_tugas" class="btn btn-danger waves-effect waves-light">Kembali</a>
                                        </div>
                                                        

                                    </div>
                                </form> 
                                <br>
                                <br />
                                <br />
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#1" data-toggle="tab" aria-expanded="true">
                                            <span class="visible-xs"><i class="fa fa-home"></i></span>
                                            <span class="hidden-xs">Log Activity</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="1">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <h4 class="m-t-0 header-title"><b>Aktivitas Tindakan</b></h4>

                                                    <div class="table-responsive">
                                                        <table  id="datatable" class="table table-striped table-bordered">
                                                            <a href="<?= site_url() ?>Pengawas/tambah_tindakan">
                                                                <button class="btn btn-success">Tambah Tindakan</button></a> <br>
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Nama Tindakan </th>
                                                                    <th>Detail Tindakan</th>
                                                                    <th>File Pendukung</th>
                                                                    <th>Tanggal</th>
                                                                    <th>Status</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php 
                                                        
                                                                $i=1;
                                                                foreach($detail_tindakan as $key){ ?>
                                                               
                                                                    <tr>
                                                                        <th scope="row"><?php echo $i; ?></th>
                                                                        <td><?php echo $key->nama; ?></td>
                                                                        <td><?php echo $key->detail; ?></td>
                                                                        <td><a target="_blank" href="<?php echo base_url().'upload/upload_file_tindakan/' . $key->berkas; ?>">Lihat berkas</a></td>
                                                                        <td><?php echo $key->tanggal_tindakan; ?></td>
                                                                        <th><?php echo $key->status; ?></th>
                                                                        <td>
                                                                            <a href="" target="_blank"><i class="ion-eye"></i>Lihat |</a>

                                                                            <a href=""><i class="ion-trash-a"></i>Hapus</a>
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
</body>