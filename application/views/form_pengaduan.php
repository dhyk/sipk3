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
                                    <li><a href="<?php echo base_url().'index.php/Pengaduan/profile_mas'; ?>" class="btn btn-user" >Profil</a></li>
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
                    <h1 >Form Pengaduan</h1>
                    <span>Harap melakukan proses pengaduan sesuai dengan prosedur</span>
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
                <div class="card">
                            <div class="card-body">
                                <!--Wizard 7-->
                                <form class="needs-validation" novalidate>
                                <div class=" form-row">
                                    <h3 class="form-group col-md-6"> Form Pengaduan</h3>
                                    <div class="form-group col-md-6 text-right nopatrit">
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                        <a href="<?php echo site_url()?>Pengaduan/data_pengaduan">
                                        <button type="button" class="btn btn-danger">Batal</button></a>
                          </div>
                                    </div>
                                    <!-- <div class="h5 mb-4">Please fill with your personal info</div> -->
                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Nama Pengaduan</label>
                                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="surname">Judul Pengaduan</label>
                                            <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="gender">Jenis Pengaduan</label>
                                            <select class="form-control" name="gender">
                                                <option>--Pilih--</option>
                                                <option>Individu</option>
                                                <option>Kelompok</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="gender">Tanggal Pengaduan</label>
                                            <input class="form-control" type="date" name="Tanggal Pengaduan">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="perihal">Perihal Pengaduan</label>
                                            <textarea type="text" class="form-control" name="perihal"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <!--File upload 3-->
                                        <div class="form-group">
                                            <label for="upload">Upload Files</label>
                                            <a class="dropzone-attach-files btn btn-sm mb-0">Lampirkan File</a>
                                            <div class="d-none" id="fileUpload3" action="/file-upload" class="dropzone">
                                                <div class="fallback">
                                                    <input name="file" type="file" multiple />
                                                </div>
                                            </div>
                                            <!-- Preview -->
                                            <div class="mt-3" id="formFiles3"></div>
                                            <!-- File preview template -->
                                            <div class="d-none" id="formTemplate3">
                                                <div class="card mb-3">
                                                    <div class="p-2">
                                                        <div class="row align-items-start">
                                                            <div class="col-auto">
                                                                <img data-dz-thumbnail src="#" class="avatar border rounded">
                                                            </div>
                                                            <div class="col pl-0">
                                                                <a href="#" class="text-muted font-weight-bold" data-dz-name></a>
                                                                <p class="mb-0"><small data-dz-size></small> <small class="d-block text-danger" data-dz-errormessage></small></p>
                                                            </div>
                                                            <div class="col-auto pt-2">
                                                                <a class="btn-lg text-danger" href="#" data-dz-remove><i class="icon-trash-2"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end: File preview template -->
                                            <small id="dropzoneHelp" class="form-text text-muted">Max file size is 2MB</small>
                                        </div>
                                        <!--end: File upload 3-->

                                    </div>
                                    <div class="form-row">
                                            <label class="">Apakah sudah melakukan dilakukan secara Bipartit ?</label>
                                            <div class="col-sm-10">
                                                <div class="custom-controls-stacked">
                                                    <label class="custom-control custom-radio">
                                                        <input name="custom-radio-3" type="radio" class="custom-control-input" id="sudah" checked="javascript:sudah">
                                                        <span class="custom-control-label">Sudah</span>
                                                    </label>
                                                    <label class="custom-control custom-radio">
                                                        <input name="custom-radio-3" type="radio" class="custom-control-input" id="belum">
                                                        <span class="custom-control-label">Belum</span>
                                                    </label>
                                                </div>
                                            </div>
                                     </div>
                                    <div class="bipatrit">
                                        <!-- <div class="boom"><h1>BOOOM</h1></div> -->
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Nama Pekerja</label>
                                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Pekerja" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="surname">Alamat Pekerja</label>
                                            <input type="text" class="form-control" name="judul" placeholder="Masukkan Alamat Pekerja" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Nama Serikat / Organisasi Pekerja</label>
                                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Serikat / Organisasi" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="surname">Alamat Serikat / Organisasi Pekerja</label>
                                            <input type="text" class="form-control" name="judul" placeholder="Masukkan Alamat Serikat / Organisasi" required>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Nama Perundingan</label>
                                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Perundingan" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="surname">Alamat Perundingan</label>
                                            <input type="text" class="form-control" name="judul" placeholder="Masukkan Alamat Perundingan" required>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Alasan / Pokok Masalah Perselisihan</label>
                                            <input type="text" class="form-control" name="nama" placeholder="Masukkan alasan masalah perselisihan" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="surname">Pendirian Para Pihak</label>
                                            <input type="text" class="form-control" name="judul" placeholder="Masukkan Pendirian" required>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="name">Kesimpulan Para Pihak</label>
                                            <textarea type="text" class="form-control" name="nama" placeholder="Kesimpulan dari para pihak" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <!--File upload 3-->
                                        <div class="form-group">
                                            <label for="upload">Upload Files</label>
                                            <a class="dropzone-attach-files btn btn-sm mb-0">Lampirkan File</a>
                                            <div class="d-none" id="fileUpload3" action="/file-upload" class="dropzone">
                                                <div class="fallback">
                                                    <input name="file" type="file" multiple />
                                                </div>
                                            </div>
                                            <!-- Preview -->
                                            <div class="mt-3" id="formFiles3"></div>
                                            <!-- File preview template -->
                                            <div class="d-none" id="formTemplate3">
                                                <div class="card mb-3">
                                                    <div class="p-2">
                                                        <div class="row align-items-start">
                                                            <div class="col-auto">
                                                                <img data-dz-thumbnail src="#" class="avatar border rounded">
                                                            </div>
                                                            <div class="col pl-0">
                                                                <a href="#" class="text-muted font-weight-bold" data-dz-name></a>
                                                                <p class="mb-0"><small data-dz-size></small> <small class="d-block text-danger" data-dz-errormessage></small></p>
                                                            </div>
                                                            <div class="col-auto pt-2">
                                                                <a class="btn-lg text-danger" href="#" data-dz-remove><i class="icon-trash-2"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end: File preview template -->
                                            <small id="dropzoneHelp" class="form-text text-muted">Max file size is 2MB</small>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12 text-right">
                                        <button type="submit" class="btn btn-primary">Kirim</button>
                                        <a href="<?php echo site_url()?>Pengaduan/data_pengaduan"><button type="button" class="btn btn-danger">Batal</button></a>
                          
                                    </div>
                                    </div>
                                </form>
                                <!-- <div class="line"></div> -->
                                <!--end: Wizard 7-->
<script>

if(document.getElementById('sudah')){
    //alert('boss');
    document.getElementsByClassName('bipatrit')[0].style.visibility = 'visible';
    document.getElementsByClassName('nopatrit')[0].style.visibility = 'collapse';
}

$('#sudah').on('click', function(e) {
    //alert('boom');
    document.getElementsByClassName('bipatrit')[0].style.visibility = 'visible';
    document.getElementsByClassName('nopatrit')[0].style.visibility = 'collapse';
});

$('#belum').on('click', function(e) {
   // alert('beem');
    document.getElementsByClassName('bipatrit')[0].style.visibility = 'collapse';
    document.getElementsByClassName('nopatrit')[0].style.visibility = 'visible';
    //box.removeChild(document.getElementById('bipatrit'));
});
</script>

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