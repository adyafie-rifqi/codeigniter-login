<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>

</div>
<!-- /.container-fluid -->
<div class="row">
    <div class="col-lg-8 mx-auto">
        <?= $this->session->flashdata('message'); ?>
        <form action="<?= base_url('user/changepassword'); ?>" method="post">
            <div class="form-group">
                <label for="current_password" class="col-form-label">Current Password</label>
                <input type="password" name="current_password" id="current_password" class="form-control">
                <?php echo form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="new_password1" class="col-form-label">New Password</label>
                <input type="password" name="new_password1" id="new_password1" class="form-control">
                <?php echo form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="new_password2" class="col-form-label">Repeat Password</label>
                <input type="password" name="new_password2" id="new_password2" class="form-control">
                <?php echo form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Update Sekarang!</span>
                </button>
            </div>
        </form>
    </div>
</div>

</div>
<!-- End of Main Content -->