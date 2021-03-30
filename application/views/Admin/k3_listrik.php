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
                            <h4 class="header-title m-t-0 m-b-30">K3 Instalasi Kelistrikan <span class="help-block"><small>*Pastikan Data yang anda masukkan benar</small></h4>

                            <div class="col-md-12">
                                <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/K3listrik/simpan_k3listrik';?>">

                                    <div class="form-group clearfix">
                                        <label class="col-md-2 control-label">Apakah memiliki pembangkit listrik diatas 200 KVA ? </label>
                                        <div class="col-md-10">
                                             <div class="radio radio-success">
                                                <input type="radio" name="pembangkit" id="radio4" value="Ya" required>
                                                <label for="radio4">Ya</label>
                                            </div>

                                            <div class="radio radio-success">
                                                <input type="radio" name="pembangkit" id="radio4" value="Tidak">
                                                <label for="radio4">Tidak</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Sumber bahaya instalasi listrik</label>
                                        <div class="col-md-10">
                                        <input type="text" class="form-control" required name="bahaya">   
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Standar instalasi listrik</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" required name="standar">
                                        </div>
                                    </div>

                                   <div class="form-group clearfix">
                                        <label class="col-md-2 control-label">Apakah ada AK3 listrik ? </label>
                                        <div class="col-md-10">
                                             <div class="radio radio-success">
                                                <input type="radio" name="ak3" id="radio4" value="Ada" required>
                                                <label for="radio4">Ada</label>
                                            </div>

                                            <div class="radio radio-success">
                                                <input type="radio" name="ak3" id="radio4" value="Tidak">
                                                <label for="radio4">Tidak ada</label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group clearfix">
                                        <label class="col-md-2 control-label">Apakah ada teknisi K3 listrik ? </label>
                                        <div class="col-md-10">
                                             <div class="radio radio-success">
                                                <input type="radio" name="teknisi" id="radio4" value="Ada" required>
                                                <label for="radio4">Ada</label>
                                            </div>

                                            <div class="radio radio-success">
                                                <input type="radio" name="teknisi" id="radio4" value="Tidak">
                                                <label for="radio4">Tidak ada</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group clearfix">
                                        <div class="col-md-2">
                                        <input type="submit" value="Simpan" class="btn btn-success">
                                        </div>
                                    </div>

                                    
                                    </form>
                                </div>
                                <br>

                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#9" data-toggle="tab" aria-expanded="true">
                                            <span class="visible-xs"><i class="fa fa-home"></i></span>
                                            <span class="hidden-xs">sertifikat ijin pemakaian</span> <br>
                                            <span class="hidden-xs">kelayakan instalasi listrik</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#11" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs"><i class="fa fa-user"></i></span>
                                            <span class="hidden-xs">sertifikat ijin pemakaian </span> <br>
                                            <span class="hidden-xs">kelayakan instalasi penyalur petir</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#12" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                                            <span class="hidden-xs"> Daftar AK3  </span> <br>
                                            <span class="hidden-xs">Listrik </span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#13" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                            <span class="hidden-xs">Daftar Tekniki</span> <br>
                                            <span class="hidden-xs">K3 Listrik</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#14" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                            <span class="hidden-xs">rekaman pemeriksaan &</span> <br>
                                            <span class="hidden-xs">pengujian instalasi listrik </span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a href="#15" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                            <span class="hidden-xs">rekaman pemeriksaan &  </span> <br>
                                            <span class="hidden-xs">pengujian instalasi penyalur petir</span>
                                        </a>
                                    </li>
                                    
                                </ul>

                                <div class="tab-content">

                                    <div class="tab-pane active" id="9">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <h4 class="m-t-0 header-title"><b>sertifikat ijin pemakaian/kelayakan instalasi listrik</b></h4> 

                                                    <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <a href="<?=site_url ()?>K3listrik/tambah_kelayakan_listrik">
                                                        <button class="btn btn-info">Tambah Data</button></a> 
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>No. Sertfikat</th>
                                                                <th>Tanggal Terbit</th>
                                                                <th>Masa Berlaku</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>
                                                                    <a href="" ><i class="ion-eye"></i>Lihat</a>
                                                                    <a href=""><i class="ion-edit"></i>Edit</a>
                                                                    <a href=""><i class="ion-trash-a"></i>Hapus</a>
                                                                </td>
                                                               
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="tab-pane" id="11">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <h4 class="m-t-0 header-title"><b>sertifikat ijin pemakaian/kelayakan instalasi penyalur petir</b></h4> 

                                                     <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <a href="<?=site_url ()?>K3listrik/tambah_kelayakan_petir">
                                                        <button class="btn btn-info">Tambah Data</button></a> 
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>No. Sertfikat</th>
                                                                <th>Tanggal Terbit</th>
                                                                <th>Masa Berlaku</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>
                                                                    <a href="" ><i class="ion-eye"></i>Lihat</a>
                                                                    <a href=""><i class="ion-edit"></i>Edit</a>
                                                                    <a href=""><i class="ion-trash-a"></i>Hapus</a>
                                                                </td>
                                                               
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="12">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card-box table-responsive">
                                                <h4 class="m-t-0 header-title"><b>daftar AK3 Listrik</b></h4> 

                                                 <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <a href="<?=site_url ()?>K3listrik/tambah_ak3_listrik">
                                                        <button class="btn btn-info">Tambah Data</button></a> 
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Nama</th>
                                                                <th>Nomor Sertifikat</th>
                                                                <th>Tanggal Terbit</th>
                                                                <th>Masa Berlaku</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td> 
                                                                    <a href="" ><i class="ion-eye"></i>Lihat</a>
                                                                    <a href=""><i class="ion-edit"></i>Edit</a>
                                                                    <a href=""><i class="ion-trash-a"></i>Hapus</a>
                                                                </td>
                                                               
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="tab-pane" id="13">
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                            <h4 class="m-t-0 header-title"><b>daftar Teknisi K3 Listrik</b></h4> 

                                           <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <a href="<?=site_url ()?>K3listrik/tambah_teknisi">
                                                        <button class="btn btn-info">Tambah Data</button></a> 
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Nama</th>
                                                                <th>Nomor Sertifikat</th>
                                                                <th>Tanggal Terbit</th>
                                                                <th>Masa Berlaku</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td> 
                                                                    <a href="" ><i class="ion-eye"></i>Lihat</a>
                                                                    <a href=""><i class="ion-edit"></i>Edit</a>
                                                                    <a href=""><i class="ion-trash-a"></i>Hapus</a>
                                                                </td>
                                                               
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                        </div>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="tab-pane" id="14">
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                            <h4 class="m-t-0 header-title"><b>rekaman pemeriksaan & pengujian instalasi listrik </b></h4> 

                                           <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <a href="<?=site_url ()?>K3listrik/tambah_rekaman_pemeriksaan_listrik">
                                                        <button class="btn btn-info">Tambah Data</button></a> 
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Tanggal Pemeriksaan</th>
                                                                <th>File Laporan Pemeriksaan & Pengujian</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td> 
                                                                    <a href="" ><i class="ion-eye"></i>Lihat</a>
                                                                    <a href=""><i class="ion-edit"></i>Edit</a>
                                                                    <a href=""><i class="ion-trash-a"></i>Hapus</a>
                                                                </td>
                                                               
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                        </div>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="tab-pane" id="15">
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                            <h4 class="m-t-0 header-title"><b>rekaman pemeriksaan & pengujian instalasi penyalur petir</b></h4> 

                                           <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <a href="<?=site_url ()?>K3listrik/tambah_rekaman_pemeriksaan_petir">
                                                        <button class="btn btn-info">Tambah Data</button></a> 
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Tanggal Pemeriksaan</th>
                                                                <th>File Laporan Pemeriksaan</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td> 
                                                                    <a href="" ><i class="ion-eye"></i>Lihat</a>
                                                                    <a href=""><i class="ion-edit"></i>Edit</a>
                                                                    <a href=""><i class="ion-trash-a"></i>Hapus</a>
                                                                </td>
                                                               
                                                            </tr>
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
    </div>
</div>
</div>
</div>
</body>