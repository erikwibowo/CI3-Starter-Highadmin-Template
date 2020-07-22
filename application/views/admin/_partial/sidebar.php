<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
        <!-- LOGO -->
        <div class="topbar-left">
            <a href="index.html" class="logo">
                <span>
                    <img src="<?= base_url('assets/admin/') ?>assets/images/logo.png" alt="" height="22">
                </span>
                <i>
                <img src="<?= base_url('assets/admin/') ?>assets/images/logo_sm.png" alt="" height="28">
                </i>
            </a>
        </div>
        <!-- User box -->
        <div class="user-box">
            <div class="user-img">
                <img src="<?= base_url('assets/admin/') ?>assets/images/avatar.png" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
            </div>
            <h5><a href="#"><?= admin()->nama_admin ?></a> </h5>
            <p class="text-muted"><?= admin()->level_admin ?></p>
        </div>
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">
                <!--<li class="menu-title">Navigation</li>-->
                <li class="<?= empty($this->uri->segment(2)) ? "active":"" ?>">
                    <a href="<?= site_url('admin') ?>" class="<?= empty($this->uri->segment(2)) ? "active":"" ?>">
                        <i class="fi-air-play"></i><span> DASHBOARD </span>
                    </a>
                </li>
                <li class="<?= @$master ?>">
                    <a href="javascript: void(0);" class="<?= @$master ?>"><i class="fi-server"></i> <span> MASTER DATA </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="<?= $this->uri->segment(2) == 'admin' ? "active":"" ?>"><a href="<?= site_url('admin/admin') ?>">DATA ADMIN</a></li>
                        <li><a href="apps-calendar.html">DATA PELANGGAN</a></li>
                        <li><a href="apps-tickets.html">DATA SUPPLIER</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);"><i class="fi-box"></i><span> BARANG </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="email-inbox.html">KATEGORI BARANG</a></li>
                        <li><a href="email-read.html">DATA BARANG</a></li>
                        <li><a href="email-compose.html">STOK DATA BARANG</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);"><i class="fi-layout"></i><span> TRANSAKSI </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="layouts-menucollapsed.html">TRANSAKSI PEMESANAN</a></li>
                        <li><a href="layouts-small-menu.html">DATA TARANSAKSI PEMESANAN</a></li>
                        <li><a href="layouts-dark-lefbar.html">DATA TRANSAKSI PENJUALAN</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);"><i class="fi-repeat"></i> <span> RETUR BARANG </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="ui-typography.html">RETUR PEMESANAN</a></li>
                        <li><a href="ui-cards.html">RETUR PENJUALAN</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);"><i class="fi-file"></i><span> LAPORAN </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="chart-flot.html">LAPORAN STOK BARANG</a></li>
                        <li><a href="chart-morris.html">LAPORAN DATA BARANG</a></li>
                        <li><a href="chart-google.html">LAPORAN TRANSAKSI PEMESANAN</a></li>
                        <li><a href="chart-google.html">LAPORAN TRANSAKSI PENJUALAN</a></li>
                        <li><a href="chart-chartist.html">LAPORAN PER PERIODE</a></li>
                    </ul>
                </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Sidebar -->
    <div class="clearfix"></div>
</div>
<!-- Sidebar -left -->
</div>