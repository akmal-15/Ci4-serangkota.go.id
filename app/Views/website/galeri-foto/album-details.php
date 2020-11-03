<?= $this->extend("layout/template"); ?>

<?= $this->section('album') ?>
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

        <div class="section-title mt-5">
            <h2><?= $judul; ?></h2>
            <p> <?= $caption; ?> </p>
            <p><?= $tanggal; ?></p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="assets/img/album/album-details/1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info align-items-center">
                        <div class="portfolio-links">
                            <a href="assets/img/album/album1/1.jpg" data-gall="portfolioGallery" class="venobox" title="Lihat"><i class="fas fa-search"></i></a>
                            <a href="<?= base_url("/album-details"); ?>"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="assets/img/album/album-details/2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info align-items-center">
                        <div class="portfolio-links">
                            <a href="assets/img/album/album1/2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="fas fa-search"></i></a>
                            <a href="<?= base_url("/album-details"); ?>"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="assets/img/album/album-details/3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info align-items-center">
                        <div class="portfolio-links">
                            <a href="assets/img/album/album1/3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="fas fa-search"></i></a>
                            <a href="<?= base_url("/album-details"); ?>"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="assets/img/album/album-details/4.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info align-items-center">
                        <div class="portfolio-links">
                            <a href="assets/img/album/album-details/4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="fas fa-search"></i></a>
                            <a href="<?= base_url("/album-details"); ?>"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="assets/img/album/album-details/5.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info align-items-center">
                        <div class="portfolio-links">
                            <a href="assets/img/album/album-details/5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="fas fa-search"></i></a>
                            <a href="<?= base_url("/album-details"); ?>"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="assets/img/album/portfolio-6.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info align-items-center">
                        <div class="portfolio-links">
                            <a href="assets/img/album/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="fas fa-search"></i></a>
                            <a href="<?= base_url("/album-details"); ?>"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="assets/img/album/portfolio-7.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info align-items-center">
                        <div class="portfolio-links">
                            <a href="assets/img/album/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="fas fa-search"></i></a>
                            <a href="<?= base_url("/album-details"); ?>"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="assets/img/album/portfolio-8.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info align-items-center">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="fas fa-search"></i></a>
                            <a href="<?= base_url("/album-details"); ?>"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="assets/img/album/portfolio-9.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info align-items-center">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="fas fa-search"></i></a>
                            <a href="<?= base_url("/album-details"); ?>"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="assets/img/album/portfolio-9.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info align-items-center">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="fas fa-search"></i></a>
                            <a href="<?= base_url("/album-details"); ?>"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="assets/img/album/portfolio-9.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info align-items-center">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="fas fa-search"></i></a>
                            <a href="<?= base_url("/album-details"); ?>"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?= $this->endSection('album') ?>