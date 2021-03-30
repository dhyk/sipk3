<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />    <meta name="author" content="INSPIRO" />    
	<meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/images/favicon1.png">   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>SisubiT</title>
    <!-- Stylesheets & Fonts -->
    <link href="<?php echo base_url()?>assets/css/plugins.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Body Inner -->
    <div class="body-inner">
        <!-- end: Topbar -->

        <!-- Header -->
        <header id="header">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <!-- <div id="logo"> <a href="index.html"><span class="logo-default"></span><span class="logo-dark"></span></a> </div> -->
                    <div id="logo"><img src="<?php echo base_url()?>assets/images/logo_sisubit_13.png" alt="Company Name" class="logo"></div>
                    <!--End: Logo-->
                    <!-- Search -->
                    <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                        <form class="search-form" action="search-results-page.html" method="get">
                            <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                            <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                        </form>
                    </div> <!-- end: search -->
                    <!--Header Extras-->
                    <div class="header-extras">
                        <ul>
                            <li>
                                <div class="p-dropdown"> <a href="#"><i class="icon-globe"></i><span>IN</span></a>
                                    <ul class="p-dropdown-content">
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--end: Header Extras-->
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a> </div>
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="<?=site_url ()?>Home">Beranda</a></li>
                                    <li><a href="#Produk">Produk Jasa</a>
                                    <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><a href="#">Inspeksi</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Statutory Inspection </a></li>
                                                    <li><a href="#">Voluntary Inspection </a></li>
                                                    <li><a href="#">RLA</a></li>
                                                    <li><a href="#">NDT</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Survei</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Cargo Survey </a></li>
                                                    <li><a href="#">Bunker Survey </a></li>
                                                    <li><a href="#">Condition Survey</a></li>
                                                    <li><a href="#">Topography </a></li>
                                                    <li><a href="#">Bathymetry </a></li>
                                                    <li><a href="#">Soil Investigation </a></li>
                                                    <li><a href="#">Kepuasan Pelanggan </a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Konsultasi</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Develop SMK3</a></li>
                                                    <li><a href="#">Develop DPPBB </a></li>
                                                    <li><a href="#">Develop ISO </a></li>
                                                    <li><a href="#">Develop CHSE  </a></li>
                                                    <li><a href="#">Develop Lingker </a></li>
                                                    <li><a href="#">Kajian Teknis/Manajemen/Sistem/Kelayakan </a></li>
                                                    <li><a href="#">DED/Review Design</a></li>
                                                    <li><a href="#">Amdal/UKL-UPL </a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Verifikasi</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">SMK3</a></li>
                                                    <li><a href="#">DPPBB </a></li>
                                                    <li><a href="#">Pemantauan Lingkungan (RKL-RPL)</a></li>
                                                    <li><a href="#">Supervisi/Pengawasan Konstruksi/Fabrikasi</a></li>
                                                    <li><a href="#">QA/QC </a></li>
                                                    <li><a href="#">CHSE </a></li>
                                                    <li><a href="#">Food Safety</a></li>
                                                    <li><a href="#">TKDN</a></li>
                                                    <li><a href="#">SLO </a></li>
                                                    <li><a href="#">Pemeringkatan</a></li>
                                                    <li><a href="#">SHG</a></li>
                                                    <li><a href="#">Verifikasi Produk dan Proses</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Organizer</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Man Power SupplySMK3</a></li>
                                                    <li><a href="#">Service Provider</a></li>
                                                    <li><a href="#">Training</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#Pengalaman">Pengalaman</a></li>
                                    <!------Setelah Login -------->
                                    <?php if($akun!=null){  ?>
                                    <li><a href="#">Penawaran</a>
                                    <ul class="dropdown-menu">
                                            <li><a href="<?php echo site_url()?>Permintaanharga/minta_harga">Permintaan Harga</a>
                                            </li>
                                            <li><a href="#">Penawaran Harga</a> 
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Order</a>
                                    <ul class="dropdown-menu">
                                            <li><a href="#">Konfirmasi Order</a>
                                            </li>
                                            <li ><a href="#">Update Progress Order</a> 
                                            </li>
                                        </ul>
                                    </li>
                                <?php } ?>
                                    <!------Setelah Login -------->
                                    <li><a href="#Hubungi">Hubungi Kami</a></li>
                                  <?php if($akun==null){?>

                                    <li><a href="#modalShop" data-lightbox="inline" class="btn btn-modal btn-shadow btn-rounded text-light">Masuk</a> </li> 
                                <?php }else{ ?>
                                     <li>
                                        
                                        <a href="<?php echo base_url().'index.php/Home/logout'; ?>"  ><button class="btn btn-danger"> keluar</button></a> </li> 

                                <?php } ?>
</ul>
                                 </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>