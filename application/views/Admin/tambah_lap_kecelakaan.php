<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">
        <div class="content-page">
            <!-- Start content -->
            <br>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <?php //echo form_open('Admin/tambahberita'); 
                                ?>
                                <h4 class="m-t-0 header-title"><b>Tambah data</b></h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php echo form_open_multipart('index.php/K3lingker/simpan_kecelakaan'); ?>
                                        <div class="form-horizontal">
                                            <div class="form-group">
                                                <label for="waktu" class="col-md-2 control-label">Waktu Kejadian :</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="waktu" required="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="stasiun" class="col-md-2 control-label">Stasiun</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="stasiun" required="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="jenis" class="col-md-2 control-label">Jenis Kecelakaan</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="jenis" required="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="jumlah" class="col-md-2 control-label">Jumlah Korban</label>
                                                <div class="col-md-10">
                                                    <input type="number" class="form-control" name="jumlah" required="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="usia" class="col-md-2 control-label">Usia Korban :</label>
                                                <div class="col-md-10">
                                                    <input type="number" class="form-control" name="usia" required="">
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="col-md-2 control-label">Jenis Kelamin:</label>
                                                <div class="col-md-10">
                                                    <div class="radio">
                                                        <input type="radio" name="gender" id="genderM" value="L" required="">
                                                        <label for="genderM">Laki-laki</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" name="gender" id="genderF" value="P">
                                                        <label for="genderF">Perempuan</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="kategori" class="col-md-2 control-label"> Kategori Dampak Kecelakaan</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" name="kategori" required>
                                                        <option value="">--Pilih--</option>
                                                        <option value="Ringan">Ringan</option>
                                                        <option value="Sedang">Sedang (2-3 Hari)</option>
                                                        <option value="Berat">Berat (LTI)</option>
                                                        <option value="Cacat Permanen">Cacat Permanen</option>
                                                        <option value="Fatality">Fatality</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <label for="bagian" class="col-md-2 control-label">Bagian tubuh yang cedera</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="bagian" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="message" class="col-md-2 control-label">Kronologi Singkat (Unsafe Action)</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" name="unsafe_action" required></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="message" class="col-md-2 control-label">Kronologi Singkat (Unsafe Condition)</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" name="unsafe_condition" required></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Sumber Bahaya Potensial</label>
                                                <div class="col-md-10">
                                                    <div class="checkbox checkbox-pink">
                                                        <input type="checkbox" name="peralatan" id="hobby1" value="peralatan/pemesianan" data-parsley-mincheck="2">
                                                        <label for="peralatan"> Peralatan / Pemesinan </label>
                                                    </div>
                                                    <div class="checkbox checkbox-pink">
                                                        <input type="checkbox" name="metode" id="hobby2" value="metode kerja">
                                                        <label for="metode"> Metode Kerja </label>
                                                    </div>
                                                    <div class="checkbox checkbox-pink">
                                                        <input type="checkbox" name="lingkungan" id="hobby3" value="lingkungan kerja">
                                                        <label for="lingkungan kerja"> Lingkungan Kerja </label>
                                                    </div>
                                                    <div class="checkbox checkbox-pink">
                                                        <input type="checkbox" name="proses" id="hobby4" value="proses">
                                                        <label for="proses"> Proses </label>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <label for="message" class="col-md-2 control-label">Pengendalian terhadap sumber bahaya</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" name="pengendalian" required></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <div class="col-md-12 text-right ">
                                                    <input type="submit" class="btn btn-success" value="Simpan">
                                                    <a href="<?php echo site_url() ?>Laporan/"><button type="button" class="btn btn-danger">Kembali</button></a>
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