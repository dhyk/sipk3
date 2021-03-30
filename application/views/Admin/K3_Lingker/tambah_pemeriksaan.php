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
 												<label class="col-md-2 control-label">Tanggal</label>
 												<div class="col-md-10">
 													<input type="date" class="form-control" placeholder="Masukkan Tanggal" name="tanggal" required><br><?//php echo form_error('judul'); ?>
 												</div>
 											</div>

 											<div class="form-group">
 												<label class="col-md-2 control-label">Jenis</label>
 												<div class="col-md-10">
 													<select class="form-control">
		                                                <option>Pertama</option>
		                                                <option>Berkala</option>
		                                                <option>Ulang</option>
		                                                <option>Khusus</option>
                                            		</select>
                                            		<br>
 												</div>
 											</div>

 											<div class="form-group">
 												<label class="col-md-2 control-label">Nama Pelaksana</label>
 												<div class="col-md-10">
 													<input type="text" class="form-control" placeholder="Masukkan Nama Pelaksana" name="nama_pelaksana" required>
 													<span class="help-block"><small>Pengawas ketenagakerjaan/penguji K3/ahli K3 lingker</small></span>   
 												</div>
 											</div>

 											<div class="form-group">
 												<label class="col-md-2 control-label">Lembaga Pelaksana</label>
 												<div class="col-md-10">
 													<input type="text" class="form-control" placeholder="Masukkan Lembaga Pelaksana" name="lembaga_pelaksana" required>
 													<span class="help-block"><small>UPT.Pengawas ketenagakerjaan/Direktorat Bina K3/UPTD K3/PJK3/Lembaga lain</small></span>   
 												</div>
 											</div>

 											<div class="form-group">
                                    			<label class="col-md-2 control-label">Masukkan File</label>
                                    			<div class="col-md-10">
			                                        <input type="file" name="berkas" id="filer_input2" multiple="multiple">
			                                        <span class="help-block"></span>                   
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
