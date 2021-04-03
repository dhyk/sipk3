<body class="fixed-left">
    <div id="wrapper">
        <div class="content-page">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <br />
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Sertifikat Izin Pemakaian Kelayakan Instalasi Listrik<span class="help-block"><small>*Pastikan Data yang anda masukkan benar</small></span></h4>
                                <div class="card-box table-responsive">
                                    <div class="table-responsive">

                                        <table class="table m-0">
                                            <a href="<?= site_url() ?>K3listrik/tambah_kelayakan_listrik">
                                                <button class="btn btn-info">Tambah Data</button></a>
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>No. Sertfikat</th>
                                                    <th>Tanggal Terbit</th>
                                                    <th>Masa Berlaku</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                foreach ($data_ijin_listrik as $key) { ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $i; ?></th>
                                                        <td><?php echo $key->sertifikat; ?></td>
                                                        <td><?php echo $key->tanggal_terbit; ?></td>
                                                        <td><?php echo $key->masa_berlaku; ?></td>
                                                        <td>

                                                            <a href="<?php echo base_url() . 'index.php/K3listrik/hapus_ijin_listrik?id=' . $key->id_ijin_listrik; ?>"><i class="ion-trash-a"></i>Hapus</a>
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