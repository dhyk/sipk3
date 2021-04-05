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
                                <h4 class="m-t-0 header-title"><b>Laporan Kecelakaan</b></h4>
                                <a href="<?=site_url ()?>Laporan/tambah_laporan">            
                                    <button class="btn btn-info">Buat Laporan Baru</button> </a>
                                         <br>
                                         <br>
                                         <div class="table-responsive">
                            <table id="datatable-buttons-fixed-col" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                        
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Waktu Kejadian</th>
                                            <th rowspan="2">Statisun</th>
                                            <th rowspan="2">Jenis Kecelakaan</th>
                                            <th rowspan="2">Jumlah Korban</th>
                                            <th rowspan="2">Usia Korban</th>
                                            <th rowspan="2">Jenis Kelamin</th>
                                            
                                            <th colspan="5" >
                                            Kategori Dampak Kecelakaan
                                            </th>
                                            
                                            <th rowspan="2">Bagian Tubuh yang Cedera</th>
                                            <th colspan="2">Kronologi Singkat</th>
                                        
                                            <th colspan="4">Sumber bahaya potensial</th>
                                            <th rowspan="2">Pengendalian Terhadap sumber bahaya</th>
                                            <th rowspan="2">Aksi</th>
                                       </tr>
                                        <tr>
                                            <th>Ringan</th>
                                            <th>Sedang</th>
                                            <th>Berat</th>
                                            <th>Cacat</th>
                                            <th>Fatality</th>
                                            <th >Unsafe Action</th>
                                            <th >Unsafe Condition</th>
                                            <th>Peralatan/ Permesinan</th>
                                            <th>Metode Kerja</th>
                                            <th >Lingkungan Kerja</th>
                                            <th >Proses</th>                                        </tr>
                                        </thead>


                                        <tbody>
                                       <?php 
                                    
                                       $i=1; foreach($data_kecelakaan as $key){?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $key->waktu; ?></td>
                                            <td><?php echo $key->stasiun; ?></td>
                                            <td><?php echo $key->jenis; ?></td>
                                            <td><?php echo $key->jumlah; ?></td>
                                            <td><?php echo $key->usia; ?></td>
                                            <td><?php echo $key->jk; ?></td>
                                            <td><?php if($key->kategori=="Ringan") echo "x"; ?></td>
                                            <td><?php if($key->kategori=="Sedang") echo "x"; ?></td>
                                            <td><?php if($key->kategori=="Berat") echo "x"; ?></td>
                                            <td><?php if($key->kategori=="Cacat") echo "x"; ?></td>
                                            <td><?php if($key->kategori=="Fatality") echo "x"; ?></td>
                                            <td><?php echo $key->bagian; ?></td>
                                            <td><?php echo $key->k_unsafe_action; ?></td>
                                            <td><?php echo $key->k_unsafe_condition; ?></td>
                                            <td><?php if($sumber[0]=="Peralatan/Pemesianan") echo "x"; ?></td>
                                            <td><?php if($sumber[1]=="Metode Kerja") echo "x"; ?></td>
                                            <td><?php if($sumber[2]=="Lingkungan Kerja") echo "x"; ?></td>
                                            <td><?php if($sumber[3]=="Proses") echo "x"; ?></td>
                                            <td><?php echo $key->pengendalian; ?></td>
                                            <td>
                                            <a href="<?php echo base_url() . "index.php/Laporan/hapus_kecelakaan?id=" . $key->id_kecelakaan; ?>"><i class="ion-trash-a"></i>Hapus</a>
                                                       
                                            </td>
                                        </tr>
<?php $i++;} ?>
                                        </tbody>
                                    </table>
                            </div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>