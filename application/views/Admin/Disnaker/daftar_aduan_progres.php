<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <div class="row">
<br>

            </div>
            <!-- end row -->

            <div class="card-box table-responsive">
                                <h4 class="m-t-0 header-title"><b>Daftar Tugas</b></h4>
                                <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Judul Pengaduan</th>
                                    <!-- <th>Jenis Pengaduan</th> -->
                                    <th>Nama Perusahaan</th>
                                    <th>Nama Pengawas 1</th>
                                    <th>Nama Pengawas 2</th>
                                    <th>No.SPT</th>
                                    <th>Tanggal Pengaduan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                    <!-- <th>Aksi</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data_tugas as $key) { ?>
                                    <tr>
                                        <td><?= $key->nama ?></td>
                                        <td><?= $key->judul ?></td>
                                        <td><?= $key->nama_perusahaan ?></td>
                                        <td><?= $key->nama_pengawas ?></td>
                                        <td><?= $key->nama_pengawas2 ?></td>
                                        <td><?= $key->no_spt ?></td>
                                        <td><?= $key->tanggal ?></td>
                                        <td>

                                            <?php if ($key->status == null) { ?>
                                                <span class="badge badge-warning">Menunggu</span>
                                            <?php } else if ($key->status == "Diterima") { ?>
                                                <span class="badge badge-primary">Tindak Lanjut</span>
                                            <?php } else { ?>
                                                <span class="badge badge-success">Selesai</span>
                                            <?php } ?>
                                        </td>
                                         <td> 
                                        <a class="btn btn-xs btn-info" href="<?= base_url() . 'index.php/Disnaker/detail_progres?id=' . $key->id_pengaduan ?>" ><i class="icon-eye"></i>Detail Progres</a>
                                    </td> 
                                    </tr>
                                <?php } ?>



                            </tbody>
                            </table>
                            </div>


        </div> <!-- container -->

    </div> <!-- content -->



</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

<!-- END wrapper -->