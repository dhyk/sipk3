<body >
    <!-- Body Inner -->
    <div class="body-inner" style="background: url('<?php echo base_url() ?>assets/images/121.png')">
        <!-- Header -->
        <header id="header" class="header-always-fixed">
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
                                        <!-- <li><a href="<?php echo base_url() . 'index.php/Pengaduan/profile_mas'; ?>" class="btn btn-user">Profil</a></li> -->
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
        <!-- <section id="page-title" style="background: url('<?php echo base_url() ?>assets/images/121.png')">
            <div class="container">
                <div class="page-title">
                    <h1>Form Pengajuan</h1>
                </div>
            </div>
        </section> -->
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
                        <?php echo form_open_multipart('index.php/Pengaduan/simpan_pengaduan'); ?> 
                        <div class="form-row text-center">
                            <div class="col-lg-4"><span class="grid-col-demo"><img src="<?php echo base_url() ?>assets/images/logosi.png"></span> </div>
                            <div class="col-lg-4"><br><h3 class="grid-col-demo"><b>IJIN PELAKSANAAN KERJA</b></h3></div>
                            <div class="col-lg-4"><span class="grid-col-demo">.col-lg-4</span> </div>
                        </div> 
                        <br>
                        <br>                         
                            <div class="form-row">
                                <!-- <div class="form-group col-md-6">
                                    <label for="name">Nama Pengadu</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required>
                                </div> -->
                                <!-- <input type="hidden" class="form-control" name="nama" value="<?= $akun?>" placeholder="Masukkan Nama" required>
                                <div class="form-group col-md-12">
                                    <div class="form-group col-md-4">
                                        <label for="surname">Judul Pengaduan</label>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul" required>
                                    </div>
                                </div> -->
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Nama Pekerjaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_pekerjaan" name="nama_pekerjaan" placeholder="Nama Pekerjaan" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">No Pekerjaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="no_pekerjaan" name="no_pekerjaan" placeholder="No Pekerjaan" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Nama Pelaksana / Rekanan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_pelaksana" name="nama_pelakasana" placeholder="Nama Pelaksana / Rekanan" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Pemimpin Rekanan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="pemimpin_rekanan" name="pemimpin_rekanan" placeholder="Pemimpin Rekanan" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">lokasi Pekerjaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="lokasi_pekerjaan" name="lokasi_pekerjaan" placeholder="Lokasi Pekerjaan" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Lama Pekerjaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="lama_pekerjaan" name="lama_pekerjaan" placeholder="Lama Pekerjaan" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Jam Kerja Per-hari</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="jam_kerja" name="jam_kerja" placeholder="Jam Kerja Per-hari" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Pengawas Teknis</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="pengawas_teknis" name="pengawas_teknis" placeholder="Pengawas Teknis" >
                                </div>
                            </div>



                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="gender">Jenis Pengaduan</label>
                                    <select class="form-control" name="jenis">
                                        <option>--Pilih--</option>
                                        <option>Individu</option>
                                        <option>Kelompok</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="gender">Tanggal Pengaduan</label>
                                    <input class="form-control" type="date" name="tanggal">
                                </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                    <label for="name">Nama Perusahaan</label>
                                    <input type="text" class="form-control" name="nama_perusahaan" placeholder="Masukkan Nama Perusahaan" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="perihal">Perihal Pengaduan</label>
                                    <textarea type="text" class="form-control" name="perihal"></textarea>
                                </div>
                                
                            </div>
                             <div class="form-row">
                                <div class="form-group col-md-12">
                                <label >Masukkan File</label>
 										<div class="input-group">
 											<input type="file" class="filestyle" data-buttonname="btn-primary" name="berkas" required> <br> 											
 										</div>

                                </div>
                            </div>
                                <!--end: File upload 3-->

                            
  
                                    <div class="form-row">
                                        <label class="">Apakah sudah melakukan dilakukan secara Bipartit ?</label>
                                        <div class="col-sm-10">
                                            <div class="custom-controls-stacked">
                                                <label class="custom-control custom-radio">
                                                    <input name="bipatrit" value="sudah" type="radio" class="custom-control-input" id="sudah" checked="javascript:sudah">
                                                    <span class="custom-control-label">Sudah</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input name="bipatrit" value="belum" type="radio" class="custom-control-input" id="belum">
                                                    <span class="custom-control-label">Belum</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                        </form>
                        <!-- <div class="line"></div> -->
                        <!--end: Wizard 7-->
                        <script>
                            if (document.getElementById('sudah')) {
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