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
                                <h4 class="header-title m-t-0 m-b-30">Detail Pengaduan</h4>
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
                                            <label class="col-md-2 control-label">Perihal Pengaduan</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="perihal" value="Penyelesian dalam pemutusan kontrak yang belum selesai karena ada pihak yang dirugikan (Misalnya)" readonly="">
                                            </div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Dokumen Pengaduan </label>
                                            <div class="col-md-10"><a href="<?php echo base_url()."upload/upload_file_pendukung/File Pendukung Pengaduan.pdf"?>" target="blank_"> >>klik disini<< </a>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nama Pengawas</label>
                                            <div class="col-md-10">
                                            <select class="form-control" name="nama_pengawas" required>
		                                                <option>--Pilih Pengawas--</option>
                                                        <option>Achmad</option>
		                                                <option>Supono</option>
		                                                <option>Handi</option>
                                                        <option>Tono</option>
		                                                <option>Supriadi</option>
		                                                <option>Hengky</option>
                                            		</select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nomor SPT</label>
                                            <div class="col-md-10">
                                                <input type="number" class="form-control" name="nomor_sah" value="" >
                                            </div>
                                        </div>
                                        <div class="form-group">
 											<label class="col-md-2 control-label">Masukkan File SPT</label>
 												<div class="col-md-10">
 													<div class="input-group">
 														<input type="file" class="filestyle" data-buttonname="btn-primary" name="berkas" required>
 														<span class="help-block"><small>File Surat Perintah Tugas .PDF </small></span>
 													</div>
 												</div>
 										</div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Keterangan</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="keterangan" value="" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <div class="col-sm-offset-4 col-sm-11">
                                            <button type="submit" class="btn btn-danger waves-effect waves-light">Tolak Pengaduan</button>
                                            <button type="submit" class="btn btn-success waves-effect waves-light">Terima Pengaduan</button>
                                            <a href="<?= site_url() ?>Disnaker/daftar_pengaduan" class="btn btn-warning waves-effect waves-light">Kembali</a>
                                        </div>
                                        </div>
                                                        

                                    </div>
                                </form> 
                                

                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>