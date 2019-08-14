<div class="container mt-5">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-7 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5 bg-login-image">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <!-- <img src="<?= base_url('assets/img/undraw_noted_pc9f.png'); ?>" alt=""> -->
                        <div class="col-lg">
                            <div class="p-5">
                                <div>
                                    <h1 class="h4 text-gray-800 mb-4">Hi, Welcome back!</h1>
                                </div>
                                <?php echo $this->session->flashdata('message'); ?>
                                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address...">
                                        <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                        <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                    <hr>
                                    <a href="index.html" class="btn btn-light btn-outline-grey btn-user btn-block">
                                        <i class="fas fa-key fa-fw"></i> Forgot Password?
                                    </a>
                                    <a href="<?= base_url('auth/registration'); ?>" class="btn btn-light btn-outline-grey btn-user btn-block">
                                        <i class="fas fa-user-edit fa-fw"></i> Register Now!
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