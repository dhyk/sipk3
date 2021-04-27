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
                                                <input type="text" class="form-control" name="nama" value="<?= $data_pengaduan[0]->nama?>" readonly=""
                                                  >

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Judul Pengaduan</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="judul"  value="<?= $data_pengaduan[0]->judul?>" readonly="" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nama Perusahaan</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="nama_perusahaan"  value="<?= $data_pengaduan[0]->nama_perusahaan?>" readonly="" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Jenis Pengaduan</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="jenis" value="<?= $data_pengaduan[0]->jenis?>" readonly="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Tanggal Pengaduan</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="tanggal" value="<?= $data_pengaduan[0]->tanggal?>" readonly="" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nama Pengawas</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="nama_pengawas" value="<?= $data_pengaduan[0]->nama_pengawas ?>" readonly="">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nama Pengawas 2</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="nama_pengawas2" value="<?= $data_pengaduan[0]->nama_pengawas2 ?>" readonly="">

                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nomor SPT</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="nomor_sah" value="<?= $data_pengaduan[0]->no_spt?>" readonly="" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Dokumen Pengaduan </label>
                                            <div class="col-md-10"><a href="<?= base_url().'upload/upload_berkas_pengaduan/'.$data_pengaduan[0]->file_pengaduan?>" target="blank_"> >>klik disini<< </a>
                                            </div>
                                        </div>
                                        <br />
                                       
                
                                                        

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
                                                            <!-- <a href="<?= site_url().'Pengawas/tambah_tindakan?id='.$data_pengaduan[0]->id_pengaduan.'&pws='.$data_pengaduan[0]->id_pengawas?>">
                                                                <button class="btn btn-success">Tambah Tindakan</button></a> <br> -->
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Nama Tindakan </th>
                                                                    <th>Detail Tindakan</th>
                                                                    <th>File Pendukung</th>
                                                                    <th>Tanggal</th>
                                                                    <th>Status</th>
                                                                    <!-- <th>Aksi</th> -->
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php 
                                                        
                                                                $i=1;
                                                                foreach($data_tindakan as $key){ ?>
                                                               
                                                                    <tr>
                                                                        <th scope="row"><?php echo $i; ?></th>
                                                                        <td><?php echo $key->nama; ?></td>
                                                                        <td><?php echo $key->detail; ?></td>
                                                                        <td><a target="_blank" href="<?php echo base_url().'upload/upload_file_tindakan/' . $key->berkas; ?>">Lihat berkas</a></td>
                                                                        <td><?php echo $key->tanggal_tindakan; ?></td>
                                                                        <th><?php echo $key->status; ?></th>
                                                                        <!-- <td>
                                                                           

                                                                            <a href="<?= base_url().'Pengawas/hapus_tindakan?id='.$key->id_tindakan.'&pd='.$data_pengaduan[0]->id_pengaduan?>"><i class="ion-trash-a"></i>Hapus</a>
                                                                        </td> -->
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