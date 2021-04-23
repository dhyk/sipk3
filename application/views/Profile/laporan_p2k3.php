<body class="fixed-left">
<div id="wrapper">
<div class="content-page">
<div class="content">
<div class="container">
<div class="row">
<div class="col-md-12">
    <br />
    <div class="card-box">
        <h4 class="header-title m-t-0 m-b-30">Laporan P2K3 </h4>
        <div class="card-box table-responsive">
                <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered">
                        <div class="form-group m-b-0">
 												<!-- <div class="col-sm-offset-0 col-sm-12">
                                                     <a target="_blank" href="<?php echo base_url()."upload/template_p2k3/template_lap_p2k3.pdf" ?>"><button class="btn btn-orange waves-effect waves-light "><i class="glyphicon glyphicon-cloud-download"></i> Download Template Laporan</button></a>
 													<a href="<?=site_url ()?>Laporan/tambah_laporan_p2k3"><button class="btn btn-info">Tambah Data</button></a> 
 												</div> -->
 											</div>
                                 
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Laporan P2K3</th>
                                        <th>Tanggal Laporan</th>
                                        <!-- <th>Aksi</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $i=1;
                                    foreach($data_laporan_p2k3 as $key){ ?>
                                    <tr>
                                        <th scope="row"><?php echo $i; ?></th>
                                        <td><?php echo $key->nama; ?></td>
                                        <td><a target="_blank" href="<?php echo base_url()."upload/upload_berkas_laporan_p2k3/".$key->file; ?>">Lihat Laporan</a></td>
                                        <td><?php echo $key->tanggal_laporan; ?></td>
                                        <!-- <td>
                                            <a href="<?php echo base_url()."index.php/Laporan/hapus_laporan_p2k3?id=".$key->id_laporan; ?>"><i class="ion-trash-a"></i>Hapus</a>
                                        </td> -->
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