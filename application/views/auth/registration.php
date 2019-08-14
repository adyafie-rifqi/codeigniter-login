<div class="container">
    <div class="row justify-content-center">

        <div class="col-xl-7 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5 bg-login-image">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div>
                                    <h1 class="h4 text-gray mb-4">Create an Account!</h1>
                                </div>
                                <form class="user" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="name" name="name" value="<?php echo set_value('name'); ?>" placeholder="Full Name" autocomplete="off">
                                        <?php echo form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="nip" name="nip" value="<?php echo set_value('nip'); ?>" placeholder="Nomor Induk" autocomplete="off">
                                        <?php echo form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email Address" autocomplete="off">
                                        <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                            <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                            <?php echo form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Register Account
                                    </button>
                                    <hr>
                                    <a href="index.html" class="btn btn-light btn-outline-gray btn-user btn-sm btn-block">
                                        <i class="fas fa-key fa-fw"></i> Forgot Password?
                                    </a>
                                    <a href="<?= base_url('auth'); ?>" class="btn btn-light btn-outline-gray btn-sm btn-user btn-block">
                                        <i class="fas fa-sign-in-alt fa-fw"></i> Already have an account? Login!
                                    </a>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>