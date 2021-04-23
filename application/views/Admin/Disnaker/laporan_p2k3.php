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
                    <h4 class="header-title m-t-0 m-b-30">Daftar Laporan P2K3</h4>
                    <div class="card-box table-responsive">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Perusahan</th>
                                        <th>Nama Laporan</th>
                                        <th>Tanggal Kadaluwarsa</th>
                                        <th>File Laporan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i = 0;
                                            foreach ($data_laporan_p2k3 as $key) {
                                                $i++; ?>
                                    <tr>     
                                        <th><?= $i ?></th>
                                        <td><?= $key->nama_perusahaan ?></td>
                                        <td><?= $key->nama ?></td>
                                        <td><?= $key->tanggal_laporan ?></td>
                                        <td> <a target="_blank" href="<?php echo base_url()."upload/upload_berkas_laporan_p2k3/".$key->file; ?>">Lihat Laporan</a></td>
                                       
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
                </div>
            </div>
        </div>
    </div>
</body>