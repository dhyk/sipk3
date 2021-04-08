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
                            <a href="<?php echo base_url().'index.php/Home/logout'; ?>" class="tombol-keluar" ><button class="btn btn-danger"> keluar</button></a>
                            </li>
                            
                        </ul>
                    </div>
                    <!--end: Header Extras-->
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>
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
        <section id="page-title">
            <div class="container">
                <div class="page-title">
                    <h1>Data Pengajuan</h1>
                    <span>Inspiration comes of working every day.</span>
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
                        <p>Responsive will automatically optimise the table's layout for different screen sizes through the dynamic column visibility control, making your tables useful on desktop and mobile screens. <a target="_blank" href="https://datatables.net/extensions/responsive">Read more »</a>
                        </p>
                    </div>
                    <div class="col-lg-6 text-right">
                        <button type="button" class="btn btn-light"><i class="icon-plus"></i> Add Record</button>
                        <div class="p-dropdown ml-3 float-right">
                            <a class="title btn btn-light"><i class="icon-sliders"></i> Options</a>
                            <div class="p-dropdown-content">
                                <ul>
                                    <li><a href="#"><i class="icon-refresh-cw"></i>Update Records</a></li>
                                    <li><a href="#"><i class="icon-edit"></i>Edit</a></li>
                                    <li><a href="#"><i class="icon-x"></i>Delete</a></li>
                                    <li>
                                        <hr>
                                    </li>
                                    <li><a href="#"><i class="icon-life-buoy"></i>Documentation</a></li>
                                    <li><a href="#"><i class="icon-mail"></i>Email Support Team</a></li>
                                    <li><a href="#"><i class="icon-alert-triangle"></i>Report an issue</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Date</th>
                                    <th>Salary</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td><span class="badge badge-pill badge-primary">Active</span></td>
                                    <td> <a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Edit"><i class="icon-edit"></i></a>
                                        <a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Delete"><i class="icon-trash-2"></i></a>
                                        <a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Settings"><i class="icon-settings"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                    <td><span class="badge badge-pill badge-secondary">Inactive</span></td>
                                    <td> <a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Edit"><i class="icon-edit"></i></a>
                                        <a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Delete"><i class="icon-trash-2"></i></a>
                                        <a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Settings"><i class="icon-settings"></i></a>
                                    </td>
                                </tr>

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