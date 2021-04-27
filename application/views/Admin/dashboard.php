<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <div class="row">
<br>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <!-- <div class="card-box widget-box-two"> -->
                                    <div class="wigdet-one-content text-center">
                                        <!-- <p class="m-0 text-uppercase font-1200 font-secondary text-overflow">Data Perusahaan Anda</p> -->
                                        <h1 class="text-success">Hallo... <?php echo $akun; ?></h1>
                                        <p class="text-muted m-0">Mohon Mengisi Data dengan Benar</p> <br>
                                        
                                        <div class="col-lg-6"> <br>
                                            <div class="card-box widget-box-one">
                                                <div class="wigdet-one-content">
                                                    <p class="m-0 text-uppercase font-600 font-secondary text-overflow text-center"> <span class="label label-danger"> Jumlah Sertifikat Izin Kadaluwarsa </span></p>
                                                    <h2 class="text-danger text-center"><span data-plugin="counterup"><?php echo sizeof( $kebakaran_instalasi)+ sizeof($listrik_listrik)+sizeof($listrik_petir)+ sizeof($mekanik_angkat)
                                +sizeof($mekanik_bejana)+sizeof($mekanik_elevator)+sizeof($mekanik_ketel)+sizeof($mekanik_mesin)
                                +sizeof($mekanik_ukur) ?> </span></h2>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-lg-6"> <br>
                                            <div class="card-box widget-box-one">
                                                <div class="wigdet-one-content">
                                                    <p class="m-0 text-uppercase font-600 font-secondary text-overflow text-center"><span class="label label-danger">Jumlah Sertifikat Personel Kadaluwarsa</span></p>
                                                    <h2 class="text-danger text-center"><span data-plugin="counterup"><?php echo sizeof($kebakaran_ak3)+ sizeof($kebakaran_petugas)+sizeof($kebakaran_penanggulangan)+ sizeof($listrik_ak3)
                                +sizeof($listrik_teknisi)+sizeof($lingker_k3)+sizeof($lingker_ketinggian)+sizeof($lingker_ruang)
                                +sizeof($lingker_jurulas)+sizeof($p3k) ?> </span></h2>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
