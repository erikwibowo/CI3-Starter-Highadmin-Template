<div class="topbar">
    <nav class="navbar-custom">
        <ul class="list-unstyled topbar-right-menu float-right mb-0">
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <img src="<?= base_url('assets/admin/') ?>assets/images/avatar.png" alt="<?= admin()->nama_admin ?>" class="rounded-circle"> <span class="ml-1"><?= admin()->nama_admin ?> <i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                    <!-- item-->
                    <a href="<?= site_url('logout') ?>" class="dropdown-item notify-item">
                        <i class="fi-power"></i> <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>
        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left disable-btn">
                <i class="dripicons-menu"></i>
                </button>
            </li>
            <li>
                <div class="page-title-box">
                    <h4 class="page-title"><?= constant('webname') ?> </h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Selamat datang <?= admin()->nama_admin ?></li>
                    </ol>
                </div>
            </li>
        </ul>
    </nav>
</div>