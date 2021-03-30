<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                               <h3 class="text-center">FORM PENERIMAAN PENAWARAN</h3>

                               <?php foreach ($data_penawaran as $key){ ?>
                                <form method="post" action="<?php echo base_url().'Admin/terima_harga';?>">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Nama Klien</label>
                                        <!-- <div class="col-10"> -->
                                            <label for="example-text-input" class="col-2 col-form-label">:</label>
                                            <!-- <label for="example-text-input" class="col-2 col-form-label"><b><?php echo $key->klien; ?></b></label> -->
                                            <input type="text" class="form-control" placeholder="Masukkan nama produk" name="nama_produk" value="<?php echo $key->klien; ?>" disabled>
                                            <!-- </div> -->
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Pejabat</label>
                                            <label for="example-text-input" class="col-2 col-form-label">:</label>
                                            <!-- <div class="col-10"> -->
                                                <!-- <label for="example-text-input" class="col-2 col-form-label"><b><?php echo $key->pejabat; ?></b></label> -->
                                                <input type="text" class="form-control" placeholder="Masukkan nama produk" name="nama_produk" value="<?php echo $key->pejabat; ?>" disabled>
                                                <!-- </div> -->
                                            </div>
                                            <div class="form-group row">
                                                <label for="exampleFormControlTextarea1" class="col-2 col-form-label">Alamat</label>
                                                <label for="example-text-input" class="col-2 col-form-label">:</label>
                                                <!-- <div class="col-10"> -->
                                                    <!-- <label for="example-text-input" class="col-2 col-form-label"><b><?php echo $key->alamat; ?></b></label> -->
                                                    <input type="text" class="form-control" placeholder="Masukkan nama produk" name="nama_produk" value="<?php echo $key->alamat; ?>" disabled>
                                                    <!-- </div> -->
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-tel-input" class="col-2 col-form-label">Nomor Telepon/Faks</label>
                                                    <label for="example-text-input" class="col-2 col-form-label">:</label>
                                                    <!-- <div class="col-10"> -->
                                                        <!-- <label for="example-text-input" class="col-2 col-form-label"><b><?php echo $key->telepon; ?></b></label> -->
                                                        <input type="text" class="form-control" placeholder="Masukkan nama produk" name="nama_produk" value="<?php echo $key->telepon; ?>" disabled>
                                                        <!-- </div> -->
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-text-input" class="col-2 col-form-label">Referensi</label>
                                                        <label for="example-text-input" class="col-2 col-form-label">:</label>
                                                        <!-- <div class="col-10"> -->
                                                           <!--  <label for="example-text-input" class="col-2 col-form-label"><b><?php echo $key->referensi; ?></b></label> -->
                                                           <input type="text" class="form-control" placeholder="Masukkan nama produk" name="nama_produk" value="<?php echo $key->referensi; ?>" disabled>
                                                           <!-- </div> -->
                                                       </div>
                                                       <div class="form-group row">
                                                        <label for="exampleFormControlSelect1" class="col-2 col-form-label">Jenis Pekerjaan</label>
                                                        <label for="example-text-input" class="col-2 col-form-label">:</label>
                                                        <!-- <div class="col-10"> -->
                                                            <!-- <label for="example-text-input" class="col-2 col-form-label"><b><?php echo $key->jenis_pekerjaan; ?></b></label> -->
                                                            <input type="text" class="form-control" placeholder="Masukkan nama produk" name="nama_produk" value="<?php echo $key->jenis_pekerjaan; ?>" disabled>
                                                            <!-- </div> -->
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-2 col-form-label">Barang/Obyek</label>
                                                            <label for="example-text-input" class="col-2 col-form-label">:</label>
                                                            <!-- <div class="col-10"> -->
                                                             <!-- <label for="example-text-input" class="col-2 col-form-label"><b><?php echo $key->barang_objek; ?></b></label> -->
                                                             <input type="text" class="form-control" placeholder="Masukkan nama produk" name="nama_produk" value="<?php echo $key->barang_objek; ?>" disabled>
                                                             <!-- </div> -->
                                                         </div>
                                                         <div class="form-group row">
                                                            <label for="example-text-input" class="col-2 col-form-label">Lokasi</label>
                                                            <label for="example-text-input" class="col-2 col-form-label">:</label>
                                                            <!-- <div class="col-10"> -->
                                                                <!-- <label for="example-text-input" class="col-2 col-form-label"><b><?php echo $key->lokasi; ?></b></label> -->
                                                                <input type="text" class="form-control" placeholder="Masukkan nama produk" name="nama_produk" value="<?php echo $key->lokasi; ?>" disabled>
                                                                <!-- </div> -->
                                                            </div>
                                                            <!-- ------------------------------------------------------------ -->
                                                            <div class="form-group row">
                                                                <label for="example-text-input" class="col-2 col-form-label">Harga</label>
                                                                <div class="col-10">
                                                                    <input requiered name="harga" class="form-control" type="text" value="" id="example-text-input">
                                                                </div>
                                                            </div>

                                                            <div class="line"></div>
                                                            <h4 class="text-center"><b>Uraian dan Ketentuan</b></h4>
                                                            <br>

                                                            <div class="form-group row">
                                                                <label for="exampleFormControlTextarea1" class="col-2 col-form-label">Ketentuan Penawaran</label>
                                                                <div class="col-10">
                                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required name="ketentuan"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="example-text-input" class="col-2 col-form-label">Lingkup Kerja</label>
                                                                <div class="col-10">
                                                                    <input required name="lingkup_kerja" class="form-control" type="text" value="" id="example-text-input">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="example-text-input" class="col-2 col-form-label">Jangka Waktu Pelaksanaan</label>
                                                                <div class="col-10">
                                                                    <input class="form-control" type="text" value="" id="example-text-input" name="jangka_waktu" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="example-text-input" class="col-2 col-form-label">Termin Pembayaran</label>
                                                                <div class="col-10">
                                                                    <input class="form-control" type="text" value="" id="example-text-input" required name="termin">
                                                                </div>
                                                            </div>
               <!--  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Jangka Waktu Pelaksanaan</label>
                    <div class="col-10">
                        <p>1 (satu) bulan sejak diterbitkannya surat penawaran harga ini </p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Rekening Bank</label>
                    <div class="col-10">
                        <p>PT. Surveyor Indonesia
                            <br>Rupiah AC 0394.01.000079303
                            <br>BRI Cabang Kapas Krampung
                            <br>S U R A B A Y A </p>
                        </div>
                    </div> -->
                    <input type="hidden" name="id_penawaran" value="<?php echo $id_penawaran; ?>">
                    <div class="form-group row">
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn m-t-20 btn-success">Terima Penawaran</button>
                            <a href="<?php echo site_url()?>Admin/penawaran"><button type="button" class=" btn m-t-20 btn btn-danger">Kembali</button></a>
                        </div>
                         
                    </div>
                </form>
            <?php } ?>

        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</body>