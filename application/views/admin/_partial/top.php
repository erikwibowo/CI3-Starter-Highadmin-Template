<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url('assets/admin/') ?>assets/images/favicon.ico">

        <!-- App css -->
        <link href="<?= base_url('assets/admin/') ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/admin/') ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/admin/') ?>assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/admin/') ?>assets/css/style.css" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="<?= base_url('assets/admin/') ?>plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/admin/') ?>plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Toastr css -->
        <link href="<?= base_url('assets/admin/') ?>plugins/jquery-toastr/jquery.toast.min.css" rel="stylesheet" />

        <script src="<?= base_url('assets/admin/') ?>assets/js/modernizr.min.js"></script>

        
        <script src="<?= base_url('assets/admin/') ?>assets/js/jquery.min.js"></script>
        <script src="<?= base_url('assets/admin/') ?>assets/js/bootstrap.bundle.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <?php $this->load->view('admin/_partial/sidebar'); ?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                <?php $this->load->view('admin/_partial/topbar'); ?>
                <!-- Top Bar End -->

