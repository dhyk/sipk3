<body class="fixed-left">
<div id="wrapper">
<div class="content-page">
<div class="content">
<div class="container">
<div class="row">
<div class="col-md-12">
    <br />
    <div class="card-box">
        <h4 class="header-title m-t-0 m-b-30">Daftar nama koordinator unit penanggulangan kebakaran<span class="help-block"><small>*Pastikan Data yang anda masukkan benar</small></span></h4>
        <div class="card-box table-responsive">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered">
                    <!-- <a href="<?=site_url ()?>Kebakaran/tambah_koordinator"><button class="btn btn-info">Tambah Data</button></a>  -->
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Sertfikat Kursus Tingkat II</th>
                                <th>Tanggal Terbit</th>
                                <th>Masa Berlaku</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i=1;
                            foreach($data_penanggulangan as $key){ ?>
                                <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><?php echo $key->nama; ?></td>
                                    <td><a target="_blank" href="<?php echo base_url()."upload/upload_berkas_kebakaran/".$key->sertifikat; ?>">Lihat Sertifikat</a></td>
                                    <td><?php echo $key->tanggal_terbit; ?></td>
                                    <td><?php echo $key->masa_berlaku; ?></td>
                                    <td>
                                        <a href="<?php echo base_url()."index.php/Kebakaran/hapus_kebakaran_penanggulangan?id=".$key->id_penanggulangan; ?>"><i class="ion-trash-a"></i>Hapus</a>
                                    </td>
                                </tr>
                            <?php $i++;
                            } ?>
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