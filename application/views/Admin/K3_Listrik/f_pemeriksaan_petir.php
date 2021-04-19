<body class="fixed-left">
    <div id="wrapper">
        <div class="content-page">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <br />
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Rekaman Pemeriksaan dan Pengujian Instalasi Penyalur Petir<span class="help-block"><small>*Pastikan Data yang anda masukkan benar</small></span></h4>
                                <div class="card-box table-responsive">
                                    <div class="table-responsive">

                                        <table  id="datatable" class="table table-striped table-bordered">
                                            <a href="<?= site_url() ?>K3listrik/tambah_rekaman_pemeriksaan_petir">
                                                <button class="btn btn-info">Tambah Data</button></a>
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tanggal Pemeriksaan</th>
                                                    <th>File Laporan Pemeriksaan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                $i = 1;
                                                foreach ($data_pemeriksaan_petir as $key) { ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $i; ?></th>
                                                        <td><?php echo $key->tanggal_pemeriksaan; ?></td>
                                                        <td><a target="_blank" href="<?php echo base_url() . "upload/upload_berkas_listrik/" . $key->sertifikat; ?>">Lihat Sertifikat</a></td>
                                                        <td>
                                                            <a href="<?php echo base_url() . 'index.php/K3listrik/hapus_pemeriksaan_petir?id=' . $key->id_pemeriksaan; ?>"><i class="ion-trash-a"></i>Hapus</a>
                                                        </td>
                                                    <?php $i++;
                                                } ?>
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
</body>