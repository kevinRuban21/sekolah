<?= $this->extend('layout/login_template'); ?>
<?= $this->section('content'); ?>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><?=lang('Auth.loginTitle')?></h1>
                                    </div>
                                    <?= view('Myth\Auth\Views\_message_block') ?>
                                    <form action="<?= url_to('login') ?>" method="post">
						            <?= csrf_field() ?>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"name="login"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="<?=lang('Auth.email')?>">
                                                <div class="invalid-feedback">
								                    <?= session('errors.login') ?>
							                    </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" id="exampleInputPassword" placeholder="<?=lang('Auth.password')?>">
                                            <div class="invalid-feedback">
								                <?= session('errors.password') ?>
							                </div>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-user btn-block"><?=lang('Auth.loginAction')?></button>
                                    <hr>
                                    <div class="text-center">
                                    <p><a href="<?= url_to('register') ?>"><?=lang('Auth.needAnAccount')?></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

<?= $this->endSection(); ?>

