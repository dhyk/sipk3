<body class="fixed-left">
    <div id="wrapper">
        <div class="content-page">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <br />
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Sertifikat/Izin pemakaian instalasi pemadam kebakaran<span class="help-block"><small>*Pastikan Data yang anda masukkan benar</small></span></h4>
                                <div class="card-box table-responsive">
                                    <div class="table-responsive">
                                        <table id="datatable" class="table table-striped table-bordered">
                                            <!-- <a href="<?= site_url() ?>Kebakaran/tambah_izin_instalasi_pemadam">
                                                <button class="btn btn-info">Tambah Data</button></a> -->
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tanggal Pemeriksaan</th>
                                                    <th>Masa Berlaku</th>
                                                    <th>File Sertifikat</th>

                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                $i = 1;
                                                foreach ($data_instalasi as $key) { ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $i; ?></th>
                                                        <td><?php echo $key->tanggal_periksa; ?></td>
                                                        <td><?php echo $key->masa_berlaku; ?></td>
                                                        <td><a target="_blank" href="<?php echo base_url() . "upload/upload_berkas_kebakaran/" . $key->file_sertifikat; ?>">Lihat Sertifikat</a></td>

                                                        <td>
                                                            <a href="<?php echo base_url() . "index.php/Kebakaran/hapus_kebakaran_instalasi?id=" . $key->id_instalasi; ?>"><i class="ion-trash-a"></i>Hapus</a>
                                                        </td>
                                                    </tr>
                                                    <?php $i++;
                                                } ?>
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