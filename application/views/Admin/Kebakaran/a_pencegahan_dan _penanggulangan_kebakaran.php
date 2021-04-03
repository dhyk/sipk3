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
        <div class="card-box ">
        <?php echo form_open_multipart('index.php/Kebakaran/simpan_kebakaran_utama');?>
            <div class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Jumlah karyawan di tempat kerja</label>
                                        <div class="col-md-10">
                                            <input type="number" class="form-control" value="<?php if($data_kebakaran!=null){ echo $data_kebakaran[0]->jumlah_karyawan;}?>" required name=jumlah_karyawan>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Jumlah unit kerja di tempat kerja</label>
                                        <div class="col-md-10">
                                            <input type="number" class="form-control" value="<?php if($data_kebakaran!=null){ echo $data_kebakaran[0]->jumlah_unit;}?>" required name="jumlah_unit">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Sumber potensi bahaya kebakaran</label>
                                        <div class="col-md-10">
                                            <select class="form-control" required name="sumber_potensi" value="<?php if($data_kebakaran!=null){ echo $data_kebakaran[0]->sumber_potensi;}?>">
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
                                            <select class="form-control" required name="klasifikasi_potensi" value="<?php if($data_kebakaran!=null){ echo $data_kebakaran[0]->klasifikasi_potensi;}?>">
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
                                            <select class="form-control" required name="asal_sumber" value="<?php if($data_kebakaran!=null){ echo $data_kebakaran[0]->asal_sumber;}?>">
                                                <option>Internal</option>
                                                <option>Eksternal</option>            
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Sistem pencegahan kebakaran</label>
                                        <div class="col-md-10">
                                            <select class="form-control" required name="sistem_pencegahan" value="<?php if($data_kebakaran!=null){ echo $data_kebakaran[0]->sistem_pencegahan;}?>">
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
                                            <input type="number" class="form-control" required name="jumlah_petugas" value="<?php if($data_kebakaran!=null){ echo $data_kebakaran[0]->jumlah_petugas;}?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Jumlah koordinator unit penanggulangan kebakaran </label>
                                        <div class="col-md-10">
                                            <input type="number" class="form-control"required name="jumlah_koordinator" value="<?php if($data_kebakaran!=null){ echo $data_kebakaran[0]->jumlah_koordinator;}?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Masukkan File</label>
                                        <div class="col-md-10">
                                              <input type="file" name="berkas_penanggulangan" required id="filer_input2" multiple="multiple"
                                              value="<?php if($data_kebakaran!=null){ echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_penanggulangan;}?>">
                                              <span class="help-block"><small><a target="_blank" href="<?php echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_penanggulangan;?>">>>lihat dokumen disini<<</a></small></span>
                                              <span class="help-block"><small>Prosedur Penanggulangan Kebakaran (Max 2MB)</small></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Masukkan File</label>
                                        <div class="col-md-10">
                                            <input type="file" name="berkas_kerja" required id="filer_input2" multiple="multiple"
                                            value="<?php if($data_kebakaran!=null){ echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;}?>">
                                            <span class="help-block"><small><a target="_blank" href="<?php echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_kerja;?>">>>lihat dokumen disini<<</a></small></span>
                                            <span class="help-block"><small>Prosedur Kerja untuk Mencegah Kebakaran (Max 2MB)</small></span>                   
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Masukkan File</label>
                                        <div class="col-md-10">
                                            <input type="file" name="berkas_regu" required id="filer_input2" multiple="multiple"
                                            value="<?php if($data_kebakaran!=null){ echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_regu;}?>">
                                            <span class="help-block"><small><a target="_blank" href="<?php echo base_url().'upload/upload_berkas_kebakaran/'.$data_kebakaran[0]->file_regu;?>">>>lihat dokumen disini<<</a></small></span>
                                            <span class="help-block"><small>Regu penanggulangan kebakaran (Max 2MB)</small></span>
                                        </div>

                                    </div>

                                    <div class="col-sm-offset-10 col-sm-12">
                                                    <button type="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
                                                    <?php //echo form_close(); ?>
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