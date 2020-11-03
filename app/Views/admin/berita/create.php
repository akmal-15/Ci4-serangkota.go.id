<?php $this->extend('layout/templateAdmin'); ?>

<?= $this->section('main-content'); ?>
<form>
    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                <label for="judul">Judul Berita</label>
                <input type="text" class="form-control" id="judul" placeholder="harap di isi" name="judul">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="height: 500px;"></textarea>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="seo">Judul SEO</label>
                <input type="text" class="form-control" id="seo" placeholder="harap di isi" name="seo">
            </div>
            <label for="exampleFormControlSelect2">Example multiple select</label>
            <div class="overflow-auto" style="height: 100px;">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Default checkbox
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Default checkbox
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Default checkbox
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Default checkbox
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="tag">tag</label>
                <input type="text" class="form-control" id="tag" placeholder="harap di isi" name="tag">
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile" name="gambar">Pilih Gambar...</label>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Deskripsi Gambar</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="height: 100px;"></textarea>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="seo">Tanggal Tayang </label>
                        <input type="date" class="form-control" id="seo" placeholder="harap di isi" name="seo">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="seo">Waktu Tayang</label>
                        <input type="time" class="form-control" id="seo" placeholder="harap di isi" name="seo">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-between">
        <button type="button" class="btn btn-block btn-outline-primary">Create</button>
        <a href="" class="btn btn-danger btn-lg">Batal</a>
    </div>
</form>
<?= $this->endSection('main-content'); ?>

<!-- ======================================================================================================== -->

<?= $this->section('page-header'); ?>
<div class="col-sm-6">
    <h1 class="m-0 text-dark">
        <a class="ml-2" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        Dashboard Tambah Berita
    </h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Berita</a></li>
        <li class="breadcrumb-item active">Tambah</li>
    </ol>
</div><!-- /.col -->
<?= $this->endSection('page-header'); ?>