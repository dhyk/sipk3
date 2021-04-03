<body class="fixed-left">
	<!-- Begin page -->
	<div id="wrapper">
		<div class="content-page">
			<!-- Start content -->
			<br>
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
                            <div class="card-box table-responsive">
                                <h4 class="m-t-0 header-title"><b>Laporan Rutin</b></h4> 
                                    <table id="datatable" class="table table-striped table-bordered">
                                        
                                    <a href="<?=site_url ()?>P2covid/pertanyaan_covid">
                                            <button class="btn btn-info">Buat Laporan Baru</button> </a>
                                         
                                         <br>
                                        <br>
                            
                                         <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal Pembuatan</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                         </thead>
                                         <tbody>
                                            <?php 
                                            $i=1;
                                            foreach($data_p2covid as $key){
                                            ?>
                                            <tr>
                                            <!-- <th>ID</th> -->
                                                <th><?php echo $i;?></th>
                                                <th><?php echo $key->tanggal;?></th>
                                                <th><?php echo $key->status;?></th>
                                                <th><a class="btn btn-warning" href="">Lengkapi Laporan</a></th>
                                            </tr>
                                            <?php $i++; } ?>
                                         </tbody>
                                    </table>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>