<?= $this->extend("/website/layout/template"); ?>

<?= $this->section('album') ?>
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">
        <div class="section-title mt-5">
            <h2><?= $album[0]['album_title']; ?></h2>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <?php foreach ($album as $row) : ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="<?= GALLERY_DIR . $row['picture']; ?>" class="img-fluid" alt="" style="object-fit: cover; height: 280px; width:100%;">
                        <div class="portfolio-info align-items-center">
                            <h4><?= $row['title']; ?></h4>
                            <div class="portfolio-links">
                                <a href="<?= GALLERY_DIR . $row['picture']; ?>" data-gall="portfolioGallery" class="venobox" title="Lihat"><i class="fas fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?= $this->endSection('album') ?>