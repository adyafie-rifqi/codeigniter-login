<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <?= $judul; ?>
    </h1>

    <div class="row">
        <div class="col-lg-10 mx-auto">
            <?php echo form_open_multipart('user/edit'); ?>
            <?= $this->session->flashdata('message'); ?>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email
                </label>
                <div class="col-sm-10">
                    <input type="text" name="email" id="email" class="form-control" value="<?= $user['email']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Nomor Induk Pegawai
                </label>
                <div class="col-sm-10">
                    <input type="text" name="nip" id="nip" class="form-control" value="<?= $user['nip']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Full Name
                </label>
                <div class="col-sm-10">
                    <input type="text" name="name" id="name" class="form-control" value="<?= $user['name']; ?>" autocomplete="off">
                    <small class="form-text text-danger"><?= form_error('name'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Picture</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail ">
                        </div>
                        <div class="col-sm-9">
                            <!-- <div class="custom-file mb-4">
                                <input type="text" name="name" id="name" class="form-control" value="<?= $user['name']; ?>">
                                <small class="form-text text-danger"><?= form_error('name'); ?></small>
                            </div>
                            <div class="custom-file mb-4">
                                <input type="text" name="name" id="name" class="form-control" value="<?= $user['name']; ?>">
                                <small class="form-text text-danger"><?= form_error('name'); ?></small>
                            </div> -->
                            <div class="custom-file">
                                <input type="file" name="image" id="image" class="custom-file-input">
                                <label for="image" class="custom-file-label">Pilih file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-info btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                            <i class="fas fa-upload"></i>
                        </span>
                        <span class="text">Update Sekarang!</span>
                    </button>
                </div>
            </div>
            </form>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->