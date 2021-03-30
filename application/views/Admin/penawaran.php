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
                                    <thead>
                                        <tr>
                                            <th>Nama Klien</th>
                                            <th>Pejabat</th>
                                            <!-- <th>Alamat</th> -->
                                            <!-- <th>Telepon</th> -->
                                            <!-- <th>Referensi</th> -->
                                            <th>Jenis Pekerjaan</th>
                                            <th>Barang/Objek</th>
                                            <!-- <th>Lokasi</th> -->
                                            <th>Penawaran Harga</th>
                                            <!-- <th>Ketentuan Penawaran</th> -->
                                            <!-- <th>Lingkup Kerja</th> -->
                                            <!-- <th>Jangka Waktu</th> -->
                                            <!-- <th>Termin Pembayaran</th> -->
                                            <th> Status </th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>


                                    <tbody>

                                        <?php foreach($data_penawaran as $isi) {?>
                                            <tr>
                                                <td><?php echo $isi->klien; ?></td>
                                                <td><?php echo $isi->pejabat; ?></td>
                                                <!-- <td><?php //echo $isi->alamat; ?></td> -->
                                                <!-- <td><?php //echo $isi->telepon; ?></td> -->
                                                <!-- <td><?php //echo $isi->referensi; ?></td> -->
                                                <td><?php echo $isi->jenis_pekerjaan; ?></td>
                                                <td><?php echo $isi->barang_objek; ?></td>
                                                <!-- <td><?php //echo $isi->lokasi; ?></td> -->
                                                <td><?php echo $isi->penawaran_harga; ?></td>
                                                <!-- <td><?php //echo $isi->ketentuan_penawaran; ?></td> -->
                                                <!-- <td><?php //echo $isi->lingkup_kerja; ?></td> -->
                                                <!-- <td><?php //echo $isi->jangka_waktu; ?></td> -->
                                                <!-- <td><?php //echo $isi->termin_pembayaran; ?></td> -->
                                                <td><?php if($isi->status=='1'){?>
                                                    <span class="badge badge-pill badge-primary">Diajukan                                                    </span>
                                                <?php }else if($isi->status=='2'){ ?>
                                                    <span class="badge badge-pill badge-success">Diterima                                                    </span>
                                                <?php }else{ ?>
                                                    <span class="badge badge-pill badge-danger">Ditolak                                                    </span>
                                                    <?php } ?></td>
                                                    <td><a href="<?php echo base_url().'Admin/terima_tawaran?id='.$isi->id_penawaran;?>"><button class="btn btn-success">Lihat</button></a>
                                                       <!--  <a href="<?php echo base_url().'Admin/terima_tawaran?id='.$isi->id_penawaran;?>"><button>terima</button></a> -->
                                                        <button class="btn btn-danger">hapus</button></td>
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