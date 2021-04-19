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
                    <!-- end: search -->
                    <!--Header Extras-->
                    <div class="header-extras">
                        <ul>
                        <li>
                            
                            <div class="p-dropdown">
                                <a href="#"><i class="fa fa-user btn-lg"></i></a>
                                
                                <ul class="p-dropdown-content">
                                    <li><a href="<?php echo base_url().'index.php/Pengaduan/profile_mas'; ?>" class="btn btn-user" >Profile</a></li>
                                    <li><a href="<?php echo base_url().'index.php/Home/logout'; ?>" class="tombol-keluar" ><button class="btn btn-danger"> keluar</button></a></li>

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
        <section id="page-title" style="background: url('<?php echo base_url()?>assets/images/11.jpg')">
            <div class="container">
                <div class="page-title">
                    <h1>Data Pengaduan</h1>
                    <!-- <span></span> -->
                </div>
                
            </div>
        </section>
        <!-- end: Page title -->
        <!-- Page Menu -->
        
        <!-- end: Page Menu -->
        <!-- Page Content -->
        <section id="page-content" class="no-sidebar">
            <div class="container">
                <!-- DataTable -->
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <h4>Ajukan Pengaduan</h4>
                        <p>Harap melakukan proses pengaduan sesuai dengan prosedur</p>
                    </div>
                    <div class="col-lg-6 text-right">
                        <a href="<?=site_url ()?>Pengaduan/tambah_pengaduan"><button type="button" class="btn btn-primary"><i class="icon-plus"></i> Tambah Pengaduan</button></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Judul Pengaduan</th>
                                    <!-- <th>Jenis Pengaduan</th> -->
                                    <th>Nama Pengawas</th>
                                    <th>No.SPT</th>
                                    <th>Tanggal Pengaduan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data as $key){ ?>
                                <tr>
                                    <td><?= $key->nama?></td>
                                    <td><?= $key->judul?></td>
                                    <td><?= $key->tanggal ?></td>
                                    <td>Achmad</td>
                                    <td>093725172-SPT</td>
                                    <td>19/03/2021</td>
                                    <td><span class="badge badge-pill badge-primary">Tindak Lanjut</span></td> -->
                                    <td> 
                                        <!-- <a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Edit"><i class="icon-edit"></i></a> -->
                                        <a class="ml-2" href="<?= base_url().'index.php/Pengaduan/hapus_pengaduan?id='.$key->id_pengaduan?>" data-toggle="tooltip" data-original-title="Delete"><i class="icon-trash-2 tombol-hapus"></i></a>
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