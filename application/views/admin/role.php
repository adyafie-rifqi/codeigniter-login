<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 text-center"><?php echo $judul; ?></h1>

    <div class="row">
        <div class="col-lg-8 mx-auto">
            <?php echo form_error('role', '<div class="alert alert-danger" role="alert"><small>', '</small></div>'); ?>
            <?= $this->session->flashdata('message'); ?>
            <a href="" class="btn btn-light btn-icon-split btn-sm mb-3 tombolTambahRole" data-toggle="modal" data-target="#formModal3">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Role</span>
            </a>
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($role as $r) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $r['role']; ?></td>
                            <td>
                                <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="badge badge-info">access</a>
                                <a href="<?= base_url('admin/ubahrole/'); ?><?= $r['id']; ?>" class="badge badge-success tampilModalUbahRole" data-toggle="modal" data-target="#formModal3" data-id="<?= $r['id']; ?>">ubah</a>
                                <a href="<?= base_url('admin/hapusrole/'); ?><?= $r['id']; ?>" class="badge badge-danger tombol-hapus">hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


</div>
<!-- End of Main Content -->


<!-- modal menu -->

<div class="modal fade" id="formModal3" tabindex="-1" role="dialog" aria-labelledby="formModalLabel3" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel3">Tambah Role baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/role'); ?>" method="post" id="formid">
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="Role Baru" autocomplete="off">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-info">Tambahkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>