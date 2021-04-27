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
                                <h4 class="header-title m-t-0 m-b-30">Daftar Sertifikat Personel yang kadaluwarsa</h4>
                                <div class="card-box table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered">
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
                                                    <td class="text-danger"><?= $key->masa_berlaku ?></td>

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
                                                    <td class="text-danger"><?= $key->masa_berlaku ?></td>

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
                                                    <td class="text-danger"><?= $key->masa_berlaku ?></td>

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
                                                    <td class="text-danger"><?= $key->masa_berlaku ?></td>

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
                                                    <td class="text-danger"><?= $key->masa_berlaku ?></td>

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
                                                    <td class="text-danger"><?= $key->masa_berlaku ?></td>

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
                                                    <td class="text-danger"><?= $key->masa_berlaku ?></td>

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
                                                    <td class="text-danger"><?= $key->masa_berlaku ?></td>

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
                                                    <td class="text-danger"><?= $key->masa_berlaku ?></td>

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
                                                    <td class="text-danger"><?= $key->masa_berlaku ?></td>

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
</body>