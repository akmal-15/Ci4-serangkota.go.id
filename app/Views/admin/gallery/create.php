<?php $this->extend('layout/templateAdmin'); ?>

<?= $this->section('main-content'); ?>

<?php if (session()->getFlashdata('save')) : ?>
    <div class="alert alert-<?= (session()->getFlashdata('save')) ? 'success' : 'danger'; ?>" role="alert">
        <?= (session()->getFlashdata('save')) ? 'Data berhasil ditambahkan' : 'Data gagal ditambahkan'; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<?php if (session()->getFlashdata('message')) : ?>
    <div class="alert alert-<?= (session()->getFlashdata('message')) ? 'success' : 'danger'; ?>" role="alert">
        <?= (session()->getFlashdata('message')) ? 'Album berhasil ditambahkan' : 'Album gagal ditambahkan'; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<div class="row">
    <div class="col">
        <form action="/admin/gallery/save" method="POST" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="form-group">
                <div class="form-row">
                    <label for="album" class="col-md-12">Album <span class="text-danger">*</span></label>
                    <div class="col-md-10">
                        <select class="form-control" id="album" name="album">
                            <?php foreach ($album as $row) : ?>
                                <option value="<?= $row['id_album'] ?>"><?= $row['title']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#add-album" aria-expanded="false" aria-controls="collapseExample">
                        + Album
                    </button>
                </div>
            </div>
            <div class="form-group">
                <label for="caption">Caption <span class="text-danger">*</span></label>
                <input type="text" class="form-control <?= ($validation->hasError('caption')) ? 'is-invalid' : ''; ?>" id="caption" placeholder="harap di isi" name="caption" value="<?= old('caption') ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('caption') ?>
                </div>
            </div>
            <div class="form-group">
                <label>Gambar <span class="text-danger">*</span></label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar-gallery" name="gambar" onchange="previewImg()">
                    <div class="invalid-feedback">
                        <?= $validation->getError('gambar') ?>
                    </div>
                    <label class="custom-file-label" id="label-gallery" for="customFile">Pilih Gambar...</label>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-outline-primary btn-lg" name="tambah" id="tambah">CREATE</button>
                <a href="/admin/gallery" class="btn btn-outline-primary btn-lg">Batal</a>
            </div>
        </form>
        <br><br>
        <div class="collapse <?= ($validation->hasError('album')) ? 'show' : ''; ?>" id="add-album">
            <div class="card card-body">
                <form action="<?= route_to('addAlbum') ?>" method="post">
                    <div class="form-group">
                        <label for="caption">Add Album <span class="text-danger">*</span></label>
                        <input type="text" class="form-control <?= ($validation->hasError('album')) ? 'is-invalid' : ''; ?>" id="album" placeholder="harap di isi" name="album" required>
                        <div class="invalid-feedback">
                            <?= $validation->getError('album') ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">ADD</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('main-content'); ?>

<!-- ======================================================================================================== -->

<?= $this->section('page-header'); ?>
<div class="col-sm-6">
    <h1 class="m-0 text-dark">
        <a class="ml-2" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        Dashboard Tambah Galeri
    </h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="/admin/gallery">Galeri</a></li>
        <li class="breadcrumb-item active">Tambah</li>
    </ol>
</div><!-- /.col -->
<?= $this->endSection('page-header'); ?>