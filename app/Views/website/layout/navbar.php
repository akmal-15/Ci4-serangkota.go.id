<header id="header" class="fixed-top">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-10 d-flex align-items-center">
                <!-- image logo Navbar -->
                <a href="<?= route_to('home') ?>" class="logo mr-auto"><img src="<?= IMAGE_DIR ?>logo.png" alt=""></a>

                <!-- Navbar Menu & Dropdown  -->
                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="<?= route_to('home'); ?>" class="fs">Home</a></li>
                        <li class="drop-down"><a href="" class="fs">Profil</a>
                            <ul>
                                <li><a href="#">Visi & Misi</a></li>
                                <li><a href="#">Walikota</a></li>
                                <li><a href="#">Wakil Walikota</a></li>
                                <li><a href="#">Pejabat Daerah</a></li>
                                <li><a href="#">Sejarah</a></li>
                                <li><a href="#">Arti Lambang</a></li>
                                <li><a href="#">Perhargaan</a></li>
                                <li><a href="#">Letak Geografis</a></li>
                            </ul>
                        </li>
                        <li class="drop-down"><a href="" class="fs">Informasi Publik</a>
                            <ul>
                                <li><a href="#">Kearifan Lokal</a></li>
                                <li><a href="#">Perdagangan</a></li>
                                <li><a href="#">Kesehatan</a></li>
                                <li><a href="#">Kependudukan</a></li>
                                <li><a href="#">Pendidikan</a></li>
                                <li><a href="#">UMKM & Kuliner</a></li>
                            </ul>
                        </li>
                        <li class="drop-down"><a href="" class="fs">Layanan</a>
                            <ul>
                                <li><a href="#">Regulasi Hukum</a></li>
                                <li><a href="#">Layanan Publik</a></li>
                                <li><a href="#">Layanan Internal</a></li>
                            </ul>
                        </li>
                        <li class="drop-down"><a href="" class="fs">Pusat Media</a>
                            <ul>
                                <li><a href="#">Berita</a></li>
                                <li><a href="<?= route_to('gallery'); ?>">Galeri Foto</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>

                <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->
            </div>
        </div>

    </div>
</header>