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
                    <h4 class="header-title m-t-0 m-b-30">Daftar Pengaduan Norma Ketenagakerjaan</h4>
                    <div class="card-box table-responsive">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Pengadu</th>
                                        <th>Judul Pengaduan</th>
                                        <th>File Pendukung</th>
                                        <th>Tanggal </th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                    <?php 
                                    $i=0;
                                    foreach($data_pengaduan as $key){ 
                                        $i++; 
                                        ?>
                                        <th><?= $i ?></th>
                                        <td><?= $key->nama ?></td>
                                        <td><?= $key->judul ?></td>
                                        <td><a href="<?php echo base_url().'upload/upload_file_pendukung/'.$key->file_pengaduan; ?>" target="blank_"> File Pendukung</a></td>
                                        <td><?= $key->tanggal ?></td>
                                        <td>
                                        <a href="<?= site_url().'Disnaker/detail_pengaduan?id='.$key->id_pengaduan?>"><button class="btn btn-success">Lihat</button></a>
                                        <!-- <button class="btn btn-danger">hapus</button> -->
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
        </div>
    </div>
</body>