<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Header -->
        <header id="header" data-fullwidth="true">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo"> <a href="index.html"><span class="logo-default">Halo K3 !</span><span class="logo-dark">POLO</span></a> </div>
                    <!--End: Logo-->
                    <!-- Search -->
                    <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                        <form class="search-form" action="search-results-page.html" method="get">
                            <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                            <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                        </form>
                    </div>
                    <!-- end: search -->
                    <!--Header Extras-->
                    <div class="header-extras">
                        <ul>
                            <li>

                                <div class="p-dropdown">
                                    <a href="#"><i class="fa fa-user btn-lg"></i></a>

                                    <ul class="p-dropdown-content">
                                        <li><a href="<?php echo base_url() . 'index.php/Pengaduan/profile_mas'; ?>" class="btn btn-user">Profil</a></li>
                                        <li><a href="<?php echo base_url() . 'index.php/Home/logout'; ?>" class="tombol-keluar"><button class="btn btn-danger"> keluar</button></a></li>

                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--end: Header Extras-->
                    <!--Navigation Resposnive Trigger-->
                    <!-- <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div> -->
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header -->
        <!-- Page title -->
        <section id="page-title" style="background: url('<?php echo base_url() ?>assets/images/11.jpg')">
            <div class="container">
                <div class="page-title">
                    <h1>Detail Pengaduan</h1>
                </div>
            </div>
        </section>
        <section id="page-content" class="no-sidebar">
            <div class="container">
                <!-- DataTable -->
                <!-- <div class="row mb-5">
                    <div class="col-lg-12 text-center">
                        <h4>Ajukan Pengaduan</h4>
                        <p>Harap melakukan proses pengaduan sesuai dengan prosedur</p>
                    </div>
                </div> -->



                <div class="form-horizontal">

                    <div class="form-group">
                        <label class="col-md-2 control-label">Nama Pengadu</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="nama" value="<?= $data_pengaduan[0]->nama ?>" readonly="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Judul Pengaduan</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="judul" value="<?= $data_pengaduan[0]->judul ?>" readonly="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Nama Perusahaan</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="nama_perusahaan" value="<?= $data_pengaduan[0]->nama_perusahaan ?>" readonly="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Jenis Pengaduan</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="<?= $data_pengaduan[0]->jenis ?>" value="Kelompok" readonly="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Tanggal Pengaduan</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="tanggal" value="<?= $data_pengaduan[0]->tanggal ?>" readonly="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Perihal Pengaduan</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="perihal" value="<?= $data_pengaduan[0]->perihal ?>" readonly="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Dokumen Pengaduan </label>
                        <div class="col-md-10">
                            <a href="<?php echo base_url() . 'upload/upload_file_pendukung/' . $data_pengaduan[0]->file_pengaduan ?>" target="blank_"> >>klik disini<< </a>
                        </div>
                    </div>
                    <br />
                    <div class="form-group">
                        <label class="col-md-2 control-label">Nama Pengawas</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="perihal" value="<?= $data_pengaduan[0]->nama_pengawas ?>" readonly="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Nomor SPT</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" readonly="" name="nomor_spt" value="<?= $data_pengaduan[0]->no_spt ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Tanggal Tindakan</th>
                                        <th>Detail</th>
                                        <!-- <th>Jenis Pengaduan</th> -->

                                        <!-- <th>Aksi</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data_tindakan as $key) { ?>
                                        <tr>
                                            <td><?= $key->tangal_tindakan ?></td>
                                            <td><?= $key->detail ?></td>


                                        </tr>
                                    <?php } ?>



                                </tbody>

                            </table>
                        </div>
                    </div>


                    <div class="form-group">

                        <div class="col-md-10">
                            <a href="<?= site_url() ?>Pengaduan/data_pengaduan" class="btn btn-warning waves-effect waves-light">Kembali</a>

                        </div>
                    </div>



                </div>





        </section>
        <!-- end: Page Content -->

    </div> <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Popover plugin files-->

</body>