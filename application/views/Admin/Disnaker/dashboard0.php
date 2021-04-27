<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <div class="row">
<br>
                <div class="col-lg-4 col-md-6">
                    <div class="card-box widget-box-two widget-two-default">
                        
                        <div class="wigdet-two-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow text-center">Jumlah Aduan Norma <br> Ketenagakerjaan</p>
                            <h2 class="text-center"><span data-plugin="counterup"><?php echo $aduan[0]->count; ?></span> <small></small></h2>
                            <!-- <p class="text-muted m-0"><b>Last:</b> 30.4k</p> -->
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6">
                    <div class="card-box widget-box-two widget-two-default">
                       
                        <div class="wigdet-two-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow text-center" >Jumlah Laporan <br> P2K3 Perusahaan </p>
                            <h2 class="text-center"><span data-plugin="counterup"><?php echo $p2k3[0]->count; ?> </span> <small></small></h2>
                            <!-- <p class="text-muted m-0"><b>Last:</b> 40.33k</p> -->
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6">
                    <div class="card-box widget-box-two widget-two-default">
                        
                        <div class="wigdet-two-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow text-center" >Jumlah Laporan <br> Kecelakaan Kerja</p>
                            <h2 class="text-center"><span data-plugin="counterup"><?php echo $kecelakaan[0]->count; ?></span> <small></small></h2>
                            <!-- <p class="text-muted m-0"><b>Last:</b> 30.4k</p> -->
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6">
                    <div class="card-box widget-box-two widget-two-default">
                        
                        <div class="wigdet-two-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow text-center" >Jumlah Perusahaan <br> Yang Terdaftar </p>
                            <h2 class="text-center text-green"><span data-plugin="counterup"><?php echo $perusahaan1[0]->count; ?></span> <small><br></small></h2>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card-box widget-box-two widget-two-default">
                        
                        <div class="wigdet-two-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow text-center">Jumlah Sertifikat Izin Peralatan <br> & Instalasi Perushaan Kadaluwarsa </p>
                            <h2 class="text-center text-success"><span data-plugin="counterup">
                                <?php  echo
                                $kebakaran_instalasi[0]->count+$listrik_listrik[0]->count+$listrik_petir[0]->count+$mekanik_angkat[0]->count
                                +$mekanik_bejana[0]->count+$mekanik_elevator[0]->count+$mekanik_ketel[0]->count+$mekanik_mesin[0]->count
                                +$mekanik_ukur[0]->count; ?>
                                
                                </span> <small><br></small></h2>
                               

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card-box widget-box-two widget-two-default">
                        
                        <div class="wigdet-two-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow text-center" >Jumlah Sertifikat Personel <br>Kadaluwarsa </p>
                            <h2 class="text-center text-green"><span data-plugin="counterup"><?php echo$kebakaran_ak3[0]->count+$kebakaran_petugas[0]->count+$kebakaran_penanggulangan[0]->count+$listrik_ak3[0]->count
                                +$listrik_teknisi[0]->count+$lingker_k3[0]->count+$lingker_ketinggian[0]->count+$lingker_ruang[0]->count
                                +$lingker_jurulas[0]->count;+$p3k[0]->count; ?></span> <small><br></small></h2>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow text-center">Jumlah Aduan <br><span class="label label-danger"> Belum Selesai </span></p>
                                        <h2 class="text-danger text-center"><span data-plugin="counterup"> <?php echo $status_progres[0]->count; ?></span></h2>
                                    </div>
                                </div>
                            </div><!-- end col -->
                <div class="col-md-6 col-sm-6">
                    <div class="card-box widget-box-one">
                        <div class="wigdet-one-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow text-center">Jumlah Aduan <br> <span class="label label-success">Selesai</span></p>
                            <h2 class="text-success text-center"><span data-plugin="counterup"><?php echo $status_selesai[0]->count; ?> </span></h2>
                        </div>
                   </div>
                </div><!-- end col -->

            </div>
            <!-- end row -->

            <div class="card-box table-responsive">
                                <h4 class="m-t-0 header-title text-center"><b>DAFTAR PERUSAHAAN</b></h4>
                                <table id="datatable" class="table table-striped table-bordered">
                                    <br>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Perusahaan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0;
                                        foreach($perusahaan as $key){ $i++;?>
                                      <tr>
                                          <td><?php echo $i;?></td>
                                          <td><?php echo $key->nama_perusahaan; ?></td>
                                          <td><a href="<?php echo base_url().'ProAdmin?id='.$key->id_tb_user ; ?>" target="_blank"><button class="btn btn-success ">Lihat Perusahaan</button></a></td>
                                      </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
                            </div>


        </div> <!-- container -->

    </div> <!-- content -->



</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

<!-- END wrapper -->