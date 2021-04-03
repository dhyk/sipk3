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
                                                <select class="form-control" name="kategori" required>
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
                                             <input type="text" class="form-control" placeholder="Masukkan Jumlah Shift" name="shift" required>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="form-group">
                                    <label class="col-md-2 control-label">Jumlah Tenaga Kerja Setiap Shift </label>
                                    <div class="col-md-10">
                                        <div class="col-md-10">
                                         <input type="text" class="form-control" placeholder="Masukkan Jumlah Tenaga Kerja Setiap Shift" name="tenaga" required>
                                     </div>
                                 </div>
                             </div>

                             <div class="form-group">
                                <label class="col-md-2 control-label">Jumlah Petugas P3K </label>
                                <div class="col-md-10">
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" placeholder="Masukkan Jumlah Petugas P3K" name="petugas" required>
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
                                     <input type="text" class="form-control" placeholder="Masukkan Jumlah Unit Kerja" name="unit" required>
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
                                    <input type="radio" name="ruang" id="radio4" value="Ya" required>
                                    <label for="radio4">Ya</label>
                                </div>

                                <div class="radio radio-success">
                                    <input type="radio" name="ruang" id="radio4" value="Tidak">
                                    <label for="radio4">Tidak</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Jumlah Kotak P3k Kategori A </label>
                        <div class="col-sm-10">
                            <div class="col-md-8">
                             <input type="number" class="form-control" placeholder="Masukkan Jumlah Kotak P3K Kategori A" name="p3ka" required>
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
                         <input type="number" class="form-control" placeholder="Masukkan Jumlah Kotak P3K Kategori B" name="p3kb" required>
                     </div>
                     <div class="col-md-2">
                         <label class="col-md-2 control-label">Kotak </label>
                     </div>
                 </div>
             </div>

             <div class="form-group">
                <label class="col-md-2 control-label">Jumlah Kotak P3k Kategori c </label>
                <div class="col-md-10">
                    <div class="col-md-8">
                     <input type="number" class="form-control" placeholder="Masukkan Jumlah Kotak P3K Kategori C" name="p3kc" required>
                 </div>
                 <div class="col-md-2">
                     <label class="col-md-2 control-label">Kotak </label>
                 </div>
             </div>
         </div>
         <div class="form-group m-b-0">
            <div class="col-sm-offset-10 col-sm-12">
                <button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
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