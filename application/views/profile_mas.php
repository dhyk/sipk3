<body >
    <!-- Body Inner -->
    <div class="body-inner"  style="background: url('<?php echo base_url()?>assets/images/11.jpg')">
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
                                    <li><a href="<?php echo base_url().'index.php/Home/profil'; ?>" class="btn btn-user" >Profil</a></li>
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
                    <h1 >PROFIL</h1>
                    <!-- <span>Harap melakukan proses pengaduan sesuai dengan prosedur</span> -->
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
                <div class="col-lg-10 align-self-center offset-md-1">
                <div class="card ">
                            <div class="card-body ">
                                <!--Wizard 7-->
                                <form class="needs-validation" novalidate>
                                <div class=" form-row">
                                    <h3 class="form-group col-md-12 text-center"> (Nama)</h3>
                                    <!-- <div class="h5 mb-4">Please fill with your personal info</div> -->
                                    </div>
                                    <div class="row">
                                        <div class=" col-md-2">
                                        <img src="<?php echo base_url()?>assets/images/team/6.jpg" class="avatar avatar-lg">
                                        </div>
                                        <div class="col-md-4 text-left">
                                            <label for="name">NIK</label> <br>
                                            <label for="name">No.Telepon</label> <br>
                                            <label for="name">Alamat Domisili</label> <br>  
                                        </div>
                                    </div>
                                </div>                                   
                                </form>
                                <!-- <div class="line"></div> -->
                                <!--end: Wizard 7-->

                            </div>
                        </div>
                <!-- end: DataTable -->
            </div>
</div>
        </section>
        <!-- end: Page Content -->
        
    </div> <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Popover plugin files-->
   
</body>