<!--daftar sertifikat izin -->
                                        <div class="card-box">
                    <div class="card-box table-responsive">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered">
                            <h4 class="header-title m-t-0 m-b-30">Daftar Sertifikat izin peralatan dan instalasi perusahaan yang kadaluwarsa</h4>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Perusahan</th>
                                        <th>Jenis Kadaluwarsa</th>
                                        <th>Tanggal Kadaluwarsa</th>
                                        <!-- <th>Aksi</th> -->
                                    </tr>
                                </thead>
                                <tbody>

                                <?php $i=0;
                                foreach($kebakaran_instalasi as $key){
                                    $i++;?>
                                    <tr>
                                        <th><?= $i ?></th>
                                        <td><?= $key->nama_perusahaan ?></td>
                                        <td>Izin pemakaian instalasi pemadam kebakaran</td>
                                        <td><span class="label label-danger"><?= $key->masa_berlaku ?></span></td>
                                        
                                    </tr>
                                    <?php } ?>
                                    <?php
                                foreach($listrik_listrik as $key){
                                    $i++;?>
                                    <tr>
                                        <th><?= $i ?></th>
                                        <td><?= $key->nama_perusahaan ?></td>
                                        <td>Ijin pemakaian/kelayakan instalasi listrik</td>
                                        <td><span class="label label-danger"><?= $key->masa_berlaku ?></span></td>
                                        
                                    </tr>
                                    <?php } ?>
                                    <?php
                                foreach($listrik_petir as $key){
                                    $i++;?>
                                    <tr>
                                        <th><?= $i ?></th>
                                        <td><?= $key->nama_perusahaan ?></td>
                                        <td>Ijin pemakaian/kelayakan penyalur petir</td>
                                        <td><span class="label label-danger"><?= $key->masa_berlaku ?></span></td>
                                        
                                    </tr>
                                    <?php } ?>
                                    <?php
                                foreach($mekanik_angkat as $key){
                                    $i++;?>
                                    <tr>
                                        <th><?= $i ?></th>
                                        <td><?= $key->nama_perusahaan ?></td>
                                        <td>Alat angkat dan Angkut</td>
                                        <td><span class="label label-danger"><?= $key->masa ?></span></td>
                                        
                                    </tr>
                                    <?php } ?>
                                    <?php
                                foreach($mekanik_bejana as $key){
                                    $i++;?>
                                    <tr>
                                        <th><?= $i ?></th>
                                        <td><?= $key->nama_perusahaan ?></td>
                                        <td>Bejana bertekanan dan tangki timbun</td>
                                        <td><span class="label label-danger"><?= $key->masa ?></span></td>
                                        
                                    </tr>
                                    <?php } ?>
                                    <?php
                                foreach($mekanik_elevator as $key){
                                    $i++;?>
                                    <tr>
                                        <th><?= $i ?></th>
                                        <td><?= $key->nama_perusahaan ?></td>
                                        <td>Elevator dan ekskalator</td>
                                        <td><span class="label label-danger"><?= $key->masa ?></span></td>
                                        
                                    </tr>
                                    <?php } ?>
                                    <?php
                                foreach($mekanik_ketel as $key){
                                    $i++;?>
                                    <tr>
                                        <th><?= $i ?></th>
                                        <td><?= $key->nama_perusahaan ?></td>
                                        <td>Ketel uap</td>
                                        <td><span class="label label-danger"><?= $key->masa ?></span></td>
                                        
                                    </tr>
                                    <?php } ?>
                                    <?php
                                foreach($mekanik_mesin as $key){
                                    $i++;?>
                                    <tr>
                                        <th><?= $i ?></th>
                                        <td><?= $key->nama_perusahaan ?></td>
                                        <td>Mesin tenaga dan produksi</td>
                                        <td><span class="label label-danger"><?= $key->masa ?></span></td>
                                        
                                    </tr>
                                    <?php } ?>
                                    <?php
                                foreach($mekanik_ukur as $key){
                                    $i++;?>
                                    <tr>
                                        <th><?= $i ?></th>
                                        <td><?= $key->nama_perusahaan ?></td>
                                        <td>Alat ukur</td>
                                        <td><span class="label label-danger"><?= $key->masa ?></span></td>
                                        
                                    </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sertifikat personel-->
                <div class="card-box">
                                <div class="card-box table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered">
                                    <h4 class="header-title m-t-0 m-b-30 text-center">Daftar Sertifikat Personel yang kadaluwarsa</h4>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Perusahan</th>
                                                <th>Nama</th>
                                                <th>Jenis</th>
                                                <th>Tanggal Kadaluwarsa</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 0;
                                            foreach ($kebakaran_ak3 as $key) {
                                                $i++; ?>
                                                <tr>
                                                    <th><?= $i ?></th>
                                                    <td><?= $key->nama_perusahaan ?></td>
                                                    <td><?= $key->nama ?></td>
                                                    <td>Ahli K3 penanggulangan kebakaran</td>
                                                    <td><span class="label label-danger"><?= $key->masa_berlaku ?></span></td>

                                                </tr>
                                            <?php } ?>
                                            <?php
                                            foreach ($kebakaran_petugas as $key) {
                                                $i++; ?>
                                                <tr>
                                                    <th><?= $i ?></th>
                                                    <td><?= $key->nama_perusahaan ?></td>
                                                    <td><?= $key->nama ?></td>
                                                    <td>Petugas peran kebakaran</td>
                                                    <td><span class="label label-danger"><?= $key->masa_berlaku ?></span></td>

                                                </tr>
                                            <?php } ?>
                                            <?php
                                            foreach ($kebakaran_penanggulangan as $key) {
                                                $i++; ?>
                                                <tr>
                                                    <th><?= $i ?></th>
                                                    <td><?= $key->nama_perusahaan ?></td>
                                                    <td><?= $key->nama ?></td>
                                                    <td>Koordinator penanggulangan kebakaran</td>
                                                    <td><span class="label label-danger"><?= $key->masa_berlaku ?></span></td>

                                                </tr>
                                            <?php } ?>
                                            <?php
                                            foreach ($listrik_ak3 as $key) {
                                                $i++; ?>
                                                <tr>
                                                    <th><?= $i ?></th>
                                                    <td><?= $key->nama_perusahaan ?></td>
                                                    <td><?= $key->nama ?></td>
                                                    <td>Ahli K3 Listrik</td>
                                                    <td><span class="label label-danger"><?= $key->masa_berlaku ?></span></td>

                                                </tr>
                                            <?php } ?>
                                            <?php
                                            foreach ($listrik_teknisi as $key) {
                                                $i++; ?>
                                                <tr>
                                                    <th><?= $i ?></th>
                                                    <td><?= $key->nama_perusahaan ?></td>
                                                    <td><?= $key->nama ?></td>
                                                    <td>Teknisi listrik</td>
                                                    <td><span class="label label-danger"><?= $key->masa_berlaku ?></span></td>

                                                </tr>
                                            <?php } ?>
                                            <?php
                                            foreach ($lingker_k3 as $key) {
                                                $i++; ?>
                                                <tr>
                                                    <th><?= $i ?></th>
                                                    <td><?= $key->nama_perusahaan ?></td>
                                                    <td><?= $key->nama ?></td>
                                                    <td>Ahli K3 lingkungan kerja</td>
                                                    <td><span class="label label-danger"><?= $key->masa_berlaku ?></span></td>

                                                </tr>
                                            <?php } ?>
                                            <?php
                                            foreach ($lingker_ketinggian as $key) {
                                                $i++; ?>
                                                <tr>
                                                    <th><?= $i ?></th>
                                                    <td><?= $key->nama_perusahaan ?></td>
                                                    <td><?= $key->nama ?></td>
                                                    <td>Tenaga kerja di ketinggian</td>
                                                    <td><span class="label label-danger"><?= $key->masa_berlaku ?></span></td>

                                                </tr>
                                            <?php } ?>
                                            <?php
                                            foreach ($lingker_ruang as $key) {
                                                $i++; ?>
                                                <tr>
                                                    <th><?= $i ?></th>
                                                    <td><?= $key->nama_perusahaan ?></td>
                                                    <td><?= $key->nama ?></td>
                                                    <td>Tenaga kerja di ruang terbatas</td>
                                                    <td><span class="label label-danger"><?= $key->masa_berlaku ?></span></td>

                                                </tr>
                                            <?php } ?>
                                            <?php
                                            foreach ($lingker_jurulas as $key) {
                                                $i++; ?>
                                                <tr>
                                                    <th><?= $i ?></th>
                                                    <td><?= $key->nama_perusahaan ?></td>
                                                    <td><?= $key->nama ?></td>
                                                    <td>Juru las</td>
                                                    <td><span class="label label-danger"><?= $key->masa_berlaku ?></span></td>

                                                </tr>
                                            <?php } ?>
                                            <?php
                                            foreach ($p3k as $key) {
                                                $i++; ?>
                                                <tr>
                                                    <th><?= $i ?></th>
                                                    <td><?= $key->nama_perusahaan ?></td>
                                                    <td><?= $key->nama ?></td>
                                                    <td>Petugas P3K</td>
                                                    <td><span class="label label-danger"><?= $key->masa_berlaku ?></span></td>

                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                                        <!-- <a><img src="<?php echo base_url() ?>assets/images/okee-01.png" class="img-responsive text-center" alt="Responsive image" ></a> -->
                                    </div>
                                <!-- </div> -->
                            </div><!-- end col -->
            </div>
            <!-- end row -->
            


        </div> <!-- container -->

    </div> <!-- content -->



</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

<!-- END wrapper -->