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
 											<?php echo form_open_multipart('index.php/K3lingker/simpan_rekaman');?>

 											<div class="form-group">
 												<label class="col-md-2 control-label">Tanggal</label>
 												<div class="col-md-10">
 													<input type="date" class="form-control" placeholder="Masukkan Tanggal" name="tanggal" required><br><?//php echo form_error('judul'); ?>
 												</div>
 											</div>

 											<div class="form-group">
 												<label class="col-md-2 control-label">Nomor Laporan</label>
 												<div class="col-md-10">
 													<input type="text" class="form-control" placeholder="Masukkan Nomor Laporan" name="nomor_laporan" required><br><?//php echo form_error('judul'); ?>
 												</div>
 											</div>

 											<div class="form-group">
                                    			<label class="col-md-2 control-label">Masukkan File</label>
                                    			<div class="col-md-10">
			                                        <input type="file" name="berkas" id="filer_input2" multiple="multiple">
			                                        <span class="help-block"><small>laporan pengukuran dan pengendalian lingker (Harus meliputi Fisik, Kimia, Biologis, ergonomis dan psikososial)</small></span>                   
			                                    </div>
			                                </div>
 											
 											<br>
 											<br>
 											<div class="form-group m-b-0">
 												<div class="col-sm-offset-10 col-sm-12">
 													<button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
 													<?php //echo form_close(); ?>
 													<a href="<?php echo site_url()?>K3lingker/rekaman"><button type="button" class="btn btn-danger">Kembali</button></a>

 													
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
