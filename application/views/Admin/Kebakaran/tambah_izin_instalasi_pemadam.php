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
 											<?php echo form_open_multipart('index.php/Kebakaran/simpan_kebakaran_instalasi');?>
 											<div class="form-group">
 												<label class="col-md-2 control-label">Tanggal Pelaksanaan</label>
 												<div class="col-md-10">
 													<input type="date" class="form-control" placeholder="Masukkan Tanggal Pelaksanaan" name="tanggal" required><br><?//php echo form_error('judul'); ?>
 												</div>
 											</div>

 											<div class="form-group">
 												<label class="col-md-2 control-label">Masa Berlaku</label>
 												<div class="col-md-10">
 													<input type="date" class="form-control" placeholder="Masukkan Masa Berlaku" name="masa" required><br><?//php echo form_error('judul'); ?>
 												</div>
 											</div>

 											<div class="form-group">
 												<div class="form-group m-b-0">
 													<label class="col-md-2 control-label">Masukan File</label>
 													<div class="col-md-10">
 														<div class="input-group">
 															<input type="file" class="filestyle" data-buttonname="btn-primary" name="berkas" required>
 															<span class="help-block"><small>Upload laporan pemeriksaan</small></span>
 														</div>
 													</div>
 												</div>
 											</div>
 											
											<br>
											<br>
 											<div class="form-group m-b-0">
 												<div class="col-sm-offset-10 col-sm-12">
 													<button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
 													<?php //echo form_close(); ?>
 													<a href="<?php echo site_url()?>Admin/Kebakaran"><button type="button" class="btn btn-danger">Kembali</button></a>

 													
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