<?php $this->load->view('admin/_partial/top'); ?>

<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title">DATA ADMIN</h4>
                    <a  data-toggle="modal" data-target="#modal-tambah" class="btn btn-primary btn-sm mb-3 waves-effect waves-light"><i class="fi-plus"></i> <span> TAMBAH DATA </span></a>
                    <table id="datatable" class="table table-bordered table-hover dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NAMA</th>
                                <th>ALAMAT</th>
                                <th>EMAIL</th>
                                <th>TELEPON</th>
                                <th>LEVEL</th>
                                <th>STATUS</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; foreach ($data as $a): ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= x($a->nama_admin) ?></td>
                                    <td><?= x($a->alamat_admin) ?></td>
                                    <td><?= x($a->email_admin) ?></td>
                                    <td><?= x($a->telp_admin) ?></td>
                                    <td><?= x($a->level_admin) ?></td>
                                    <td>
                                        <?php if ($a->status == 1) { ?>
                                            <button class="btn btn-sm btn-success waves-effect waves-light">AKTIF</button>
                                        <?php }else{ ?>
                                            <button class="btn btn-sm btn-danger waves-effect waves-light">NONAKTIF</button>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button data-id="<?= x($a->id_admin) ?>" class="btn btn-primary btn-rounded btn-sm waves-effect waves-light btn-edit"><i class="fi-eye"></i></button>
                                            <a onclick="return confirm('Apakah anda yakin akan menghapus data? <?= x($a->nama_admin) ?>')" href="<?= site_url('admin/admin/delete/'.x($a->id_admin)) ?>" class="btn btn-danger btn-rounded btn-sm waves-effect waves-light"><i class="fi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- container -->
</div> <!-- content -->
<!-- content -->

<?php $this->load->view('admin/admin/modal'); ?>
<?php $this->load->view('admin/_partial/bottom'); ?>