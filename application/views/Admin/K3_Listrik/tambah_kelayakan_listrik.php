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
 								<h4 class="m-t-0 header-title"><b>Tambah data</b></h4>
 								<div class="row">
 									<div class="col-md-12">

 										<!-- <form class="form-horizontal" enctype="multipart/form-data" action="<?php //echo base_url().'index.php/Admin/tambahberita'; ?>" method="post"> -->
										 <form action="<?php echo base_url().'index.php/K3lisrik/simpan_ijin_listrik';?>" method="post" >

 											<div class="form-group">
 												<label class="col-md-2 control-label">Nomor Sertifikat</label>
 												<div class="col-md-10">
 													<input type="text" class="form-control" placeholder="Masukkan Nomor Sertifikat" name="nomor" required><br><?//php echo form_error('judul'); ?>
 												</div>
 											</div>

 											
 											<br>

 											<!-- <div class="">
	                                            <form action="#"> -->
		 											<div class="form-group">
		                                                  <label class="col-md-2 control-label">Tanggal Terbit</label>
		                                                  <div class="col-md-10">
		                                                  <div class="input-group"> 
		                                                  	<input type="date" class="form-control" placeholder="mm/dd/yyyy" id="datepicker" name="tanggal" required>
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
		                                                  	<input type="date" class="form-control" placeholder="mm/dd/yyyy" id="datepicker" name="masa" required>
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
 													<a href="<?php echo site_url()?>Admin/k3_listrik"><button type="button" class="btn btn-danger">Kembali</button></a>

 													
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