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
										 <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/P3K/simpan_p3k_petugas'?>">
                                 <div class="form-group">
 												<label class="col-md-2 control-label">Nama Petugas</label>
 												<div class="col-md-10">
 													<input type="text" class="form-control" placeholder="Masukkan Nama Petugas" name="nama" required><br><?//php echo form_error('judul'); ?>
 												</div>
 											</div>


 											<div class="form-group">
 												<label class="col-md-2 control-label">No.Sertifikat</label>
 												<div class="col-md-10">
 													<input type="text" class="form-control" placeholder="Masukkan Nomor Sertifikat" name="nomor" required><br><?//php echo form_error('judul'); ?>
 												</div>
 											</div>

 											<div class="form-group">
 												<label class="col-md-2 control-label">Tanggal Terbit</label>
 												<div class="col-md-10">
 													<input type="date" class="form-control" placeholder="Masukkan Tanggal Terbit" name="tanggal" required><br><?//php echo form_error('judul'); ?>
 												</div>
 											</div>

 											<div class="form-group">
 												<label class="col-md-2 control-label">Masa Berlaku</label>
 												<div class="col-md-10">
 													<input type="date" class="form-control" placeholder="Masukkan Masa Berlaku" name="masa" required><br><?//php echo form_error('judul'); ?>
 												</div>
 											</div>
 											
 											<br>
 											<br>
 											<div class="form-group m-b-0">
 												<div class="col-sm-offset-10 col-sm-12">
 													<button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
 													<?php //echo form_close(); ?>
 													<a href="<?php echo site_url()?>P3K/petugas"><button type="button" class="btn btn-danger">Kembali</button></a>

 													
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
