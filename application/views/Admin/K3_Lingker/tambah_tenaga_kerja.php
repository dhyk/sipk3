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
 											<?php echo form_open_multipart('index.php/Admin/aksi_upload_sertifikat_standard');?>
 											<div class="form-group">
 												<label class="col-md-2 control-label">Nama Petugas</label>
 												<div class="col-md-10">
 													<input type="number" class="form-control" placeholder="Masukkan Nama Juru Las" name="nama" required><br><?//php echo form_error('judul'); ?>
 												</div>
 											</div>

 											<div class="form-group">
 												<label class="col-md-2 control-label">Kompetensi & Kewenangan</label>
 												<div class="col-md-10">
 													<select class="form-control">
		                                                <option>TKBT 1</option>
		                                                <option>TKBT 2</option>
		                                                <option>TKK 1</option>
		                                                <option>TKK 2</option>
		                                                <option>TKK 3</option>
                                            		</select>
                                            		<br>
 												</div>

 											</div>

 											<div class="form-group">
 												<label class="col-md-2 control-label">No.Sertifikat</label>
 												<div class="col-md-10">
 													<input type="text" class="form-control" placeholder="Masukkan Nomor Sertifikat" name="nomor_sertifikat" required><br><?//php echo form_error('judul'); ?>
 												</div>
 											</div>

 											<div class="form-group">
 												<label class="col-md-2 control-label">Tanggal Terbit</label>
 												<div class="col-md-10">
 													<input type="date" class="form-control" placeholder="Masukkan Tanggal Terbit" name="tanggal_terbit" required><br><?//php echo form_error('judul'); ?>
 												</div>
 											</div>

 											<div class="form-group">
 												<label class="col-md-2 control-label">Masa Berlaku</label>
 												<div class="col-md-10">
 													<input type="date" class="form-control" placeholder="Masukkan Masa Berlaku" name="masa_berlaku" required><br><?//php echo form_error('judul'); ?>
 												</div>
 											</div>
 											
 											<br>
 											<br>
 											<div class="form-group m-b-0">
 												<div class="col-sm-offset-10 col-sm-12">
 													<button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
 													<?php //echo form_close(); ?>
 													<a href="<?php echo site_url()?>Admin/k3_lingker"><button type="button" class="btn btn-danger">Kembali</button></a>

 													
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
