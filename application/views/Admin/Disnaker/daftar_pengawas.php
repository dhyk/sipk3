<body class="fixed-left">
    <div id="wrapper">
        <div class="content-page">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <br />
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Daftar nama Pengawas</h4>
                                <div class="card-box table-responsive">
                                    <div class="table-responsive">
                                        <table  id="datatable" class="table table-striped table-bordered">
                                            <a href="<?= site_url() ?>Disnaker/tambah_pengawas"><button class="btn btn-info">Tambah Data</button></a>
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nama</th>
                                                    <th>NIP</th>
                                                    <th>Jabatan</th>
                                                    <th>Nomor Telepon / WA</th>
                                                    <th>Email</th>
                                                    <th>Username</th>
                                                    <th>Password</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                $i = 1;
                                                foreach ($data_pengawas as $key) { ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $i; ?></th>
                                                        <td><?php echo $key->nama; ?></td>
                                                        <td><?php echo $key->nip; ?></td>
                                                        <td><?php echo $key->jabatan; ?></td>
                                                        <td><?php echo $key->no_telp; ?></td>
                                                        <td><?php echo $key->email; ?></td>
                                                        <td><?php echo $key->username;?></td>
                                                        <td><?php echo $key->password;?></td>
                                                        <td>
                                                            <a href="<?php echo base_url() . "index.php/Disnaker/hapus_pengawas?id=" . $key->id_pengawas; ?>"><i class="ion-trash-a"></i>Hapus</a>
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