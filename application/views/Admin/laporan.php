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
                                                            <a href="<?php echo site_url()?>Admin/pertanyaan">
                                                            <?php if($this->session->userdata('p')==null){?>
                                                                <button class="btn btn-info">Buat Laporan Baru</button></a> 
                                                                <?php } ?>
                                                                <br>
                                                                <thead>
                                                                    <tr>
                                                                        <!-- <th>ID</th> -->
                                                                        <th>No</th>
                                                                        <th>Tanggal Pembuatan</th>
                                                                        
                                                                        <th>Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php 
                                                                var_dump($this->session->userdata('p')->p1);
                                                                $i=1;
                                                                foreach($data_laporan as $key){
                                                                ?>
                                                                <tr>
                                                                        <!-- <th>ID</th> -->
                                                                        <th><?php echo $i;?></th>
                                                                        <th><?php echo $key->tanggal;?></th>
                                                                        <th><a class="btn btn-warning" href="<?php echo base_url().'index.php/Pertanyaan/hasil_pertanyaan?id='.$key->id_pertanyaan; ?>">Lengkapi Laporan</a></th>
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