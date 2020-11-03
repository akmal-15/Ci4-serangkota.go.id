<?= $this->extend("/website/layout/template"); ?>

<?= $this->section("album"); ?>
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">
        <div class="section-title mt-5">
            <h2><?= $judul; ?></h2>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <?php foreach ($album as $row) : ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="<?= GALLERY_DIR . $row['picture'] ?>" class="d-block" alt="" style="object-fit: cover; height: 280px; width:100%;">
                        <div class="portfolio-info align-items-center">
                            <h4><?= $row['album_title'] ?></h4>
                            <div class="portfolio-links">
                                <a href="<?= base_url("/album/" . $row['seo']); ?>" title="Lihat Album"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?= $this->endSection("album"); ?>