<?= $this->extend('layout/templateAdmin') ?>

<?= $this->section('main-content'); ?>
<a href="<?= base_url('/admin/gallery/create'); ?>" class="btn btn-primary mb-4 btn-lg">Tambah Galeri</a>
<?php if (session()->getFlashdata('message')) : ?>
    <div class="alert alert-<?= (session()->getFlashdata('message')) ? 'success' : 'danger'; ?>" role="alert">
        <?= (session()->getFlashdata('message')) ? 'Data berhasil di hapus' : 'Data gagal di hapus'; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('message-update')) : ?>
    <div class="alert alert-<?= (session()->getFlashdata('message-update')) ? 'success' : 'danger'; ?>" role="alert">
        <?= (session()->getFlashdata('message-update')) ? 'Data berhasil di perbarui' : 'Data gagal di perbarui'; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<div class="table-responsive" style="height: 400px; overflow: auto;">
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th class="sticky-top" scope="col"></th>
                <th class="sticky-top" scope="col">Album</th>
                <th class="sticky-top" scope="col">Caption</th>
                <th class="sticky-top text-center" scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gallery as $row => $value) : ?>
                <tr>
                    <th scope="row"><?= $row + 1; ?></th>
                    <td><?= (empty($value['album_title'])) ?  'album telah di hapus' : $value['album_title']; ?></td>
                    <td><?= $value['title']; ?></td>
                    <td style="width: 200px;" class="text-center">
                        <a href="<?= route_to('update-gallery', $value['id_gallery']) ?>" class="btn btn-warning">Edit</a>
                        <form action="<?= base_url('/admin/gallery/delete') ?>" method="post" class="d-inline">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" value="<?= $value['id_gallery']; ?>" name="id">
                            <input type="hidden" value="<?= $value['picture']; ?>" name="gambar">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection('main-content'); ?>

<!-- ======================================================================================================== -->

<?= $this->section('page-header'); ?>
<div class="col-sm-6">
    <h1 class="mm-0 text-dark">
        <a class="ml-2" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        Dashboard Galeri
    </h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Galeri</li>
    </ol>
</div><!-- /.col -->
<?= $this->endSection('page-header'); ?>