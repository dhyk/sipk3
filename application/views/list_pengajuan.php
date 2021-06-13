<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Header -->
        <header id="header"  class="header-always-fixed">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo"> <img src="<?php echo base_url() ?>assets/images/logo.png"></div>
                    <div class="header-extras">
                        <ul>
                            <li>
                                <div class="p-dropdown">
                                    <a href="#"><i class="fa fa-user btn-lg"></i></a>
                                    <ul class="p-dropdown-content">
                                        <!-- <li><a href="<?php echo base_url() . 'index.php/Pengaduan/profile_mas'; ?>" class="btn btn-user">Profile</a></li> -->
                                        <li><a href="<?php echo base_url() . 'index.php/Login/logout'; ?>" class="tombol-keluar"><button class="btn btn-danger"> keluar</button></a></li>
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
        <section id="page-content" style="background: url('<?php echo base_url() ?>assets/images/121.png')">
            <div class="container">
                <!-- DataTable -->
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <h4>List Data Pengajuan Form Pengajuan Ijin Pelaksanaan Kerja</h4>
                        <p>*klik detail untuk melihat form</p>
                        <p>*klik Buat Pengajuan untuk melakukan pengajuan</p>
                    </div>
                    <?php if($level=='1') {?>
                    <div class="col-lg-6 text-right">
                        <a href="<?= site_url() ?>Pengajuan/tambah_pengajuan"><button type="button" class="btn btn-primary"  ><i class="icon-plus"></i> Buat Pengajuan</button></a>
                    </div>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                        
                            <thead>
                                <tr>
                                    <th>No. Pekerjaan</th>
                                    <th>Nama Pekerjaan</th>
                                    <th>Nama Pelaksana</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($data as $key){
                            ?>
                                    <tr>
                                        <td><?php echo $key->nomor_pekerjaan?></td>
                                        <td><?php echo $key->nama_pekerjaan?></td>
                                        <td><?php echo $key->nama_pelaksana?></td>
                                        <td><?php echo $key->tgl_pengajuan?></td>
                                        <td>
                                            <?php if($key->status=='pelaksana') {?>
                                            <span class="badge badge-primary">Diajukan Pelaksana</span>
                                            <?php } else if($key->status=='kabag') { ?>
                                            <span class="badge badge-warning">Diterima Kabag</span>
                                            <?php } else if($key->status=='pengawas') { ?> 
                                            <span class="badge badge-info">Diterima Pengawas</span>
                                            <?php } else if($key->status=='mr') { ?> 
                                            <span class="badge badge-success">Diterima MR</span>
                                            <?php } else; ?>
                                        </td>
                                        <td>
                                        <a href="<?= site_url().'Pengajuan/tambah_pengajuan?id='.$key->id_pengajuan ?>" class="btn btn-outline btn-sm"><i class="fa fa-eye"> lihat</i></a>
                                        </td>
                                    </tr>
                                
                            <?php } ?>


                            </tbody>

                        </table>
                    </div>
                </div>
                <!-- end: DataTable -->
            </div>
        </section>
        <!-- end: Page Content -->

    </div> <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Popover plugin files-->

</body>