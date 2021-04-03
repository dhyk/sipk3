<body class="fixed-left">
 <div class="flash-data" data-flashdata="<?=$this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif;?>

 	<!-- Begin page -->
 	<div id="wrapper">
 		<div class="content-page">
 			<!-- Start content -->
 			<br>
 			<div class="content">
 				<div class="container">
 					<div class="row">
 						<div class="col-sm-12">
 							<div class="card-box">
 								<?php //echo form_open('Admin/tambahberita'); ?>
 								<h4 class="m-t-0 header-title"><b>Tambah Laporan</b></h4>
 								<div class="row">
 									<div class="col-md-12">

 										<!-- <form class="form-horizontal" enctype="multipart/form-data" action="<?php //echo base_url().'index.php/Admin/tambahberita'; ?>" method="post"> -->
 											<?php echo form_open_multipart('index.php/Laporan/simpan_laporan_p2k3');?>
 											<div class="form-group">
 												<label class="col-md-2 control-label">Nama Petugas</label>
 												<div class="col-md-10">
 													<input type="text" class="form-control" placeholder="Masukkan Nama Petugas" name="nama" required><br><?//php echo form_error('judul'); ?>
 												</div>
 											</div>

 											<div class="form-group">
 												<div class="form-group m-b-0">
 													<label class="col-md-2 control-label">Masukan File</label>
 													<div class="col-md-10">
 														<div class="input-group">
 															<input type="file" class="filestyle" data-buttonname="btn-primary" name="berkas" required>
 															<span class="help-block"><small>Masukan Laporan .PDF (Max 2MB)</small></span>
 														</div>
 													</div>
 												</div>
 											</div>
 											<br>

 											<!-- <div class="">
	                                            <form action="#"> -->
		 											<div class="form-group">
		                                                  <label class="col-md-2 control-label">Tanggal Laporan</label>
		                                                  <div class="col-md-10">
		                                                  <div class="input-group"> 
		                                                  	<input type="date" class="form-control" placeholder="mm/dd/yyyy" id="datepicker" name="tanggal" required>
		                                                     <span class="input-group-addon bg-custom b-0"></span>
		                                                   </div>
		                                                   <br><!-- input-group -->
		                                                   </div>
		                                            </div>
	                                        	<!-- </form>
                                    		</div> -->

 											
											<br>
											<br>
 											<div class="form-group m-b-0">
 												<div class="col-sm-offset-10 col-sm-12">
 													<button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
 													<?php //echo form_close(); ?>
 													<a href="<?php echo site_url()?>Laporan/laporan_p2k3"><button type="button" class="btn btn-danger">Kembali</button></a>

 													
 												</div>
 											</div>
 										</form>
 										
 									</div>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>
 			</body>

			 <script>

    $(document).ready( function () {

        const flashData = $('.flash-data').data('flashdata');

        if(flashData){

            Swal.fire(

                'Berhasil',

                flashData,

                'success'

                );

        }

    });

    $(document).ready( function () {

        $('.tombol-keluar').on('click', function (e) {

            //mengcancel a hrefnya dulu

            e.preventDefault();

            const href = $(this).attr('href');

            Swal.fire({

                icon: 'error',

                title: 'Apakah anda yakin ?',

                text: "",

                type: 'warning',

                showCancelButton: true,

                confirmButtonColor: '#3085d6',

                cancelButtonColor: '#d33',

                confirmButtonText: 'Keluar'

            }).then((result) => {

                if (result.value) {

                    document.location.href = href;

                }

            })

        });

    });

</script>