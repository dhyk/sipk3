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
                            <?php echo form_open_multipart('index.php/Disnaker/aksi_pengaduan_pengawas'); ?>
                            <div class="form-horizontal">

                                <div class="form-group">
                                    <label class="col-md-2 control-label">Nama Pengadu</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="nama" value="<?= $data_pengaduan[0]->nama ?>" readonly="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Judul Pengaduan</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="judul" value="<?= $data_pengaduan[0]->judul ?>" readonly="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Nama Perusahaan</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="nama_perusahaan" value="<?= $data_pengaduan[0]->nama_perusahaan ?>" readonly="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Jenis Pengaduan</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="<?= $data_pengaduan[0]->jenis ?>" value="Kelompok" readonly="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Tanggal Pengaduan</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="tanggal" value="<?= $data_pengaduan[0]->tanggal ?>" readonly="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Perihal Pengaduan</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="perihal" value="<?= $data_pengaduan[0]->perihal ?>" readonly="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label">Dokumen Pengaduan </label>
                                    <div class="col-md-10">
                                        <a href="<?php echo base_url() . 'upload/upload_file_pendukung/' . $data_pengaduan[0]->file_pengaduan ?>" target="blank_"> >>klik disini<< </a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Nomor Telepon</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="nomor_telp" value="<?= $data_pengaduan[0]->no_telp ?>" readonly="">
                                    </div>
                                </div>
                                <br />
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Nama Pengawas1</label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="id_pengawas" required>
                                        <option>---Pilih Pengawas---</option>
                                            <?php foreach ($data_pengawas as $key) {
                                                if ($key->id_pengawas == $data_pengaduan[0]->id_pengawas) { ?>
                                                    <option value="<?php echo $key->id_pengawas; ?>"><?php echo $key->nama; ?></option>
                                            <?php }
                                            } ?>

                                            <?php foreach ($data_pengawas as $key) { ?>
                                                <option value="<?php echo $key->id_pengawas; ?>"><?php echo $key->nama; ?></option>
                                            <?php } ?>
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Nama Pengawas2</label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="id_pengawas2" required>
                                        <option>---Pilih Pengawas---</option>
                                            <?php foreach ($data_pengawas as $key) {
                                                if ($key->id_pengawas == $data_pengaduan[0]->id_pengawas2) { ?>
                                                    <option value="<?php echo $key->id_pengawas; ?>"><?php echo $key->nama; ?></option>
                                            <?php }
                                            } ?>

                                            <?php foreach ($data_pengawas as $key) { ?>
                                                <option value="<?php echo $key->id_pengawas2; ?>"><?php echo $key->nama; ?></option>
                                            <?php } ?>
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Nomor SPT</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="nomor_spt" value="<?= $data_pengaduan[0]->no_spt ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Masukkan File SPT</label>
                                    <div class="col-md-10">
                                        <div class="input-group">
                                            <input type="file" class="filestyle" data-buttonname="btn-primary" name="berkas">
                                            <span class="help-block"><small>File Surat Perintah Tugas .PDF </small></span>
                                            <div class="col-md-10">
                                                <a href="<?php echo base_url() . 'upload/upload_file_spt/' . $data_pengaduan[0]->file_spt ?>" target="blank_"> >>klik disini<< </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Keterangan</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="keterangan" value="<?= $data_pengaduan[0]->keterangan ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-11">
                                        <input type="hidden" name="id_pengaduan" value="<?= $data_pengaduan[0]->id_pengaduan ?>">
                                        <button type="submit" class="btn btn-success waves-effect waves-light">Terima Pengaduan</button>
                                        <a href="<?= base_url() . 'Disnaker/aksi_pengaduan_ditolak?id=' . $data_pengaduan[0]->id_pengaduan ?>" class="btn btn-danger waves-effect waves-light"> Tolak Pengaduan</a>

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