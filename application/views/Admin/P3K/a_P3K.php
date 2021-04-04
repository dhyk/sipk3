<body class="fixed-left">
    <div id="wrapper">
        <div class="content-page">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <br />
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">P3K<span class="help-block"><small>*Pastikan Data yang anda masukkan benar</small></span></h4>
                               
                                <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/P3K/simpan_p3k'?>">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Kategori Potensi Bahaya</label>
                                        <div class="col-md-10">
                                            <div class="col-md-10">
                                                <select class="form-control" name="kategori" required <?php if($edit!='1') echo 'disabled'; ?>>
                                                    <?php if($data_p3k!=null) echo "<option>".$data_p3k[0]->kategori."</option>";?>
                                                    <option>Tinggi</option>
                                                    <option>Rendah</option>                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Jumlah Shift Kerja</label>
                                        <div class="col-md-10">
                                            <div class="col-md-10">
                                             <input type="text" class="form-control" placeholder="Masukkan Jumlah Shift" name="shift" <?php if($edit!='1') echo 'readonly=""'; ?> required value="<?php if($data_p3k!=null)echo $data_p3k[0]->jumlah_shift;?>">
                                         </div>
                                     </div>
                                 </div>

                                 <div class="form-group">
                                    <label class="col-md-2 control-label">Jumlah Tenaga Kerja Setiap Shift </label>
                                    <div class="col-md-10">
                                        <div class="col-md-10">
                                         <input type="text" class="form-control" placeholder="Masukkan Jumlah Tenaga Kerja Setiap Shift" name="tenaga" <?php if($edit!='1') echo 'readonly=""'; ?> required value="<?php if($data_p3k!=null)echo $data_p3k[0]->tenaga_kerja;?>">
                                     </div>
                                 </div>
                             </div>

                             <div class="form-group">
                                <label class="col-md-2 control-label">Jumlah Petugas P3K </label>
                                <div class="col-md-10">
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" placeholder="Masukkan Jumlah Petugas P3K" name="petugas" <?php if($edit!='1') echo 'readonly=""'; ?> required value="<?php if($data_p3k!=null)echo $data_p3k[0]->jumlah_petugas;?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="col-md-2 control-label">Orang</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Jumlah Unit Kerja </label>
                                <div class="col-md-10">
                                    <div class="col-md-8">
                                     <input type="text" class="form-control" placeholder="Masukkan Jumlah Unit Kerja" name="unit" <?php if($edit!='1') echo 'readonly=""'; ?> required value="<?php if($data_p3k!=null)echo $data_p3k[0]->jumlah_unit;?>">
                                 </div>
                                 <div class="col-md-2">
                                    <label class="col-md-2 control-label">Unit </label>
                                </div>
                                <br>
                            </div>
                        </div>

                        <div class="form-group clearfix">
                            <label class="col-md-2 control-label">Apakah Menyediakan ruang P3K ? </label>
                            <div class="col-md-10">
                                <div class="col-md-10">
                                   <div class="radio radio-success">
                                    <input type="radio" name="ruang" id="radio4" value="Ya" required <?php if($data_p3k!=null){if($data_p3k[0]->ruang_p3k=="Ya") echo "checked";}?> <?php if($edit!='1') echo 'disabled'; ?>>
                                    <label for="radio4">Ya</label>
                                </div>
                                
                                <div class="radio radio-success">
                                    <input type="radio" name="ruang" id="radio4" value="Tidak" <?php if($data_p3k!=null){if($data_p3k[0]->ruang_p3k=="Tidak") echo "checked";}?> <?php if($edit!='1') echo 'disabled'; ?>>
                                    <label for="radio4">Tidak</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Jumlah Kotak P3k Kategori A </label>
                        <div class="col-sm-10">
                            <div class="col-md-8">
                             <input type="number" class="form-control" placeholder="Masukkan Jumlah Kotak P3K Kategori A" name="p3ka" required <?php if($edit!='1') echo 'readonly=""'; ?> value="<?php if($data_p3k!=null)echo $data_p3k[0]->jumlah_p3ka;?>">
                         </div>
                         <div class="col-md-2">
                             <label class="col-md-2 control-label">Kotak </label>
                         </div>
                     </div>
                 </div>



                 <div class="form-group">
                    <label class="col-md-2 control-label">Jumlah Kotak P3k Kategori B </label>
                    <div class="col-sm-10">
                        <div class="col-md-8">
                         <input type="number" class="form-control" placeholder="Masukkan Jumlah Kotak P3K Kategori B" name="p3kb" required <?php if($edit!='1') echo 'readonly=""'; ?> value="<?php if($data_p3k!=null)echo $data_p3k[0]->jumlah_p3kb;?>">
                     </div>
                     <div class="col-md-2">
                         <label class="col-md-2 control-label">Kotak </label>
                     </div>
                 </div>
             </div>

             <div class="form-group">
                <label class="col-md-2 control-label">Jumlah Kotak P3k Kategori C </label>
                <div class="col-md-10">
                    <div class="col-md-8">
                     <input type="number" class="form-control" placeholder="Masukkan Jumlah Kotak P3K Kategori C" name="p3kc" required <?php if($edit!='1') echo 'readonly=""'; ?> value="<?php if($data_p3k!=null)echo $data_p3k[0]->jumlah_p3kc;?>">
                 </div>
                 <div class="col-md-2">
                     <label class="col-md-2 control-label">Kotak </label>
                 </div>
             </div>
         </div>
         <div class="form-group m-b-0">
            <div class="col-sm-offset-10 col-sm-12">
                <button type="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
                <a href="<?php echo base_url().'index.php/P3K?edit=1'; ?>" class="btn btn-warning waves-effect waves-light">Ubah</a>
                                                    
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
</body>