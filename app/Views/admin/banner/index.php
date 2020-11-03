<?= $this->extend('layout/templateAdmin') ?>

<?= $this->section('main-content'); ?>
<a href="<?= route_to('create-banner'); ?>" class="<?= ($count >= 0 && $count < 4) ? 'btn btn-primary mb-4 btn-lg' : 'btn btn-danger mb-4 btn-lg disabled'; ?>">Tambah Banner</a>
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

<br>
<h3 class="text-danger">* Note : Max Banner 4 Gambar</h3>
<br>
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
            <?php foreach ($banner as $row => $value) : ?>
                <tr>
                    <th scope="row"><?= $row + 1; ?></th>
                    <td><?= $value['keterangan']; ?></td>
                    <td><?= $value['gambar']; ?></td>
                    <td style="width: 200px;" class="text-center">
                        <a href="<?= route_to('update-banner', $value['id']); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?= base_url('/admin/banner-website/delete') ?>" method="post" class="d-inline">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" value="<?= $value['id']; ?>" name="id">
                            <input type="hidden" value="<?= $value['gambar']; ?>" name="gambar">
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
        Dashboard Banner
    </h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Banner</li>
    </ol>
</div><!-- /.col -->
<?= $this->endSection('page-header'); ?>