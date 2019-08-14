<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-gray-800 text-center mt-5"><?php echo $judul; ?></h1>

</div>
<!-- /.container-fluid -->

<div class="col-lg">
    <div class="row">
        <div class="col-xl-11 col-md-6 mb-0 mx-auto mt-5">
            <?= $this->session->flashdata('message'); ?>
            <div class="card border-left-info border-bottom-info shadow h-400 py-4">
                <div class="card-body">
                    <div class="row no-gutters align-item-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bold text-info text-uppercase mb-1"><?= $user['name']; ?></div>
                            <br>
                            <div class="text-md text-gray-800"><?= $user['email']; ?></div>
                            <div class="text-md text-gray-800"><?= $user['nip']; ?></div>
                            <div class="p mb-0 text-gray-800">
                                <small class="text-muted">Member sejak <?= date('d F Y', $user['date_created']); ?></small>
                            </div>
                        </div>
                        <div class="col-auto">
                            <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" width="150px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
<!-- End of Main Content -->