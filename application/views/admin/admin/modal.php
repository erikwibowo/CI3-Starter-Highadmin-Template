<!-- sample modal content -->
<div id="modal-tambah" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Tambah Data</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" method="POST" action="<?= site_url('admin/admin/create') ?>">
                    <div class="form-group row">
                        <label class="col-2 col-form-label">NAMA</label>
                        <div class="col-10">
                            <input type="text" name="nama_admin" class="form-control" required placeholder="Ketikkan nama...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">ALAMAT</label>
                        <div class="col-10">
                            <textarea class="form-control" name="alamat_admin" required placeholder="Ketikkan alamat..." rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">EMAIL</label>
                        <div class="col-10">
                            <input type="email" name="email_admin" class="form-control" required placeholder="Ketikkan email...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">TELEPON</label>
                        <div class="col-10">
                            <input type="text" name="telp_admin" class="form-control" required placeholder="Ketikkan telepon...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">LEVEL</label>
                        <div class="col-10">
                            <select class="form-control" name="level_admin" required>
                                <option value="SUPER ADMIN">SUPER ADMIN</option>
                                <option value="ADMIN">ADMIN</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">PASSWORD</label>
                        <div class="col-10">
                            <input type="password" name="password" required class="form-control" placeholder="Ketikkan password...">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">TUTUP</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light">SIMPAN</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- sample modal content -->
<div id="modal-edit" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Tambah Data</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" method="POST" action="<?= site_url('admin/admin/update') ?>">
                    <div class="form-group row">
                        <label class="col-2 col-form-label">NAMA</label>
                        <div class="col-10">
                            <input type="text" name="nama_admin" id="nama_admin" class="form-control" required placeholder="Ketikkan nama...">
                            <input type="hidden" name="id_admin" id="id_admin">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">ALAMAT</label>
                        <div class="col-10">
                            <textarea class="form-control" name="alamat_admin" id="alamat_admin" required placeholder="Ketikkan alamat..." rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">EMAIL</label>
                        <div class="col-10">
                            <input type="email" name="email_admin" id="email_admin" class="form-control" required placeholder="Ketikkan email...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">TELEPON</label>
                        <div class="col-10">
                            <input type="text" name="telp_admin" id="telp_admin" class="form-control" required placeholder="Ketikkan telepon...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">LEVEL</label>
                        <div class="col-10">
                            <select class="form-control" name="level_admin" id="level_admin" required>
                                <option value="SUPER ADMIN">SUPER ADMIN</option>
                                <option value="ADMIN">ADMIN</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">STATUS</label>
                        <div class="col-10">
                            <select class="form-control" name="status" id="status" required>
                                <option value="1">AKTIF</option>
                                <option value="0">NONAKTIF</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">PASSWORD</label>
                        <div class="col-10">
                            <input type="password" name="password" class="form-control" placeholder="Ketikkan password...">
                            <span class="help-block">
                                <small>isi password jika ingin mengubahnya</small>
                            </span>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">TUTUP</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light">SIMPAN</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script type="text/javascript">
    $(document).ready(function(){
        $(".btn-edit").on("click", function(){
            var id = $(this).attr('data-id');
            $.ajax({
                type : "POST",
                url  : "<?= site_url('admin/admin/data') ?>",
                dataType : "JSON",
                data : {id: id},
                success: function(data){
                    $("#id_admin").val(data.id_admin);
                    $("#nama_admin").val(data.nama_admin);
                    $("#alamat_admin").val(data.alamat_admin);
                    $("#email_admin").val(data.email_admin);
                    $("#telp_admin").val(data.telp_admin);
                    $("#level_admin").val(data.level_admin);
                    $("#status").val(data.status);
                    $('#modal-edit').modal({backdrop: 'static', keyboard: false});
                    $('#modal-edit').modal('show');
                }
            });
        });
    });
</script>