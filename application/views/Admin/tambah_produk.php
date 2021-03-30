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
 								<?php echo form_open('Admin/tambahproduk'); ?>
 								<h4 class="m-t-0 header-title"><b>Tambah Produk</b></h4>
 								<div class="row">
 									<div class="col-md-12">
 										<form class="form-horizontal">
 											<div class="form-group">
 												<label class="col-md-2 control-label">Nama Produk</label>
 												<div class="col-md-10">
 													<input type="text" class="form-control" placeholder="Masukkan nama produk" name="nama_produk"><br><?php echo form_error('nama_produk'); ?>
 												</div>
 											</div>

 											<div class="form-group">
 												<label class="col-md-2 control-label">Detail</label>
 												<div class="col-md-10">
 													<textarea class="form-control" rows="5" name="detail" placeholder="Masukkan Deskripsi produk"></textarea><br><?php echo form_error('detail'); ?>
 												</div>
 											</div>
 											
 											<div class="form-group">
 												<label class="col-md-2 control-label">Link Demo</label>
 												<div class="col-md-10">
 													<input type="text" class="form-control" placeholder="Masukkan Link Demo produk" name="link"><br><?php echo form_error('link'); ?>
 												</div>
 											</div>
 											<div class="form-group">
 												<div class="form-group m-b-0">
 													<label class="col-md-2 control-label">Masukkan Gambar</label>
 													<div class="col-md-10">
 														<div class="input-group">
 															<input type="file" class="filestyle" data-buttonname="btn-primary" name="foto">
 														</div>
 													</div>
 												</div>
 											</div>
 											<div class="form-group m-b-0">
 												<div class="col-sm-offset-10 col-sm-12">
 													<button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
 													<?php echo form_close(); ?>
 													<a href="<?php echo site_url()?>Admin/produk"><button type="button" class="btn btn-danger">Kembali</button></a>
 												</div>
 											</div>
 										</form>
 									</div>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>

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

 			</script>
 			</body>

 			