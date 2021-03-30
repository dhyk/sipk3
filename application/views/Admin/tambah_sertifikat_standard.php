 <body class="fixed-left">

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
 								<h4 class="m-t-0 header-title"><b>Tambah Sertifikat Standard</b></h4>
 								<div class="row">
 									<div class="col-md-12">

 										<!-- <form class="form-horizontal" enctype="multipart/form-data" action="<?php //echo base_url().'index.php/Admin/tambahberita'; ?>" method="post"> -->
 											<?php echo form_open_multipart('index.php/Admin/aksi_upload_sertifikat_standard');?>
 											<div class="form-group">
 												<label class="col-md-2 control-label">Nama Sertfikat Standard</label>
 												<div class="col-md-10">
 													<input type="text" class="form-control" placeholder="Masukkan Nama Sertfikat Standard" name="nama" required><br><?//php echo form_error('judul'); ?>
 												</div>
 											</div>

 											<div class="form-group">
 												<div class="form-group m-b-0">
 													<label class="col-md-2 control-label">Masukkan File</label>
 													<div class="col-md-10">
 														<div class="input-group">
 															<input type="file" class="filestyle" data-buttonname="btn-primary" name="berkas" required>
 															<span class="help-block"><small>Pilih SMM ISO 9001/SML ISO 14001/ SMK3 ISO 45001,/ISO 22000/SMK3 PP 50/2012/lainnya</small></span>
 														</div>
 													</div>
 												</div>
 											</div>
 											<br>

 											<!-- <div class="">
	                                            <form action="#"> -->
		 											<div class="form-group">
		                                                  <label class="col-md-2 control-label">Tanggal Terbit</label>
		                                                  <div class="col-md-10">
		                                                  <div class="input-group"> 
		                                                  	<input type="date" class="form-control" placeholder="mm/dd/yyyy" id="datepicker" name="tanggal_terbit">
		                                                     <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
		                                                   </div>
		                                                   <br><!-- input-group -->
		                                                   </div>
		                                            </div>
	                                        	<!-- </form>
                                    		</div> -->


                                    		<div class="">
	                                            
		 											<div class="form-group">
		                                                  <label class="col-md-2 control-label">Masa Berlaku</label>
		                                                  <div class="col-md-10">
		                                                  <div class="input-group"> 
		                                                  	<input type="date" class="form-control" placeholder="mm/dd/yyyy" id="datepicker" name="masa_berlaku">
		                                                     <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
		                                                   </div><br><!-- input-group -->
		                                                   </div>
		                                            </div>
	                                        	
                                    		</div>

 											
											<br>
											<br>
 											<div class="form-group m-b-0">
 												<div class="col-sm-offset-10 col-sm-12">
 													<button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
 													<?php //echo form_close(); ?>
 													<a href="<?php echo site_url()?>Admin/informasi_umum"><button type="button" class="btn btn-danger">Kembali</button></a>

 													
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