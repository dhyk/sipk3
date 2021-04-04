<?php error_reporting(0); ini_set('display_errors', 0);?>
<body class="fixed-left">
    <div id="wrapper">
        <div class="content-page">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <br />
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Pencegahan dan Penanggulangan Kebakaran <span class="help-block"><small>*Pastikan Data yang anda masukkan benar</small></span></h4>

                                <?php echo form_open_multipart('index.php/Kebakaran/simpan_kebakaran_utama'); ?>
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Jumlah karyawan di tempat kerja</label>
                                        <div class="col-md-10">
                                            <input type="number" class="form-control" <?php if ($edit != '1') echo 'readonly=""'; ?> value="<?php if ($data_kebakaran != null) {
                                                                                                                                                echo $data_kebakaran[0]->jumlah_karyawan;
                                                                                                                                            } ?>" required name=jumlah_karyawan>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Jumlah unit kerja di tempat kerja</label>
                                        <div class="col-md-10">
                                            <input type="number" class="form-control" <?php if ($edit != '1') echo 'readonly=""'; ?> value="<?php if ($data_kebakaran != null) {
                                                                                                                                                echo $data_kebakaran[0]->jumlah_unit;
                                                                                                                                            } ?>" required name="jumlah_unit">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Sumber Potensi Bahaya Kebakaran</label>
                                        <div class="col-md-3">
                                            <div class="checkbox checkbox-pink">
                                                <input type="checkbox" name="sumber_potensi1" id="hobby1" value="Bahan Kimia Berbahaya" <?php if ($edit != '1') echo 'disabled'; ?> <?php if ($data_kebakaran != null) {
                                                                                                                                                                                        if ($sumber[0] == "Bahan Kimia Berbahaya") echo 'checked';
                                                                                                                                                                                    } ?>>
                                                <label for="peralatan">Bahan Kimia Berbahaya </label>
                                            </div>
                                            <div class="checkbox checkbox-pink">
                                                <input type="checkbox" name="sumber_potensi2" id="hobby2" value="Limbah B3" <?php if ($edit != '1') echo 'disabled'; ?> <?php if ($data_kebakaran != null) {
                                                                                                                                                                            if ($sumber[1] == "Limbah B3") echo 'checked';
                                                                                                                                                                        } ?>>
                                                <label for="metode"> Limbah B3 </label>
                                            </div>
                                            <div class="checkbox checkbox-pink">
                                                <input type="checkbox" name="sumber_potensi3" id="hobby3" value="Peralatan Listrik" <?php if ($edit != '1') echo 'disabled'; ?> <?php if ($data_kebakaran != null) {
                                                                                                                                                                                    if ($sumber[2] == "Peralatan Listrik") echo 'checked';
                                                                                                                                                                                } ?>>
                                                <label for="lingkungan kerja"> Peralatan Listrik </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="checkbox checkbox-pink">
                                                <input type="checkbox" name="sumber_potensi4" id="hobby1" value="Instalasi Listrik" <?php if ($edit != '1') echo 'disabled'; ?> <?php if ($data_kebakaran != null) {
                                                                                                                                                                                    if ($sumber[3] == "Instalasi Listrik") echo 'checked';
                                                                                                                                                                                } ?>>
                                                <label for="peralatan"> Instalasi Listrik </label>
                                            </div>
                                            <div class="checkbox checkbox-pink">
                                                <input type="checkbox" name="sumber_potensi5" id="hobby2" value="Material Mudah Terbakar" <?php if ($edit != '1') echo 'disabled'; ?> <?php if ($data_kebakaran != null) {
                                                                                                                                                                                        if ($sumber[4] == "Material Mudah Terbakar") echo 'checked';
                                                                                                                                                                                    } ?>>
                                                <label for="metode"> Material Mudah Terbakar</label>
                                            </div>
                                            <div class="checkbox checkbox-pink">
                                                <input type="checkbox" name="sumber_potensi6" id="hobby3" value="Proses Produksi" <?php if ($edit != '1') echo 'disabled'; ?> <?php if ($data_kebakaran != null) {
                                                                                                                                                                                if ($sumber[5] == "Proses Produksi") echo 'checked';
                                                                                                                                                                            } ?>>
                                                <label for="lingkungan kerja"> Proses Produksi / Jasa </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="checkbox checkbox-pink">
                                                <input type="checkbox" name="sumber_potensi7" id="hobby1" value="Kegiatan Produksi dan Jasa" <?php if ($edit != '1') echo 'disabled'; ?> <?php if ($data_kebakaran != null) {
                                                                                                                                                                                            if ($sumber[6] == "Kegiatan Produksi dan Jasa") echo 'checked';
                                                                                                                                                                                        } ?>>
                                                <label for="peralatan"> Kegiatan Produksi dan Jasa </label>
                                            </div>
                                            <div class="checkbox checkbox-pink">
                                                <input type="checkbox" name="sumber_potensi8" id="hobby2" value="Lingkungan" <?php if ($edit != '1') echo 'disabled'; ?> <?php if ($data_kebakaran != null) {
                                                                                                                                                                            if ($sumber[7] == "Lingkungan") echo 'checked';
                                                                                                                                                                        } ?>>
                                                <label for="metode"> Lingkungan </label>
                                            </div>
                                            <div class="checkbox checkbox-pink">
                                                <input type="checkbox" name="sumber_potensi9" id="hobby3" value="Lainnya" <?php if ($edit != '1') echo 'disabled'; ?> <?php if ($data_kebakaran != null) {
                                                                                                                                                                        if ($sumber[8] == "Lainnya") echo 'checked';
                                                                                                                                                                    } ?>>
                                                <label for="lingkungan kerja"> Lainnya </label>
                                            </div>
                                        </div>


                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Klasifikasi tingkat potensi bahaya kebakaran</label>
                                        <div class="col-md-10">
                                            <select class="form-control" required name="klasifikasi_potensi" <?php if ($edit != '1') echo 'disabled'; ?>>
                                                <?php if ($data_kebakaran != null) echo "<option>" . $data_kebakaran[0]->klasifikasi . "</option>"; ?>
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
                                            <select class="form-control" required name="asal_sumber" <?php if ($edit != '1') echo 'disabled'; ?>>
                                                <?php if ($data_kebakaran != null) echo "<option>" . $data_kebakaran[0]->asal_sumber . "</option>"; ?>
                                                <option>Internal</option>
                                                <option>Eksternal</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Sistem pencegahan kebakaran</label>
                                        <div class="col-md-3">
                                            <div class="checkbox checkbox-pink">

                                                <input type="checkbox" name="sistem_pencegahan1" id="hobby1" value="Pemasangan APAR" <?php if ($edit != '1') echo 'disabled'; ?> <?php if ($data_kebakaran != null) {
                                                                                                                                                                                    if ($sistem[0] == "Pemasangan APAR") echo 'checked';
                                                                                                                                                                                } ?>>
                                                <label for="peralatan">Pemasangan APAR </label>
                                            </div>
                                            <div class="checkbox checkbox-pink">
                                                <input type="checkbox" name="sistem_pencegahan2" id="hobby2" value="Pemasangan Alarm" <?php if ($edit != '1') echo 'disabled'; ?> <?php if ($data_kebakaran != null) {
                                                                                                                                                                                    if ($sistem[1] == "Pemasangan Alarm") echo 'checked';
                                                                                                                                                                                } ?>>
                                                <label for="metode"> Pemasangan Alarm </label>
                                            </div>
                                            <div class="checkbox checkbox-pink">
                                                <input type="checkbox" name="sistem_pencegahan3" id="hobby3" value="Pemasangan Sprinkler" <?php if ($edit != '1') echo 'disabled'; ?> <?php if ($data_kebakaran != null) {
                                                                                                                                                                                        if ($sistem[2] == "Pemasangan Sprinkler") echo 'checked';
                                                                                                                                                                                    } ?>>
                                                <label for="lingkungan kerja"> Pemasangan Sprinkler </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="checkbox checkbox-pink">
                                                <input type="checkbox" name="sistem_pencegahan4" id="hobby1" value="Pemasangan Hydrant" <?php if ($edit != '1') echo 'disabled'; ?> <?php if ($data_kebakaran != null) {
                                                                                                                                                                                        if ($sistem[3] == "Pemasangan Hydrant") echo 'checked';
                                                                                                                                                                                    } ?>>
                                                <label for="peralatan"> Pemasangan Hydrant </label>
                                            </div>
                                            <div class="checkbox checkbox-pink">
                                                <input type="checkbox" name="sistem_pencegahan5" id="hobby2" value="Pemasangan Smoke Detector" <?php if ($edit != '1') echo 'disabled'; ?> <?php if ($data_kebakaran != null) {
                                                                                                                                                                                            if ($sistem[4] == "Pemasangan Smoke Detector") echo 'checked';
                                                                                                                                                                                        } ?>>
                                                <label for="metode"> Pemasangan Smoke Detector</label>
                                            </div>

                                        </div>



                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Jumlah Petugas Kebakaran </label>
                                        <div class="col-md-10">
                                            <input type="number" class="form-control" <?php if ($edit != '1') echo 'readonly=""'; ?> required name="jumlah_petugas" value="<?php if ($data_kebakaran != null) {
                                                                                                                                                                            echo $data_kebakaran[0]->jumlah_petugas;
                                                                                                                                                                        } ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Jumlah koordinator unit penanggulangan kebakaran </label>
                                        <div class="col-md-10">
                                            <input type="number" class="form-control" <?php if ($edit != '1') echo 'readonly=""'; ?> required name="jumlah_koordinator" value="<?php if ($data_kebakaran != null) {
                                                                                                                                                                                echo $data_kebakaran[0]->jumlah_koordinator;
                                                                                                                                                                            } ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Prosedur Penanggulangan Kebakaran</label>
                                        <div class="col-md-10">
                                            <input type="file" name="berkas_penanggulangan" <?php if ($edit != '1') echo 'disabled'; ?> required id="filer_input2" multiple="multiple" value="<?php if ($data_kebakaran != null) {
                                                                                                                                                                                                echo base_url() . 'upload/upload_berkas_kebakaran/' . $data_kebakaran[0]->file_penanggulangan;
                                                                                                                                                                                            } ?>">
                                             <?php if ($data_kebakaran != null){?>
                                                <span class="help-block"><small><a target="_blank" href="<?php echo base_url() . 'upload/upload_berkas_kebakaran/' . $data_kebakaran[0]->file_penanggulangan; ?>">>>lihat dokumen disini<<</a></small></span>
                                                <?php }?> 
                                                <span class="help-block"><small>Masukkan File (Max 2MB)</small></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Prosedur Kerja untuk Mencegah Kebakaran</label>
                                        <div class="col-md-10">
                                            <input type="file" name="berkas_kerja" <?php if ($edit != '1') echo 'disabled'; ?> required id="filer_input2" multiple="multiple" value="<?php if ($data_kebakaran != null) {
                                                                                                                                                                                        echo base_url() . 'upload/upload_berkas_kebakaran/' . $data_kebakaran[0]->file_kerja;
                                                                                                                                                                                    } ?>">
                                             <?php if ($data_kebakaran != null){?>
                                                <span class="help-block"><small><a target="_blank" href="<?php echo base_url() . 'upload/upload_berkas_kebakaran/' . $data_kebakaran[0]->file_kerja; ?>">>>lihat dokumen disini<<</a></small></span>
                                                <?php }?> 
                                                <span class="help-block"><small>Masukkan File (Max 2MB)</small></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Regu penanggulangan kebakaran</label>
                                        <div class="col-md-10">
                                            <input type="file" name="berkas_regu" <?php if ($edit != '1') echo 'disabled'; ?> required id="filer_input2" multiple="multiple" value="<?php if ($data_kebakaran != null) {
                                                                                                                                                                                        echo base_url() . 'upload/upload_berkas_kebakaran/' . $data_kebakaran[0]->file_regu;
                                                                                                                                                                                    } ?>">
                                           <?php if ($data_kebakaran != null){?>
                                           <span class="help-block"><small><a target="_blank" href="<?php echo base_url() . 'upload/upload_berkas_kebakaran/' . $data_kebakaran[0]->file_regu; ?>">>>lihat dokumen disini<<</a></small></span>
                                           <?php }?> 
                                           <span class="help-block"><small>Masukkan File (Max 2MB)</small></span>
                                        </div>



                                        <div class="col-sm-offset-10 col-sm-12">
                                            <button type="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
                                            <a href="<?php echo base_url() . 'index.php/Kebakaran?edit=1'; ?>" class="btn btn-warning waves-effect waves-light">Ubah</a>
                                            <?php //echo form_close(); 
                                            ?>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>