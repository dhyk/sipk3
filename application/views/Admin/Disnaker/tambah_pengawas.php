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
										 <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Disnaker/simpan_pengawas'?>">
                                 <div class="form-group">
 												<label class="col-md-2 control-label">Nama Pengawas</label>
 												<div class="col-md-10">
 													<input type="text" class="form-control" placeholder="Masukkan Nama Pengawas" name="nama" required><?//php echo form_error('judul'); ?>
 												</div>
 											</div>

											 <div class="form-group">
 												<label class="col-md-2 control-label">NIP</label>
 												<div class="col-md-10">
 													<input type="number" class="form-control" placeholder="Masukkan NIP" name="nip" required><?//php echo form_error('judul'); ?>
 												</div>
 											</div>


 											<div class="form-group">
 												<label class="col-md-2 control-label">Jabatan</label>
 												<div class="col-md-10">
 													<input type="text" class="form-control" placeholder="Masukkan Jabatan" name="jabatan" required><?//php echo form_error('judul'); ?>
 												</div>
 											</div>

 											<div class="form-group">
 												<label class="col-md-2 control-label">Nomor Telepon / WA</label>
 												<div class="col-md-10">
 													<input type="number" class="form-control" placeholder="Masukkan Nomor" name="no_telp" required><?//php echo form_error('judul'); ?>
 												</div>
 											</div>

 											<div class="form-group">
 												<label class="col-md-2 control-label">Email</label>
 												<div class="col-md-10">
 													<input type="text" class="form-control" placeholder="Masukkan Email" name="email" required><?//php echo form_error('judul'); ?>
 												</div>
 											</div>
											 <div class="form-group">
 												<label class="col-md-2 control-label">username</label>
 												<div class="col-md-10">
 													<input type="text" class="form-control" placeholder="Masukkan Email" name="username" required><?//php echo form_error('judul'); ?>
 												</div>
 											</div>
											 <div class="form-group">
 												<label class="col-md-2 control-label">password</label>
 												<div class="col-md-10">
 													<input type="password" class="form-control" placeholder="Masukkan Password" name="password" required><?//php echo form_error('judul'); ?>
 												</div>
 											</div>
 											
 											<br>
 											<br>
 											<div class="form-group m-b-0">
 												<div class="col-sm-offset-10 col-sm-12">
 													<button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
 													<?php //echo form_close(); ?>
 													<a href="<?php echo site_url()?>Disnaker/daftar_pengawas"><button type="button" class="btn btn-danger">Kembali</button></a>

 													
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
