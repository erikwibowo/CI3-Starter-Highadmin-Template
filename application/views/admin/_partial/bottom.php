<?php $this->load->view('admin/_partial/footer'); ?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="<?= base_url('assets/admin/') ?>assets/js/metisMenu.min.js"></script>
        <script src="<?= base_url('assets/admin/') ?>assets/js/waves.js"></script>
        <script src="<?= base_url('assets/admin/') ?>assets/js/jquery.slimscroll.js"></script>

        <!-- Flot chart -->
        <script src="<?= base_url('assets/admin/') ?>plugins/flot-chart/jquery.flot.min.js"></script>
        <script src="<?= base_url('assets/admin/') ?>plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="<?= base_url('assets/admin/') ?>plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="<?= base_url('assets/admin/') ?>plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="<?= base_url('assets/admin/') ?>plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="<?= base_url('assets/admin/') ?>plugins/flot-chart/jquery.flot.crosshair.js"></script>
        <script src="<?= base_url('assets/admin/') ?>plugins/flot-chart/curvedLines.js"></script>
        <script src="<?= base_url('assets/admin/') ?>plugins/flot-chart/jquery.flot.axislabels.js"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="<?= base_url('assets/admin/') ?>plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="<?= base_url('assets/admin/') ?>plugins/jquery-knob/jquery.knob.js"></script>

        <!-- Dashboard Init -->
        <script src="<?= base_url('assets/admin/') ?>assets/pages/jquery.dashboard.init.js"></script>

        <!-- App js -->
        <script src="<?= base_url('assets/admin/') ?>assets/js/jquery.core.js"></script>
        <script src="<?= base_url('assets/admin/') ?>assets/js/jquery.app.js"></script>

         <!-- Required datatable js -->
        <script src="<?= base_url('assets/admin/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('assets/admin/') ?>plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Toastr js -->
        <script src="<?= base_url('assets/admin/') ?>plugins/jquery-toastr/jquery.toast.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                // Default Datatable
                $('#datatable').DataTable();

                <?php if (!empty($this->session->flashdata('notif'))) { ?>
                    $.toast({
                        heading: 'Pemberitahuan',
                        text: '<?= $this->session->flashdata('notif'); ?>',
                        position: 'top-right',
                        loaderBg: '#3b98b5',
                        icon: '<?= $this->session->flashdata('type'); ?>',
                        hideAfter: 3000,
                        stack: 1
                    });
                <?php } ?>

            });
        </script>

    </body>
</html>