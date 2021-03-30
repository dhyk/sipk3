  <footer class="footer text-right">
     &copy;2021 TIM IT SISUB - PT. SURVEYOR INDONESIA CABANG SURABAYA
 </footer>



 <script>
    var resizefunc = [];
</script>



<script src="<?php echo base_url()?>assets/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/js/detect.js"></script>
<script src="<?php echo base_url()?>assets/assets/js/fastclick.js"></script>
<script src="<?php echo base_url()?>assets/assets/js/jquery.blockUI.js"></script>
<script src="<?php echo base_url()?>assets/assets/js/waves.js"></script>
<script src="<?php echo base_url()?>assets/assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url()?>assets/assets/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/plugins/switchery/switchery.min.js"></script>

<script src="<?php echo base_url()?>assets/assets/plugins/moment/moment.js"></script>
<script src="<?php echo base_url()?>assets/assets/plugins/timepicker/bootstrap-timepicker.js"></script>
<script src="<?php echo base_url()?>assets/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="<?php echo base_url()?>assets/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/plugins/datatables/dataTables.bootstrap.js"></script>

<script src="<?php echo base_url()?>assets/assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/plugins/datatables/jszip.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/plugins/datatables/pdfmake.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/plugins/datatables/vfs_fonts.js"></script>
<script src="<?php echo base_url()?>assets/assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/plugins/datatables/buttons.print.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/plugins/datatables/dataTables.scroller.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/plugins/datatables/dataTables.colVis.js"></script>
<script src="<?php echo base_url()?>assets/assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>



<script src="<?php echo base_url()?>assets/assets/js/produk.js"></script>
<script src="<?php echo base_url()?>assets/assets/js/berita.js"></script>

<!-- init -->
<script src="<?php echo base_url()?>assets/assets/pages/jquery.datatables.init.js"></script>

<!--Form Wizard-->
<script src="<?php echo base_url()?>assets/assets/plugins/jquery.steps/js/jquery.steps.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>

<!-- App js -->
<script src="<?php echo base_url()?>assets/assets/js/jquery.core.js"></script>
<script src="<?php echo base_url()?>assets/assets/js/jquery.app.js"></script>


 <script src="<?php echo base_url()?>assets/assets/pages/jquery.wizard-init.js"></script>

 
<script>
    $(document).ready(function () {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({keys: true});
        $('#datatable-responsive').DataTable();
        $('#datatable-colvid').DataTable({
            "dom": 'C<"clear">lfrtip',
            "colVis": {
                "buttonText": "Pilih Kolom"
            }
        });
        $('#datatable-scroller').DataTable({
            ajax: "<?php echo base_url()?>assets/assets/plugins/datatables/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });
        var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
        var table = $('#datatable-fixed-col').DataTable({
            scrollY: "300px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            fixedColumns: {
                leftColumns: 1,
                rightColumns: 1
            }
        });
    });
    TableManageButtons.init();

</script>



</body>
</html>