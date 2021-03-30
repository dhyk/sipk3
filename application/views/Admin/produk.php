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
                            <div class="card-box table-responsive">
                                <h4 class="m-t-0 header-title"><b>Produk</b></h4> 
                                <table id="datatable-colvid" class="table table-striped table-bordered">
                                    <a href="<?=site_url ()?>Admin/tambahproduk">
                                        <button class="btn btn-info">Tambah Produk</button></a> 
                                    <br>
                                    <thead>
                                        <tr>
                                            <!-- <th>ID</th> -->
                                            <th>Foto ScreenShoot / Logo</th>
                                            <th>Nama Produk</th>
                                            <th>Detail</th>
                                            <th>Link Demo</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php foreach($data_produk as $isi) {?>
                                            <tr>
                                               <!--  <td><?php echo $isi->id_produk; ?></td> -->
                                                <td><?php echo $isi->foto ;?></td>
                                                <td><?php echo $isi->nama_produk; ?></td>
                                                <td><?php echo $isi->detail; ?></td>
                                                <td><?php echo $isi->link; ?></td>
                                                <td>
                                                    <a href="<?php echo base_url()?>Admin/hapusproduk/<?php echo $isi->id_produk ?>" class="btn btn-warning tombol-ubah" role="button">ubah</a>
                                                    <a href="<?php echo base_url()?>Admin/hapusproduk/<?php echo $isi->id_produk ?>" class="btn btn-danger tombol-hapus" role="button">Hapus</a>

                                                     <!-- <a href="<?php echo base_url()?>Admin/hapusproduk/<?php echo $isi->nama_produk ?>"><button type="button" class="btn btn-danger tombol-hapus">Hapus</button></a> -->
                                                </td>
                                            </tr>
                                        <?php } ?>


                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
</body>
