<?php $this->extend('layout/templateAdmin'); ?>

<?= $this->section('main-content'); ?>
<div class="row">
    <div class="col">
        <form action="/admin/banner-website/update" method="POST" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <input type="hidden" name="gambar-lama" value="<?= $data['gambar'] ?>">
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <div class="form-group">
                <label>Gambar Banner <i>(W:1080p H:480p)</i><span class="text-danger">*</span></label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar-gallery" name="gambar" onchange="previewImg()">
                    <div class="invalid-feedback">
                        <?= $validation->getError('gambar') ?>
                    </div>
                    <label class="custom-file-label" id="label-gallery" for="customFile"><?= $data['gambar'] ?></label>
                </div>
            </div>
            <div class="form-group">
                <label for="caption">Caption <span class="text-danger">*</span></label>
                <input type="text" class="form-control <?= ($validation->hasError('caption')) ? 'is-invalid' : ''; ?>" id="caption" placeholder="harap di isi" name="caption" value="<?= $data['keterangan'] ?>" required>
                <div class="invalid-feedback">
                    <?= $validation->getError('caption') ?>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary btn-lg" name="tambah" id="tambah"><i class="fas fa-check mr-2"></i>Update</button>
                <a href="<?= route_to('index-banner'); ?>" class="btn btn-danger btn-lg"><i class="fas fa-times mr-2"></i>Batal</a>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection('main-content'); ?>

<!-- ======================================================================================================== -->

<?= $this->section('page-header'); ?>
<div class="col-sm-6">
    <h1 class="m-0 text-dark">
        <a class="ml-2" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        Dashboard Update Banner
    </h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="<?= route_to('index-banner'); ?>">Banner</a></li>
        <li class="breadcrumb-item active">Update</li>
    </ol>
</div><!-- /.col -->
<?= $this->endSection('page-header'); ?>