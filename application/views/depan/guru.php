<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="<?= base_url() ?>assets/img/favicon.png" type="image/png" />
    <title>Guru</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/flaticon.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/themify-icons.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css" />
</head>

<body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area white-header">
        <div class="main_menu">
            <div class="search_input" id="search_input_box">
                <div class="container">
                    <form class="d-flex justify-content-between" method="" action="">
                        <input type="text" class="form-control" id="search_input" placeholder="Search Here" />
                        <button type="submit" class="btn"></button>
                        <span class="ti-close" id="close_search" title="Close Search"></span>
                    </form>
                </div>
            </div>

            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand" href="<?= base_url() ?>">
                        <img class="logo-2" src="<?= base_url('') ?>assets/img/logo2.png" alt="" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span> <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url(''); ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('about'); ?>">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('pengumuman'); ?>">Pengumuman</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('blog'); ?>">Blog</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo site_url('guru'); ?>">Guru</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('download'); ?>">Dokumen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('galeri'); ?>">Galeri</a>
                            </li>
                            <!-- <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="blog.html">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="single-blog.html">Blog Details</a>
                                    </li>
                                </ul>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('contact'); ?>">Contact</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="#" class="nav-link search" id="search">
                                    <i class="ti-search"></i>
                                </a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================ End Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="banner_content text-center">
                            <h2>Guru</h2>
                            <div class="page_link">
                                <a href="<?= base_url('') ?>">Home</a>
                                <a href="<?= base_url('guru') ?>">Guru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->


    <!-- Start Sample Area -->

    <!-- End Sample Area -->
    <!-- Start Button -->

    <!-- End Button -->
    <!-- Start Align Area -->
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title">
                    <h2 class="mb-3">Our Expert Trainers</h2>
                    <p>
                        Replenish man have thing gathering lights yielding shall you
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center d-flex align-items-center">
            <?php foreach ($data->result() as $row) : ?>
                <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                    <div class="thumb d-flex justify-content-sm-center">
                        <?php if (empty($row->guru_photo)) : ?>
                            <img src="<?php echo base_url() . 'assets/images/blank.png'; ?>" class="img-fluid" alt="#">
                        <?php else : ?>
                            <img src="<?php echo base_url() . 'assets/images/' . $row->guru_photo; ?>" class="img-fluid" alt="#">
                        <?php endif; ?>
                    </div>
                    <div class="meta-text text-sm-center">
                        <h4><?php echo $row->guru_nama; ?></h4>
                        <p class="designation"><?php echo $row->guru_mapel; ?></p>
                        <div class="mb-4">
                            <p>

                            </p>
                        </div>
                        <div class="align-items-center justify-content-center d-flex">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <br>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- End Align Area -->

    <!--================ Start footer Area  =================-->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Menu Utama</h4>
                    <ul>
                        <li><a href="<?= base_url('') ?>">Home</a></li>
                        <li><a href="<?= base_url('about') ?>">Profil</a></li>
                        <li><a href="<?= base_url('contact') ?>">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Akademik</h4>
                    <ul>
                        <li><a href="<?= base_url('pengumuman') ?>">Pengumuman</a></li>
                        <li><a href="<?= base_url('guru') ?>">Guru</a></li>
                        <li><a href="<?= base_url('download') ?>">Dokumen</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Features</h4>
                    <ul>
                        <li><a href="<?= base_url('blog') ?>">Blog</a></li>
                        <li><a href="<?= base_url('galeri') ?>">Galeri</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4></h4>
                    <ul>

                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>SMP Negeri 1 Sungayang</h4>
                    <p>Jalan Sawah Parit Sungayang, Kecamatan Sungayang,</p>
                    <p>Kabupaten Tanah Datar, Provinsi Sumatra Barat</p>
                    <p>(0752) 7577650 </p>
                </div>
            </div>
            <div class="row footer-bottom d-flex justify-content-between">
                <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | SMP Negeri 1 Sungayang <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter"></i></a>
                    <a href="#"><i class="ti-dribbble"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url() ?>assets/js/popper.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>assets/js/owl-carousel-thumb.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?= base_url() ?>assets/js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="<?= base_url() ?>assets/js/gmaps.min.js"></script>
    <script src="<?= base_url() ?>assets/js/theme.js"></script>
</body>

</html>