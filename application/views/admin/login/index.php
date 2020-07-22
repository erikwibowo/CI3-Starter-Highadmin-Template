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
        <!-- Toastr css -->
        <link href="<?= base_url('assets/admin/') ?>plugins/jquery-toastr/jquery.toast.min.css" rel="stylesheet" />

        <script src="<?= base_url('assets/admin/') ?>assets/js/modernizr.min.js"></script>

    </head>


    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: #02c0ce;background-size: cover;background-position: center;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="index.html" class="text-success">
                                    <span><img src="<?= base_url('assets/admin/') ?>assets/images/logo.png" alt="" height="26"></span>
                                </a>
                            </h2>

                            <form class="" action="<?= site_url('auth') ?>" method="POST">

                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="emailaddress">EMAIL</label>
                                        <input class="form-control" type="email" name="email" required placeholder="Ketikkan email...">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required name="password" placeholder="Ketikkan password...">
                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">LOGIN</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="account-copyright">2020 © <?= constant('webname') ?></p>
            </div>

        </div>



        <!-- jQuery  -->
        <script src="<?= base_url('assets/admin/') ?>assets/js/jquery.min.js"></script>
        <script src="<?= base_url('assets/admin/') ?>assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('assets/admin/') ?>assets/js/metisMenu.min.js"></script>
        <script src="<?= base_url('assets/admin/') ?>assets/js/waves.js"></script>
        <script src="<?= base_url('assets/admin/') ?>assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="<?= base_url('assets/admin/') ?>assets/js/jquery.core.js"></script>
        <script src="<?= base_url('assets/admin/') ?>assets/js/jquery.app.js"></script>

         <!-- Toastr js -->
        <script src="<?= base_url('assets/admin/') ?>plugins/jquery-toastr/jquery.toast.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            $(document).ready(function() {

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