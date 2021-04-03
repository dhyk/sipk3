<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon111.png">
    <!-- App title -->
    <title>Halo K3!</title>

    <!-- date range picker -->
    <link href="<?php echo base_url() ?>assets/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/assets/plugins/jquery.steps/css/jquery.steps.css" />
    <!-- App css -->
    <link href="<?php echo base_url() ?>assets/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/plugins/switchery/switchery.min.css">

    <link href="<?php echo base_url() ?>assets/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="<?php echo base_url() ?>asset/assets/plugins/bootstrap-sweetalert/sweet-alert.css"></script>

    <script src="<?php echo base_url() ?>asset/assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="<?php echo base_url() ?>assets/assets/js/modernizr.min.js"></script>


</head>


<body class="fixed-left">


    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo"><span>SI<span>PK3</span></span><i class="mdi mdi-layers"></i></a>
                <!-- Image logo -->
                <!--<a href="index.html" class="logo">-->
                <!--<span>-->
                <!--<img src="assets/images/logo.png" alt="" height="30">-->
                <!--</span>-->
                <!--<i>-->
                <!--<img src="assets/images/logo_sm.png" alt="" height="28">-->
                <!--</i>-->
                <!--</a>-->
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">

                    <!-- Navbar-left -->
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <button class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                    </ul>

                    <!-- Right(Notification) -->
                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown user-box">
                            <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                <img src="<?php echo base_url() ?>assets/images/favicon11-0.png" alt="user-img" class="img-circle user-img">
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                <li>
                                    <h5>Hi, ADMIN</h5>
                                </li>
                                <!-- <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li> -->
                                <li><a href="<?php echo base_url() . 'index.php/Admin/logout'; ?>"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                            </ul>
                        </li>

                    </ul> <!-- end navbar-right -->

                </div><!-- end container -->
            </div><!-- end navbar -->
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title">Navigation</li>
                        <li>
                            <a href="<?= site_url() ?>Admin/dashboard" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span> Dashboard </span></a>
                        </li>

                        <!-- -------------------------------------------------------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="file-text" class="ion-android-earth"></i>
                                <span class="hide-menu">Informasi Umum</span><span class="menu-arrow"></span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>Admin/informasi_umum" class="sidebar-link">
                                        <span class="hide-menu">Informasi Umum K3</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>Admin/laporan" class="sidebar-link">
                                        <span class="hide-menu">Assesmen Mandiri</span>
                                    </a>
                                </li>


                            </ul>
                        </li>
                        <!-- -------------------------------------------------------------------------------- -->


                        <li>
                            <a href="<?php echo site_url() ?>P2covid/pertanyaan_covid" class="waves-effect"><i class=" glyphicon glyphicon-list-alt"></i><span> P2 COVID </span></a>
                        </li>

                        <li>
                            <a href="<?php echo site_url() ?>Kecelakaan" class="waves-effect"><i class=" ion ion-clipboard "></i><span> Laporan Kecelakaan </span></a>
                        </li>

                        <?php 
                       
                        if($this->session->userdata('p')!=null){?>
                        <li class="menu-title">Form Lanjutan Asessmen Mandiri</li>

                        <!-- -------------------------------------------------------------------------------- -->
                        <?php if($this->session->userdata('p')[0]->p1=='1'){?>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="file-text" class="mdi mdi-fire"></i>
                                <span class="hide-menu">Kebakaran </span><span class="menu-arrow"></span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>Kebakaran" class="sidebar-link">
                                        <span class="hide-menu">Pencegahan dan Penanggulangan Kebakaran</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>Kebakaran/petugas" class="sidebar-link">
                                        <span class="hide-menu">Petugas Kebakaran</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>Kebakaran/koordinator" class="sidebar-link">
                                        <span class="hide-menu">Koordinator Unit</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>Kebakaran/ak3" class="sidebar-link">
                                        <span class="hide-menu">AK3 Spesialis</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>Kebakaran/gladi" class="sidebar-link">
                                        <span class="hide-menu">Rekaman Pelaksanaan Latihan dan Gladi Penanggulangan Kebakaran</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>Kebakaran/apar" class="sidebar-link">
                                        <span class="hide-menu">Rekaman Pemeriksaan APAR</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>Kebakaran/alarm" class="sidebar-link">
                                        <span class="hide-menu">Rekaman Pemeriksaan Ibstalasi Alarm</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>Kebakaran/hydrant" class="sidebar-link">
                                        <span class="hide-menu">Rekaman Pemeriksaan Instalasi Hydrant</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>Kebakaran/sprinkler" class="sidebar-link">
                                        <span class="hide-menu">Rekaman Pemeriksaan Instalasi Sprinkler</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>Kebakaran/instalasi" class="sidebar-link">
                                        <span class="hide-menu">Sertifikat/Izin Pemakaian Instalasi Pemadam Kebakaran</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <?php } ?>
                        <!-- -------------------------------------------------------------------------------- -->
                        <?php if($this->session->userdata('p')[0]->p2=='1'){?>
                        <li>
                            <a href="https://jatim.chemsi.id/" class="waves-effect" target="_blank"><i class=" ion ion-earth "></i><span> Jatim Chemsi </span></a>
                        </li>
                           <?php } ?>
                        <!-- -------------------------------------------------------------------------------- -->
                        <?php if($this->session->userdata('p')[0]->p3=='1'){?>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="file-text" class="mdi mdi-ev-station"></i>
                                <span class="hide-menu">K3 Listrik </span><span class="menu-arrow"></span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>K3listrik" class="sidebar-link">
                                        <span class="hide-menu">K3 Instalasi Kelistrikan</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>K3listrik/izin_listrik" class="sidebar-link">
                                        <span class="hide-menu">Sertifikat Izin Pemakaian Kelayakan Instalasi Listrik</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>K3listrik/izin_petir" class="sidebar-link">
                                        <span class="hide-menu">Sertifikat Izin Pemakaian Kelayakan Instalasi Penyalur Petir</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>K3listrik/ak3" class="sidebar-link">
                                        <span class="hide-menu">Daftar AK3 Listrik</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>K3listrik/pemeriksaan_listrik" class="sidebar-link">
                                        <span class="hide-menu">Rekaman Pemeriksaan dan Pengujian Instalasi Listrik</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>K3listrik/pemeriksaan_petir" class="sidebar-link">
                                        <span class="hide-menu">Rekaman Pemeriksaan dan Pengujian Instalasi Penyalur Petir</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>K3listrik/teknisi" class="sidebar-link">
                                        <span class="hide-menu">Daftar Teknisi Kelistrikan</span>
                                    </a>
                                </li>


                            </ul>
                        </li>
                        <?php } ?>
                        <!-- -------------------------------------------------------------------------------- -->
                        <!-- -------------------------------------------------------------------------------- -->
                        <?php if(($this->session->userdata('p')[0]->p4=='1')||($this->session->userdata('p')[0]->p5=='1')||($this->session->userdata('p')[0]->p9=='1')
                        ||($this->session->userdata('p')[0]->p6=='1')||($this->session->userdata('p')[0]->p7=='1')||($this->session->userdata('p')[0]->p8=='1')){?>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="file-text" class="mdi mdi-engine-outline"></i>
                                <span class="hide-menu">K3 Mekanik </span><span class="menu-arrow"></span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                
                            <?php if($this->session->userdata('p')[0]->p4=='1'){?>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>K3mekanik/bejana" class="sidebar-link">
                                        <span class="hide-menu">Bejana Bertekanan dan Tangki Timbun</span>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php if($this->session->userdata('p')[0]->p5=='1'){?>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>K3mekanik/ketel" class="sidebar-link">
                                        <span class="hide-menu">Ketel Uap</span>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php if($this->session->userdata('p')[0]->p6=='1'){?>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>K3mekanik/tenaga" class="sidebar-link">
                                        <span class="hide-menu">Mesin Tenaga dan Produksi</span>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php if($this->session->userdata('p')[0]->p8=='1'){?>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>K3mekanik/elevator" class="sidebar-link">
                                        <span class="hide-menu">Elevator dan Eskalator</span>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php if($this->session->userdata('p')[0]->p9=='1'){?>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>K3mekanik/alatukur" class="sidebar-link">
                                        <span class="hide-menu">Alat Ukur</span>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php if($this->session->userdata('p')[0]->p7=='1'){?>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>K3mekanik/alatangkat" class="sidebar-link">
                                        <span class="hide-menu">Alat Angkat dan Angkut</span>
                                    </a>
                                </li>
                                <?php } ?>

                            </ul>
                        </li>
                        <?php } ?>
                        <!-- -------------------------------------------------------------------------------- -->
                        <!-- -------------------------------------------------------------------------------- -->
                        <?php if(($this->session->userdata('p')[0]->p10=='1')||($this->session->userdata('p')[0]->p11=='1')
                        ||($this->session->userdata('p')[0]->p12=='1')||($this->session->userdata('p')[0]->p13=='1')||($this->session->userdata('p')[0]->p14=='1')){?>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="file-text" class="mdi mdi-worker"></i>
                                <span class="hide-menu">K3 Lingk. Kerja </span><span class="menu-arrow"></span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                            <?php if($this->session->userdata('p')[0]->p10=='1'){?>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>K3lingker/jurulas" class="sidebar-link">
                                        <span class="hide-menu">Juru Las</span>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php if($this->session->userdata('p')[0]->p11=='1'){?>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>K3lingker/ketinggian" class="sidebar-link">
                                        <span class="hide-menu">Tenaga Kerja di Ketinggian</span>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php if($this->session->userdata('p')[0]->p12=='1'){?>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>K3lingker/ruang" class="sidebar-link">
                                        <span class="hide-menu">Tenaga Kerja di Ruang Terbatas</span>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php if($this->session->userdata('p')[0]->p13=='1'){?>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>K3lingker/ak3" class="sidebar-link">
                                        <span class="hide-menu">Ahli K3 Lingkungan Kerja</span>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php if($this->session->userdata('p')[0]->p13=='1'){?>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>K3lingker/rekaman" class="sidebar-link">
                                        <span class="hide-menu">Rekaman Pengukuran dan Pengendalian Lingkungan Kerja</span>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php if($this->session->userdata('p')[0]->p13=='1'){?>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>K3lingker/higiene" class="sidebar-link">
                                        <span class="hide-menu">Rekaman Penerapan Higiene dan Sanitasi</span>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php if($this->session->userdata('p')[0]->p14=='1'){?>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>K3lingker/pemeriksaan" class="sidebar-link">
                                        <span class="hide-menu">Rekaman Pemeriksaan dan atau Pengujian</span>
                                    </a>
                                </li>
                                <?php } ?>


                            </ul>
                        </li>
                        <?php } ?>
                        <!-- -------------------------------------------------------------------------------- -->
                        <!-- -------------------------------------------------------------------------------- -->
                        <?php if($this->session->userdata('p')[0]->p15=='1'){?>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="file-text" class="ion ion-medkit"></i>
                                <span class="hide-menu">P3K</span><span class="menu-arrow"></span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>P3K" class="sidebar-link">
                                        <span class="hide-menu">P3K</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>P3K/petugas" class="sidebar-link">
                                        <span class="hide-menu">Petugas P3K</span>
                                    </a>
                                </li>


                            </ul>
                        </li>
                        <?php } ?>
                        <!-- -------------------------------------------------------------------------------- -->
                        <?php } ?>
                    </ul>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

                <div class="help-box">
                    <h5 class="text-muted m-t-0">Butuh bantuan ?</h5>
                    <p class=""><span class="text-custom">Email:</span> <br /> Sisub_it@gmail.com</p>
                    <p class="m-b-0"><span class="text-custom">WA:</span> <br /> (+62) 82193827332</p>
                </div>

            </div>
            <!-- Sidebar -left -->

        </div>