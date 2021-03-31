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
                            <h4 class="header-title m-t-0 m-b-30">K3 Lingker</h4>
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#9" data-toggle="tab" aria-expanded="true">
                                        <span class="visible-xs"><i class="fa fa-home"></i></span>
                                        <span class="hidden-xs">Daftar juru las </span> <br>
                                        
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#11" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs"><i class="fa fa-user"></i></span>
                                        <span class="hidden-xs">Daftar tenaga kerja </span> <br>
                                        <span class="hidden-xs"> di ketinggian </span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#12" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                                        <span class="hidden-xs">Daftar  tenaga kerja   </span> <br>
                                        <span class="hidden-xs">di ruang terbatas </span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#13" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                        <span class="hidden-xs">Daftar ahli K3  </span> <br>
                                        <span class="hidden-xs">lingkungan kerja</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#14" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                        <span class="hidden-xs">Rekaman pengukuran & </span> <br>
                                        <span class="hidden-xs"> pengendalian lingkungan kerja</span>
                                    </a>
                                </li>

                                <li class="">
                                    <a href="#15" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                        <span class="hidden-xs"> Rekaman penerapan   </span> <br>
                                        <span class="hidden-xs">higiene & sanitasi</span>
                                    </a>
                                </li>

                                <li class="">
                                    <a href="#16" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                        <span class="hidden-xs"> Rekaman pemeriksaan    </span> <br>
                                        <span class="hidden-xs">dan/atau pengujian</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="9">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card-box table-responsive">
                                                <h4 class="m-t-0 header-title"><b>Daftar Juru Las</b></h4> 
                                                <div class="table-responsive">
                                                    <table class="table m-0">
                                                       <a href="<?=site_url ()?>K3lingker/tambah_juru_las">
                                                        <button class="btn btn-info">Tambah Data</button></a> 
                                                        <thead>
                                                           <tr>
                                                            <th>#</th> 
                                                            <th>Nama Juru Las</th>
                                                            <th>Klasifikasi Juru Las</th>
                                                            <th>No. Sertifikat</th>
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
                                       <h4 class="m-t-0 header-title"><b>Daftar tenaga kerja di ketinggian</b></h4> 
                                       <div class="table-responsive">
                                           <table class="table m-0">
                                            <a href="<?=site_url ()?>K3lingker/tambah_tenaga_kerja">
                                               <button class="btn btn-info">Tambah Data</button></a> 
                                               <thead>
                                                <tr>
                                                <th>#</th> 
                                                <th>Nama Petugas</th>
                                                <th>Kompetensi & Kewenangan</th>
                                                <th>No. Sertifikat</th>
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
                            <h4 class="m-t-0 header-title"><b>Daftar tenaga kerja di ruang terbatas</b></h4> 
                            <div class="table-responsive">
                                <table class="table m-0">
                                 <a href="<?=site_url ()?>K3lingker/tambah_tk_ruang">    
                                     <button class="btn btn-info">Tambah Data</button></a> 
                                     <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Petugas</th>
                                            <th>Jenjang</th>
                                            <th>No. Sertifikat</th>
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
                            <h4 class="m-t-0 header-title"><b> Daftar ahli K3 Lingkungan Kerja</b></h4> 

                            <div class="table-responsive">
                                <table class="table m-0">
                                    <a href="<?=site_url ()?>K3lingker/tambah_ak3_lingker">
                                        <button class="btn btn-info">Tambah Data</button></a> 
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Petugas</th>
                                                <th>Jenjang</th>
                                                <th>No. Sertifikat</th>
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
                                <h4 class="m-t-0 header-title"><b>Rekaman pengukuran dan pengendalian lingkungan kerja</b></h4> 

                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <a href="<?=site_url ()?>K3lingker/tambah_pengukuran_lingker">
                                            <button class="btn btn-info">Tambah Data</button></a> 
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

                <div class="tab-pane" id="15">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <h4 class="m-t-0 header-title"><b>Rekaman penerapan higiene dan sanitasi</b></h4> 

                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <a href="<?=site_url ()?>K3lingker/tambah_penerapan_higiene">
                                            <button class="btn btn-info">Tambah Data</button></a> 
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

                <div class="tab-pane" id="16">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <h4 class="m-t-0 header-title"><b>Rekaman pemeriksaan dan/atau pengujian</b></h4> 
                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <a href="<?=site_url ()?>K3lingker/tambah_pemeriksaan">
                                            <button class="btn btn-info">Tambah Data</button></a> 
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tanggal</th>
                                                    <th>Jenis</th>
                                                    <th>Nama Pelaksana</th>
                                                    <th>Lembaga Pelaksana</th>
                                                    <th>File Laporan</th>
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
</body>                       
