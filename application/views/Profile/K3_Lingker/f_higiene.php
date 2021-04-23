<body class="fixed-left">
    <div id="wrapper">
        <div class="content-page">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <br />
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Rekaman penerapan higiene dan sanitasi<span class="help-block"><small>*Pastikan Data yang anda masukkan benar</small></span></h4>
                                <div class="card-box table-responsive">
                                    <div class="table-responsive">
                                       
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <!-- <a href="<?=site_url ()?>K3lingker/tambah_penerapan_higiene">
                                            <button class="btn btn-info">Tambah Data</button></a>  -->
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tanggal</th>
                                                    <th>Nomor Laporan</th>
                                                    <th>File Laporan</th>
                                                    <th>Aksi</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                           <?php 
                                                        
                                                        $i=1;
                                                        foreach($data_higiene as $key){ ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $i; ?></th>
                                                                <td><?php echo $key->tanggal; ?></td>
                                                                <td><?php echo $key->nomor; ?></td>
                                                                <td><a target="_blank" href="<?php echo base_url()."upload/upload_berkas_lingker/".$key->file; ?>">Lihat Laporan</a></td>
                                                                <td> 
                                                                    <a href="<?php echo base_url().'index.php/K3lingker/hapus_higiene?id='.$key->id_higiene;?>"><i class="ion-trash-a"></i>Hapus</a>
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