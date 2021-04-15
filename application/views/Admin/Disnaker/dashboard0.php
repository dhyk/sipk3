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
                    <div class="card-box widget-box-two widget-two-primary">
                        
                        <div class="wigdet-two-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Jumlah Aduan Norma Ketenagakerjaan</p>
                            <h2><span data-plugin="counterup"><?php echo '0'; ?></span> <small></small></h2>
                            <!-- <p class="text-muted m-0"><b>Last:</b> 30.4k</p> -->
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6">
                    <div class="card-box widget-box-two widget-two-warning">
                       
                        <div class="wigdet-two-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Jumlah Laporan P2K3</p>
                            <h2><span data-plugin="counterup"><?php echo $p2k3[0]->count; ?> </span> <small></small></h2>
                            <!-- <p class="text-muted m-0"><b>Last:</b> 40.33k</p> -->
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6">
                    <div class="card-box widget-box-two widget-two-danger">
                        
                        <div class="wigdet-two-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Jumlah Laporan Kecelakaan Kerja</p>
                            <h2><span data-plugin="counterup"><?php echo $kecelakaan[0]->count; ?></span> <small></small></h2>
                            <!-- <p class="text-muted m-0"><b>Last:</b> 30.4k</p> -->
                        </div>
                    </div>
                </div><!-- end col -->

            </div>
            <!-- end row -->

            <div class="card-box table-responsive">
                                <h4 class="m-t-0 header-title"><b>Daftar Perusahaan</b></h4>
                                <table id="datatable" class="table table-striped table-bordered">
                                    <br>
                                    <br>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Perusahaan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0;
                                        foreach($perusahaan as $key){ $i++;?>
                                      <tr>
                                          <td><?php echo $i;?></td>
                                          <td><a href="<?php echo base_url().'ProAdmin?id='.$key->id_tb_user ; ?>" target="_blank"><?php echo $key->nama_perusahaan; ?></a></td>
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