<?= $this->extend('layout/templateAdmin') ?>

<?= $this->section('main-content'); ?>
<div class="container p-3 border bg-light" style="background-color: rgb(138, 134, 134);">
    <p><?= $running[0]['isitext']; ?></p>
</div>
<div class="container">
    <br>
    <?php if (session()->getFlashdata('message')) : ?>
        <div class="alert alert-<?= (session()->getFlashdata('message')) ? 'success' : 'danger'; ?>" role="alert">
            <?= (session()->getFlashdata('message')) ? 'Data berhasil di perbarui' : 'Data gagal di perbarui'; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <br>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#updateRunning" aria-expanded="false" aria-controls="collapseExample">
        UPDATE RUNNING TEXT
    </button>
    <div class="collapse" id="updateRunning">
        <div class="card card-body">
            <form action="<?= base_url('/admin/running-text/update'); ?>" method="POST">
                <div class="form-group">
                    <label for="caption">Text <span class="text-danger">*</span></label>
                    <input type="text" class="form-control " id="text" placeholder="harap di isi" name="text" required>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-outline-primary">UPDATE</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection('main-content'); ?>

<!-- ======================================================================================================== -->

<?= $this->section('page-header'); ?>
<div class="col-sm-6">
    <h1 class="m-0 text-dark">
        <a class="ml-2" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        Dashboard Running Text
    </h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Running Text</li>
    </ol>
</div><!-- /.col -->
<?= $this->endSection('page-header'); ?>