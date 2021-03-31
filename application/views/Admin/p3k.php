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
                            <h4 class="header-title m-t-0 m-b-30">P3K</h4>

                            <div class="col-md-12">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Kategori Potensi Bahaya</label>
                                        <div class="col-md-10">
                                            <div class="col-md-10">
                                                <select class="form-control">
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
                                             <input type="text" class="form-control" placeholder="Masukkan Jumlah Shift" name="jumlah_shift" required>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="form-group">
                                    <label class="col-md-2 control-label">Jumlah Tenaga Kerja Setiap Shift </label>
                                    <div class="col-md-10">
                                        <div class="col-md-10">
                                         <input type="text" class="form-control" placeholder="Masukkan Jumlah Tenaga Kerja Setiap Shift" name="jumlah_tenaga_kerja/shift" required>
                                     </div>
                                 </div>
                             </div>

                             <div class="form-group">
                                <label class="col-md-2 control-label">Jumlah Petugas P3K </label>
                                <div class="col-md-10">
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" placeholder="Masukkan Jumlah Petugas P3K" name="jumlah_petugas_p3k" required>
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
                                     <input type="text" class="form-control" placeholder="Masukkan Jumlah Unit Kerja" name="jumlah_unit_kerja" required>
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
                                    <input type="radio" name="radio" id="radio4" value="option4">
                                    <label for="radio4">Ya</label>
                                </div>

                                <div class="radio radio-success">
                                    <input type="radio" name="radio" id="radio4" value="option4">
                                    <label for="radio4">Tidak</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Jumlah Kotak P3k Kategori A </label>
                        <div class="col-sm-10">
                            <div class="col-md-8">
                             <input type="number" class="form-control" placeholder="Masukkan Jumlah Kotak P3K Kategori A" name="jumlah_kategori_a" required>
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
                         <input type="number" class="form-control" placeholder="Masukkan Jumlah Kotak P3K Kategori B" name="jumlah_kategori_b" required>
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
                     <input type="number" class="form-control" placeholder="Masukkan Jumlah Kotak P3K Kategori C" name="jumlah_kategori_c" required>
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
<br>

<ul class="nav nav-tabs">
    <li class="active">
        <a href="#9" data-toggle="tab" aria-expanded="true">
            <span class="visible-xs"><i class="fa fa-home"></i></span>
            <span class="hidden-xs">Petugas</span> <br>
            <span class="hidden-xs">kebakaran</span>
        </a>
    </li>
</ul>

<div class="tab-content">

    <div class="tab-pane active" id="9">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title"><b>Daftar nama petugas P3K</b></h4> 

                    <div class="table-responsive">
                        <table class="table m-0">
                            <a href="<?=site_url ()?>P3K/tambah_petugas">
                                <button class="btn btn-info">Tambah Data</button></a> 
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Petugas</th>
                                        <th>No.Sertfikat </th>
                                        <th>Tanggal Terbit</th>
                                        <th>Masa Berlaku</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>
                                            <a href="" ><i class="ion-eye"></i>Lihat</a>
                                            <a href=""><i class="ion-edit"></i>Edit</a>
                                            <a href=""><i class="ion-trash-a"></i>Hapus</a>
                                        </td>

                                    </tr>
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