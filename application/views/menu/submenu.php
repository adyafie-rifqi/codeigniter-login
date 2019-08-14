<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-5">
            <a href="" class="btn btn-light btn-icon-split btn-sm mb-3 tambahSubMenu" data-toggle="modal" data-target="#formModal2">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Sub Menu Management</span>
            </a>
        </div>
        <div class="col-lg-">
            <hs class="h5 mb-4 text-gray-800 text-center">
                <?= $judul; ?>
            </hs>
        </div>
    </div>

    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert"><small><?= validation_errors() ?></small></div>
            <?php endif; ?>
            <?= $this->session->flashdata('message'); ?>
            <table class="table table-striped table-bordered text-center" id="myTable" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Menu</th>
                        <th>Url</th>
                        <th>Icon</th>
                        <th>Active</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($subMenu as $sm) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $sm['title']; ?></td>
                            <td><?= $sm['menu']; ?></td>
                            <td><?= $sm['url']; ?></td>
                            <td><?= $sm['icon']; ?></td>
                            <td><?= $sm['is_active']; ?></td>
                            <td>
                                <a href="<?= base_url('menu/ubahsubmenu/'); ?><?= $sm['id']; ?>" class="badge badge-success tampilModalUbahSubMenu" data-toggle="modal" data-target="#formModal2" data-id="<?= $sm['id']; ?>">ubah</a>
                                <a href="<?= base_url('menu/hapussubmenu/'); ?><?= $sm['id']; ?>" class="badge badge-danger">hapus</a>
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

<div class="modal fade" id="formModal2" tabindex="-1" role="dialog" aria-labelledby="formModalLabel2" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel2">Tambah sub menu baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Judul submenu" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="">Pilih Menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Url submenu" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Icon submenu" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" name="is_active" id="is_active" class="form-check-input" value="1" checked>
                            <label for="is_active" class="form-check-label">Active</label>
                        </div>
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