<?= $this->extend("layout/template"); ?>

<?= $this->section("album"); ?>
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

        <div class="section-title mt-5">
            <h2><?= $title; ?></h2>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="assets/img/album/album1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info align-items-center">
                        <h4>Pembangunan Infrastruktur</h4>
                        <div class="portfolio-links">
                            <a href="<?= base_url("/album1"); ?>" title="Lihat Album"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="assets/img/album/album2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info align-items-center">
                        <h4>Layanan Pemerintah</h4>
                        <div class="portfolio-links">
                            <a href="<?= base_url("/album2"); ?>" title="Lihat Album"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="assets/img/album/album3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info align-items-center">
                        <h4>Pendidikan</h4>
                        <div class="portfolio-links">
                            <a href="<?= base_url("/album3"); ?>" title="Lihat Album"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="assets/img/album/album4.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info align-items-center">
                        <h4>Silaturahim</h4>
                        <div class="portfolio-links">
                            <a href="<?= base_url("/album4"); ?>" title="Lihat Album"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="assets/img/album/album5.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info align-items-center">
                        <h4>Bantuan</h4>
                        <div class="portfolio-links">
                            <a href="<?= base_url("/album5"); ?>" title="Lihat Album"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="assets/img/album/album6.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info align-items-center">
                        <h4>Penghargaan</h4>
                        <div class="portfolio-links">
                            <a href="<?= base_url("/album6"); ?>" title="Lihat Album"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="assets/img/album/album7.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info align-items-center">
                        <h4>Undangan Pertemuan</h4>
                        <div class="portfolio-links">
                            <a href="<?= base_url("/album7"); ?>" title="Lihat Album"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="assets/img/album/album8.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info align-items-center">
                        <h4>Seminar</h4>
                        <div class="portfolio-links">
                            <a href="<?= base_url("/album8"); ?>" title="Lihat Album"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="assets/img/album/album9.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info align-items-center">
                        <h4>Keagamaan</h4>
                        <div class="portfolio-links">
                            <a href="<?= base_url("/album9"); ?>" title="Lihat Album"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="assets/img/album/album10.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info align-items-center">
                        <h4>Lingkungan</h4>
                        <div class="portfolio-links">
                            <a href="<?= base_url("/album10"); ?>" title="Lihat Album"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="assets/img/album/album11.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info align-items-center">
                        <h4>Olahraga</h4>
                        <div class="portfolio-links">
                            <a href="<?= base_url("/album11"); ?>" title="Lihat Album"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection("album"); ?>