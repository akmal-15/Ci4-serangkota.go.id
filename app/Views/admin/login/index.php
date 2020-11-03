<?php $this->extend('layout/templateLogin'); ?>

<?= $this->section('content'); ?>

<!-- M E S S A G E -->
<?php if (session()->getFlashdata('message')) : ?>
    <div class='alert alert-danger'>
        Username atau password SALAH!
        <a class='close' data-dismiss='alert' href='#' aria-hidden='true'>&times;</a>
    </div>
<?php endif; ?>

<!-- C O N T E N T -->
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">serangkota.go.id</p>
        <form action="/admin/login" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control <?= ($validation->hasError('user')) ? 'is-invalid' : ''; ?>" placeholder="Username" name="user" id="user" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                <div class="invalid-feedback">
                    <?= $validation->getError('user') ?>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control <?= ($validation->hasError('pass')) ? 'is-invalid' : ''; ?>" placeholder="Password" name="pass" id="pass" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                <div class="invalid-feedback">
                    <?= $validation->getError('pass') ?>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <p class="mb-1">
            <a href="#">Lupa Password</a>
        </p>
    </div>
    <!-- /.login-card-body -->
</div>

<?= $this->endSection('content'); ?>