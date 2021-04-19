<body class="fixed-left">
    <div id="wrapper">
        <div class="content-page">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <br />
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Daftar Petugas P3K<span class="help-block"><small>*Pastikan Data yang anda masukkan benar</small></span></h4>
                                <div class="card-box table-responsive">
                                    <div class="table-responsive">
                                    <table  id="datatable" class="table table-striped table-bordered">
                            <a href="<?=site_url ()?>P3K/tambah_petugas">
                                <button class="btn btn-info">Tambah Data</button></a> 
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Petugas</th>
                                        <th>No.Sertfikat </th>
                                        <th>Tanggal Terbit</th>
                                        <th>Masa Berlaku</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    <?php $i=1;foreach($data_petugas as $key){ ?>
                                    <tr>
                                        <th scope="row"><?php echo $i;?></th>
                                        <td><?php echo $key->nama;?></td>
                                        <td><?php echo $key->nomor;?></td>
                                        <td><?php echo $key->tanggal;?></td>
                                        <td><?php echo $key->masa;?></td>
                                        <td>
                                           
                                            <a href="<?php echo base_url().'index.php/P3K/hapus_p3k_petugas?id='.$key->id_petugas;?>"><i class="ion-trash-a"></i>Hapus</a>
                                        </td>

                                    </tr>
                                    <?php $i++;
                                    }?>
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