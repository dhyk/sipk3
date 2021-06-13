<body>
    <!-- Body Inner -->
    <div class="body-inner" >
        
        <section id="page-content" style="background: url('<?php echo base_url() ?>assets/images/112.png')">
        <br>
        <br><br>
        <br><br><br>
        
            <div class="container" >
                <div class="row justify-content-center">
                    <div class="content col-md-6">
                        <!-- <h4 class="mb-5">With validation</h4> -->
                        <div class="card">
                            <div class="card-body">
                                <!--Wizard 7-->
                                <form action="<?php echo base_url().'index.php/Login/login_check'; ?>" method="post">
                                <div class="text-center"><img src="<?php echo base_url() ?>assets/images/logo.png"></div>
                                    <!-- <h3 class="text-center">Masuk</h3> -->
                                    <div class="wizard-content">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control" name="username" placeholder="Masukkan username" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="password">Password</label>
                                                <div class="input-group show-hide-password">
                                                    <input class="form-control" name="password" placeholder="Masukkan password" type="password">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="icon-eye-off" aria-hidden="true" style="cursor: pointer;"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 text-center">
                                    <button type="submit" class="btn btn-info">Masuk</button>
                                    </div>
                                </form>
                                <!--end: Wizard 7-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    