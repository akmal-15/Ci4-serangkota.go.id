<?php $this->extend('layout/templateAdmin'); ?>

<?= $this->section('main-content'); ?>
<a href="<?= route_to('create-berita') ?>" class="btn btn-primary mb-4 btn-lg">Tambah Berita</a>

<div class="table-responsive" style="height: 400px; overflow: auto;">
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th class="sticky-top" scope="col"></th>
                <th class="sticky-top" scope="col">Judul</th>
                <th class="sticky-top" scope="col">Penulis</th>
                <th class="sticky-top" scope="col">Tgl buat</th>
                <th class="sticky-top" scope="col">Gambar</th>
                <th class="sticky-top" scope="col">Di lihat</th>
                <th class="sticky-top" scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">hapus</a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@fat</td>
                <td>@fat</td>
                <td>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">hapus</a>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?= $this->endSection('main-content'); ?>

<!-- ======================================================================================================== -->

<?= $this->section('page-header'); ?>
<div class="col-sm-6">
    <h1 class="m-0 text-dark">
        <a class="ml-2" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        Dashboard Berita
    </h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Berita</li>
    </ol>
</div><!-- /.col -->
<?= $this->endSection('page-header'); ?>