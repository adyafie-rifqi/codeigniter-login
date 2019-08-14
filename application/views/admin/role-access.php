<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 text-center"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <?= $this->session->flashdata('message'); ?>

            <p class="p mb-4 text-gray-800">Role : <?php echo $role['role']; ?></p>
            <table class="table table-hover">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No.</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($menu as $m) : ?>
                        <tr class="text-center">
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $m['menu']; ?></td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" name="" id="access" class="form-check-input access-input" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
                                </div>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= base_url('admin/role'); ?>" class="btn btn-light btn-icon-split btn-sm justify-align-right">
                <span class="icon text-gray-600">
                    <i class="fas fa-arrow-left"></i>
                </span>
                <span class="text">Kembali ke halaman sebelumnya</span>
            </a>
        </div>
    </div>
</div>
<!-- /.container-fluid -->


</div>
<!-- End of Main Content -->