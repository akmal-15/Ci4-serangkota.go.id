<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= IMAGE_DIR ?>favicon.png" rel="icon">
    <!-- <link href="/website/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= WEB_PLUGINS; ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= WEB_PLUGINS; ?>icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= WEB_PLUGINS; ?>boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= WEB_PLUGINS; ?>owl.carousel/website/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= WEB_PLUGINS; ?>remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= WEB_PLUGINS; ?>venobox/venobox.css" rel="stylesheet">
    <link href="<?= WEB_PLUGINS; ?>aos/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/579bf5fba7.js" crossorigin="anonymous"></script>

    <!-- Template Main CSS File -->
    <link href="<?= MAIN_PLUGINS ?>css/style.css" rel="stylesheet">
    <link href="<?= MAIN_PLUGINS ?>css/footer.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Presento - v1.0.0
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
    <!-- ======= navbar ======= -->
    <?= $this->include("website/layout/navbar"); ?>

    <!-- ======= Hero Section ======= -->
    <?php if ($hero) : ?>
        <div class="container-fluid d-flex justify-content-center" style="background-image: url(../img/hero-bg.png);">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width: 90%;">
                <div class="carousel-inner d-flex" style="height: 100vh; padding-top: 87px; padding-bottom: 20px;">
                    <div class="carousel-inner">
                        <?php foreach ($banner as $row => $value) : ?>
                            <div class="carousel-item <?= ($row == 0) ? 'active' : ''; ?>" style="height: 100%;">
                                <img src="<?= BANNER_DIR . $value['gambar'] ?>" class="d-block w-100" style="height: 100%;">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class=" container" style="margin-top: 10px;">
            <div class="single-feature relative" style="margin:0px;padding:0px;">
                <marquee behavior="scroll" direction="left" style="background-color:#d9d9d9; border-left:15px solid #00d6d6; border-right:20px solid #00d6d6; border-radius:50px; font-family: 'Century Gothic'; font-size:30px;">
                    <?= $running[0]['isitext']; ?>
                </marquee>
            </div>
        </div>
    <?php endif; ?>
    <!-- End Hero -->

    <!-- MAIN -->
    <main id="main" style="margin-top: 87px;">
        <?= $this->renderSection("album"); ?>
    </main>
    <!-- End #main -->

    <!-- F O O T E R -->
    <footer class="new_footer_area bg_color">
        <div class="new_footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">serangkota.go.id</h3>
                            <p>Jl. Jenderal Sudirman Komplek Kota Serang Baru -KSB-, Kota Serang Banten 42122</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Informasi Publik</h3>
                            <ul class="list-unstyled f_list">
                                <li><a href="#">Kearifan Lokal</a></li>
                                <li><a href="#">Perdagangan</a></li>
                                <li><a href="#">Kesehatan</a></li>
                                <li><a href="#">Kependudukan</a></li>
                                <li><a href="#">Pendidikan</a></li>
                                <li><a href="#">Umkm & Kuliner</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Layanan</h3>
                            <ul class="list-unstyled f_list">
                                <li><a href="#">Regulasi Hukum</a></li>
                                <li><a href="#">Layanan Publik</a></li>
                                <li><a href="#">Layanan Internal</a></li>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Social Media</h3>
                            <div class="f_social_icon">
                                <a href="#" class="fab fa-facebook"></a>
                                <a href="#" class="fab fa-twitter"></a>
                                <a href="#" class="fab fa-instagram"></a>
                                <a href="#" class="fab fa-youtube"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bg">
                <div class="footer_bg_one"></div>
                <div class="footer_bg_two"></div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
            </div>
        </div>
    </footer>
    <!-- END F O O T E R -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= WEB_PLUGINS ?>jquery/jquery.min.js"></script>
    <script src="<?= WEB_PLUGINS ?>bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= WEB_PLUGINS ?>jquery.easing/jquery.easing.min.js"></script>
    <script src="<?= WEB_PLUGINS ?>php-email-form/validate.js"></script>
    <script src="<?= WEB_PLUGINS ?>owl.carousel/owl.carousel.min.js"></script>
    <script src="<?= WEB_PLUGINS ?>waypoints/jquery.waypoints.min.js"></script>
    <script src="<?= WEB_PLUGINS ?>counterup/counterup.min.js"></script>
    <script src="<?= WEB_PLUGINS ?>isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= WEB_PLUGINS ?>venobox/venobox.min.js"></script>
    <script src="<?= WEB_PLUGINS ?>aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= MAIN_PLUGINS ?>js/main.js"></script>

</body>

</html>