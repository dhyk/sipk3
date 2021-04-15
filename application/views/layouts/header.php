<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/images/favicon22.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Halo K3!</title>
    <!-- Stylesheets & Fonts -->
    <link href="<?php echo base_url() ?>assets/css/plugins.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/plugins.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="<?php echo base_url() ?>assets/js_new/sweetalert/dist/sweetalert2.all.min.js"></script>
    <link href='<?php echo base_url() ?>assets/plugins/datatables/datatables.min.css' rel='stylesheet' />

</head>

<body>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>

    <section class="parallax fullscreen" style="background: url('<?php echo base_url() ?>assets/images/11.jpg')">

        <div class="container container-fullscreen text-center">

            <div class="text-middle">
                <h1 class="text-uppercase text-lg text-light">Halo K3!</h1>
                <h3 class="lead text-light">Sistem Informasi Pelaporan K3 (SIPK3)</h3>
                <a class="btn btn-success" href="#modalShop" data-lightbox="inline">Masuk</a>
                <a class="btn btn-light btn-outline" href="#modalRegis" data-lightbox="inline">Daftar</a>
            </div>
        </div>
        </div>
        </div>

    </section>
    <!-- end: SECTION IMAGE FULLSCREEN -->

    <div id="modalShop" class="modal no-padding" data-delay="2000" style="max-width: 700px;">
        <div class="widget widget-form p-cb text-center">
            <img src="<?php echo base_url() ?>assets/images/favicon22.png" class="feature-icon text-center">
            <p align="center">
            <h3>Selamat Datang Di Pelaporan K3</h3>
            </p>
            <p align="center">
            <h4>Silahkan Masuk</h4>
            </p>

            <form action="<?php echo base_url() . 'index.php/Home/login_check'; ?>" method="post" name="login">
                <div class="form-group mb-3 text-left">
                    <label for="email"><b />Username</label>
                    <input type="text" name="username" class="form-control" id="email" placeholder="Masukkan Username" required="required">
                </div>
                <div class="form-group mb-3 text-left">
                    <label for="password"><b />Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" required="required">
                </div>
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#Berhasil Masuk">Masuk</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div
    id="modalRegis"
    class="modal no-padding"
    data-delay="2000"
    style="max-width: 900px;">
    <div class="card">
        <div class="card-header">
            <span class="h4">Form Pendaftaran</span>
            <p class="text-muted">Hallo.. Silahkan Daftar</p>
            
            <div class="tabs tabs-clean text-center">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a
                            class="nav-link active"
                            id="home-tab2"
                            data-toggle="tab"
                            href="#tabProfile2"
                            role="tab"
                            aria-controls="home"
                            aria-selected="true">Masyarakat</a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            id="contact-tab2"
                            data-toggle="tab"
                            href="#tabBilling2"
                            role="tab"
                            aria-controls="contact"
                            aria-selected="false">Perusahaan</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <!-- <p class="text-center"><h3>Form Pendaftaran</h3></p> -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tabProfile2" role="tabpanel" aria-labelledby="tab-profile">
                        <form action="<?php echo base_url() . 'index.php/Home/register_masyarakat'; ?>" method="post" name="daftar">
                            <div class="tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#tabProfile1" role="tab" aria-controls="home" aria-selected="true">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tabPassword1" role="tab" aria-controls="profile" aria-selected="false">Username & Password</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="tabProfile1" role="tabpanel" aria-labelledby="tab-profile">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="nik">NIK</label>
                                                <input class="form-control" type="number" value="" id="nik" name="nik" placeholder="Masukkan NIK Sesuai KTP" required="required">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="nama">Nama Lengkap</label>
                                                <input class="form-control" type="text" value="" id="nama" name="nama" placeholder="Masukkan Nama Lengkap Sesuai KTP" required="required">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="nomor_p2k3">Alamat Domisili</label>
                                                <input type="text" name="domisili" class="form-control" id="domisili" placeholder="Masukkan Alamat Domisili" value="" required="required">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="tanggal_pengesahan">Tanggal Lahir</label>
                                                <input type="date" name="tanggal_lahir" class="form-control" id="tanggal" placeholder="Masukkan Tanggal lahir" value="" required="required">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" value="" class="form-control" id="email" placeholder="Masukkan Email" required="required">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="email">No.Telp</label>
                                                <input type="number" name="no_tlp" value="" class="form-control" id="no_tlp" placeholder="Masukkan Nomor Telepon" required="required">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tabPassword1" role="tabpanel" aria-labelledby="tab-password">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Username</label>
                                                    <input type="text" name="username" class="form-control" id="name" placeholder="Masukkan Username" value="" required="required">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" value="" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="captcha">Kode Captcha</label>
                                                    <?php echo $image_captcha; ?>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="captcha">Captcha</label>

                                                    <input type="text" name="captcha" id="captcha" class="form-control" placeholder="Masukkan Captca" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <button type="submit" class="btn btn-sm">Daftar</button>
                                            <!-- <button type="button" class="btn btn-secondary btn-sm">Batal</button> -->
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>

                    <div class="tab-pane fade show" id="tabBilling2" role="tabpanel" aria-labelledby="tab-profile">
                        <form action="<?php echo base_url() . 'index.php/Home/register_pengguna'; ?>" method="post" name="daftar">
                            <div class="tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#tabProfile" role="tab" aria-controls="home" aria-selected="true">Data Perusahaan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tabBilling" role="tab" aria-controls="contact" aria-selected="false">Penanggung Jawab</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tabPassword" role="tab" aria-controls="profile" aria-selected="false">Username & Password</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="tabProfile" role="tabpanel" aria-labelledby="tab-profile">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="perusahaan">Nama Perusahaan</label>
                                                <input class="form-control" type="text" value="" id="nama_perusahaan" name="nama_perusahaan" placeholder="Masukkan Nama Perusahaan" required="required">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="alamat">Alamat Perusahaan</label>
                                                <textarea type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat" required="required"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="perusahaan">Nomor Induk Berusaha (NIB)</label>
                                                <input class="form-control" type="number" value="" id="nib" name="nomor_induk" placeholder="Masukkan Nomor Induk Berusaha" required="required">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="perusahaan">Jumlah Karyawan</label>
                                                <input class="form-control" type="number" value="" id="nama_perusahaan" name="jumlah_karyawan" placeholder="Masukkan Jumlah Karyawan" required="required">
                                            </div>
                                        </div>
                                        <!-- <div class="form-row"> <div class="form-group col-md-6"> <label
                                    for="name">Nama Tempat Usaha</label> <input type="text" name="nama_tempat_usaha"
                                    class="form-control" id="name" placeholder="Masukkan Nama Tempat Usaha"
                                    required> </div> <div class="form-group col-md-6"> <label
                                    for="jenis_usaha">Jenis Usaha</label> <input type="text" name="jenis_usaha"
                                    class="form-control" id="jenis_usaha" placeholder="Masukkan Jenis usaha"
                                    value="" required> </div> </div> -->
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="nomor_p2k3">Nomor P2K3</label>
                                                <input type="number" name="nomor_p2k3" class="form-control" id="nomor_p2k3" placeholder="Masukkan Nomor P2K3" value="" required="required">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="tanggal_pengesahan">Tanggal Pengesahan P2K3</label>
                                                <input type="date" name="tanggal_p2k3" class="form-control" id="tanggal_p2k3" placeholder="Masukkan Tanggal Pengesahan P2K3" value="" required="required">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tabBilling" role="tabpanel" aria-labelledby="tab-billing">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="name_instansi">Nama Penanggung Jawab</label>
                                                <input type="text" name="nama_penanggung_jawab" class="form-control" id="name_instansi" placeholder="Masukkan Nama Instansi" value="" required="required">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="nomor_penanggung_jawab">Nomor Telepon Penanggung Jawab</label>
                                                <input type="number" name="nomor_penanggung_jawab" class="form-control" id="nomortelepon" placeholder="Masukkan Nomor Telepon" required="required">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="email">Email Penanggung Jawab</label>
                                                <input type="email" name="email_penanggung_jawab" value="" class="form-control" id="email" placeholder="Masukkan Email" required="required">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tabPassword" role="tabpanel" aria-labelledby="tab-password">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Username</label>
                                                    <input type="text" name="username" class="form-control" id="name" placeholder="Masukkan Username" value="" required="required">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" value="" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="captcha">Kode Captcha</label>
                                                    <?php echo $image_captcha; ?>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="captcha">Captcha</label>

                                                    <input type="text" name="captcha" id="captcha" class="form-control" placeholder="Masukkan Captca" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <button type="submit" class="btn btn-sm">Daftar</button>
                                            <!-- <button type="button" class="btn btn-secondary btn-sm">Batal</button> -->
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</body>
<script>
    $(document).ready(function() {

        const flashData = $('.flash-data').data('flashdata');

        if (flashData) {

            Swal.fire('Berhasil', flashData, 'success');

        }

    });

    $(document).ready(function() {

        $('.tombol-keluar').on('click', function(e) {

            //mengcancel a hrefnya dulu

            e.preventDefault();

            const href = $(this).attr('href');

            Swal
                .fire({

                    icon: 'error',

                    title: 'Apakah anda yakin ?',

                    text: "",

                    type: 'warning',

                    showCancelButton: true,

                    confirmButtonColor: '#3085d6',

                    cancelButtonColor: '#d33',

                    confirmButtonText: 'Keluar'

                })
                .then((result) => {

                    if (result.value) {

                        document.location.href = href;

                    }

                })

        });

    });
</script>