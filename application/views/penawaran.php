<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Header -->

        <div class="container">
            <div id="pageMenu-trigger">
                <i class="fa fa-bars"></i>
            </div>
        </div>

        <!-- end: Page Menu -->
        <!-- Page Content -->
        <section id="page-content" class="no-sidebar">
            <div class="container">
                <!-- DataTable -->
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <h4>Penawaran saya</h4>
                        <p>Data Permintaan Harga Anda ada disini !</p>
                    </div>
                    <div class="col-lg-6 text-right">
                        <button type="button" class="btn btn-light"><i class="icon-plus"></i> Add Record</button>
                        <div id="export_buttons" class="mt-2"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Klien</th>
                                    <th>Pejabat</th>
                                    <th>Alamat</th>
                                    <th>Telepon / Faks</th>
                                    <th>Referensi</th>
                                    <th>Jenis Pekerjaan</th>
                                    <th>Barang/Obyek</th>
                                    <th>Lokasi</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th class="noExport">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data_penawaran as $key) {

                                    ?>
                                    <tr>
                                        <td><?php echo $key->klien; ?></td>
                                        <td><?php echo $key->pejabat; ?></td>
                                        <td><?php echo $key->alamat; ?></td>
                                        <td><?php echo $key->telepon; ?></td>
                                        <td><?php echo $key->referensi; ?></td>
                                        <td><?php echo $key->jenis_pekerjaan; ?></td>
                                        <td><?php echo $key->barang_objek; ?></td>
                                        <td><?php echo $key->lokasi; ?></td>
                                        <td><?php echo $key->tanggal; ?></td>
                                        <td>
                                            <?php if($key->status=='1'){?>
                                                <span class="badge badge-pill badge-primary">Diajukan</span>
                                            <?php }
                                            else if($key->status=='2'){ ?>
                                                <span class="badge badge-pill badge-success">Diterima</span>
                                            <?php }
                                            else{ ?>
                                                <span class="badge badge-pill badge-danger">Ditolak</span>
                                            <?php } ?>

                                        </td>
                                        <td> <a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Edit"><i class="icon-edit"></i></a>
                                            <a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Delete"><i class="icon-trash-2"></i></a>
                                            <!-- <a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Settings"><i class="icon-settings"></i></a> -->
                                        </td>
                                    </tr>
                                <?php }?>

                            </tbody>
                                        <!-- <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Date</th>
                                                <th>Salary</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot> -->
                                    </table>
                                </div>
                            </div>
                            <!-- end: DataTable -->
                        </div>
                    </section>
                </div>
            </div>
        </header>
    </div>

    <script>
        $(document).ready(function () {
            var table = $('#datatable').DataTable({
                buttons: [{
                    extend: 'print',
                    title: 'List Data Penawaran',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }
                }, {
                    extend: 'pdf',
                    title: 'List Data Penawaran',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }
                }, {
                    extend: 'excel',
                    title: 'List Data Penawaran',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }
                // }, {
                //     extend: 'csv',
                //     title: 'Test Data export',
                //     exportOptions: {
                //         columns: "thead th:not(.noExport)"
                //     }
                // }, {
                //     extend: 'copy',
                //     title: 'Test Data export',
                //     exportOptions: {
                //         columns: "thead th:not(.noExport)"
                //     }
            }]
        });
            table.buttons().container().appendTo('#export_buttons');
            $("#export_buttons .btn").removeClass('btn-secondary').addClass('btn-light');
        });
    </script>


</body>