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
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">Daftar Sertifikat izin peralatan dan instalasi perusahaan yang kadaluwarsa</h4>
                    <div class="card-box table-responsive">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered">
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
                                        <td class="text-danger"><?= $key->masa_berlaku ?></td>
                                        
                                    </tr>
                                    <?php } ?>
                                    <?php
                                foreach($listrik_listrik as $key){
                                    $i++;?>
                                    <tr>
                                        <th><?= $i ?></th>
                                        <td><?= $key->nama_perusahaan ?></td>
                                        <td>Ijin pemakaian/kelayakan instalasi listrik</td>
                                        <td class="text-danger"><?= $key->masa_berlaku ?></td>
                                        
                                    </tr>
                                    <?php } ?>
                                    <?php
                                foreach($listrik_petir as $key){
                                    $i++;?>
                                    <tr>
                                        <th><?= $i ?></th>
                                        <td><?= $key->nama_perusahaan ?></td>
                                        <td>Ijin pemakaian/kelayakan penyalur petir</td>
                                        <td class="text-danger"><?= $key->masa_berlaku ?></td>
                                        
                                    </tr>
                                    <?php } ?>
                                    <?php
                                foreach($mekanik_angkat as $key){
                                    $i++;?>
                                    <tr>
                                        <th><?= $i ?></th>
                                        <td><?= $key->nama_perusahaan ?></td>
                                        <td>Alat angkat dan Angkut</td>
                                        <td class="text-danger"><?= $key->masa ?></td>
                                        
                                    </tr>
                                    <?php } ?>
                                    <?php
                                foreach($mekanik_bejana as $key){
                                    $i++;?>
                                    <tr>
                                        <th><?= $i ?></th>
                                        <td><?= $key->nama_perusahaan ?></td>
                                        <td>Bejana bertekanan dan tangki timbun</td>
                                        <td class="text-danger"><?= $key->masa ?></td>
                                        
                                    </tr>
                                    <?php } ?>
                                    <?php
                                foreach($mekanik_elevator as $key){
                                    $i++;?>
                                    <tr>
                                        <th><?= $i ?></th>
                                        <td><?= $key->nama_perusahaan ?></td>
                                        <td>Elevator dan ekskalator</td>
                                        <td class="text-danger"><?= $key->masa ?></td>
                                        
                                    </tr>
                                    <?php } ?>
                                    <?php
                                foreach($mekanik_ketel as $key){
                                    $i++;?>
                                    <tr>
                                        <th><?= $i ?></th>
                                        <td><?= $key->nama_perusahaan ?></td>
                                        <td>Ketel uap</td>
                                        <td class="text-danger"><?= $key->masa ?></td>
                                        
                                    </tr>
                                    <?php } ?>
                                    <?php
                                foreach($mekanik_mesin as $key){
                                    $i++;?>
                                    <tr>
                                        <th><?= $i ?></th>
                                        <td><?= $key->nama_perusahaan ?></td>
                                        <td>Mesin tenaga dan produksi</td>
                                        <td class="text-danger"><?= $key->masa ?></td>
                                        
                                    </tr>
                                    <?php } ?>
                                    <?php
                                foreach($mekanik_ukur as $key){
                                    $i++;?>
                                    <tr>
                                        <th><?= $i ?></th>
                                        <td><?= $key->nama_perusahaan ?></td>
                                        <td>Alat ukur</td>
                                        <td class="text-danger"><?= $key->masa ?></td>
                                        
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
            </div>
        </div>
    </div>
</body>