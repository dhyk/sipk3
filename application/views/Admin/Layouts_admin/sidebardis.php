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

<!--Untuk sweet alert-->

<div class="flash-data" data-flashdata="<?=$this->session->flashdata('flash'); ?>"></div>

<?php if ($this->session->flashdata('flash')) : ?>

<?php endif;?>

<!-- end of sweetalert -->

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
                                    <h5>Hi, <?php echo $akun; ?></h5>
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
                            <a href="<?= site_url() ?>Disnaker/dashboard" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span> Dashboard </span></a>
                        </li>
                        <li>
                            <a href="<?php echo site_url() ?>Disnaker/daftar_sertifikat_alat" class="waves-effect"><i class=" fa fa-clipboard"></i><span>Daftar Sertifikat izin peralatan dan instalasi perusahaan yang kadaluwarsa </span></a>
                        </li>
                        <li>
                            <a href="<?php echo site_url() ?>Disnaker/daftar_sertifikat_personel" class="waves-effect"><i class=" fa fa-clipboard"></i><span>Daftar sertifikat personel yang kadaluwarsa</span></a>
                        </li>
                        <li>
                            <a href="<?php echo site_url() ?>Disnaker/daftar_laporan_kecelakaan" class="waves-effect"><i class=" fa fa-clipboard"></i><span>Daftar Laporan Kecelakaan Kerja</span></a>
                        </li>

                        <!-- -------------------------------------------------------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="file-text" class="ion ion-clipboard"></i>
                                <span class="hide-menu">Daftar belum update laporan K3 yang dipersyaratkan peraturan</span><span class="menu-arrow"></span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>Disnaker/laporan_p2k3" class="sidebar-link">
                                        <span class="hide-menu">Laporan P2K3</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>Disnaker/laporan_pemeriksaan" class="sidebar-link">
                                        <span class="hide-menu">Laporan pemeriksaan & pengujian peralatan & instalasi</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo site_url() ?>Disnaker/laporan_kecelakaan" class="sidebar-link">
                                        <span class="hide-menu">Laporan Penyelidikan Kecelakaan Kerja</span>
                                    </a>
                                </li>


                            </ul>
                        </li>
                        <!-- -------------------------------------------------------------------------------- -->


                        
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