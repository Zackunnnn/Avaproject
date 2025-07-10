<?php
if(!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["role"])) {
    if($_SESSION["role"] == 'admin') {
        echo "<script>window.location='dashboardadmin.php';</script>";
    } else if($_SESSION["role"] == 'client') {
        echo "<script>window.location='dashboardclient.php';</script>";
    }  else {
        echo '<script>window.location="index.php";</script>';
    }
}
    require "inc.koneksi.php";
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <title> avastudio.id</title>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="assets/sass/style.css" rel="stylesheet">
</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="assets/images/preloader.png" alt="">
                </div>
            </div>
        </div>
        <!-- end preloader -->

        <!-- start header -->
        <header id="header">
            <div class="wpo-site-header wpo-header-style-4">
                <nav class="navigation navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                                <div class="mobail-menu">
                                    <button type="button" class="navbar-toggler open-btn">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar first-angle"></span>
                                        <span class="icon-bar middle-angle"></span>
                                        <span class="icon-bar last-angle"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-6">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="index.php?p=index-2"><img src="assets/images/logo_white.png"
                                            alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-1 col-1">
                                <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                    <button class="menu-close"><i class="ti-close"></i></button>
                                    <ul class="nav navbar-nav mb-2 mb-lg-0">
                                        <li class="menu-item-has-children">
                                            <a class="active" href="index.php?p=index-2" style="color: white">Home</a>
                                        </li>
                                        <li><a href="index.php?p=about">about us</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="index.php?p=service-3">Services</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="index.php?p=property-2">Property</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="index.php?p=about">About</a></li>
                                                <li><a href="index.php?p=shop">Shop</a></li>
                                                <li><a href="index.php?p=cart">Cart</a></li>
                                                <li><a href="index.php?p=checkout">Checkout</a></li>
                                                <li><a href="index.php?p=404">404 Error</a></li>
                                                <li><a href="index.php?p=faq">FAQ</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="index.php?p=blog-fullwidth">Blog</a>
                                        </li>
                                        <li><a href="index.php?p=contact">Contact</a></li>
                                        <li><a href="index.php?p=login">Login</a></li>
                                        <li><a href="index.php?p=register">Register</a></li>
                                    </ul>
                                </div><!-- end of nav-collapse -->
                            </div>
                        </div>
                    </div><!-- end of container -->
                </nav>
            </div>
        </header>
        <!-- end of header -->

<!-- Container halaman -->
<div class="container">
    <?php
        $pages_dir = 'pages';
        if (!empty($_GET['p'])) {
            $pages = scandir($pages_dir, 0);
            unset($pages[0], $pages[1]);

            $p = $_GET['p'];
            if (in_array($p . '.php', $pages)) {
                include($pages_dir . '/' . $p . '.php');
            } else {
                echo 'Halaman tidak ditemukan! :(';
            }
        } else {
            include($pages_dir . '/index-2.php');
        }
    ?>
</div>

        <!-- start of wpo-site-footer-section -->
        <footer class="wpo-site-footer-s2">
            <div class="row">
                <div class="col-lg-8 order-lg-1 order-2">
                    <div class="wpo-upper-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="widget newsletter-widget">
                                        <div class="widget-title">
                                            <h3>subscribe now</h3>
                                        </div>
                                        <form>
                                            <div class="input-1">
                                                <input type="email" class="form-control" placeholder="Enter your email:"
                                                    required="">
                                            </div>
                                            <div class="submit clearfix">
                                                <button type="submit">Subscribe now</button>
                                            </div>
                                        </form>
                                        <div class="social">
                                            <ul>
                                                <li>
                                                    <a href="https://www.facebook.com/varis.varis.752">
                                                        <i class="ti-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/avadesign.id?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
                                                        <i class="ti-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://wa.me/6285772821484?text=Halo%20saya%20tertarik%20dengan%20Ava%20Design">
                                                        <i class="ti-wa"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="ti-pinterest"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="widget instagram-widget">
                                        <div class="widget-title">
                                            <h3>photo gallery</h3>
                                        </div>
                                        <div class="instagram-wrap">
                                            <div class="instagram-item">
                                                <a href="index.php?p=property-single.php">
                                                    <img src="assets/images/instragram/1.jpg" alt="">
                                                    <i class="ti-instagram"></i>
                                                </a>
                                            </div>
                                            <div class="instagram-item">
                                                <a href="index.php?p=property-single">
                                                    <img src="assets/images/instragram/2.jpg" alt="">
                                                    <i class="ti-instagram"></i>
                                                </a>
                                            </div>
                                            <div class="instagram-item">
                                                <a href="index.php?p=property-single">
                                                    <img src="assets/images/instragram/3.jpg" alt="">
                                                    <i class="ti-instagram"></i>
                                                </a>
                                            </div>
                                            <div class="instagram-item">
                                                <a href="index.php?p=property-single">
                                                    <img src="assets/images/instragram/4.jpg" alt="">
                                                    <i class="ti-instagram"></i>
                                                </a>
                                            </div>
                                            <div class="instagram-item">
                                                <a href="index.php?p=property-single">
                                                    <img src="assets/images/instragram/5.jpg" alt="">
                                                    <i class="ti-instagram"></i>
                                                </a>
                                            </div>
                                            <div class="instagram-item">
                                                <a href="index.php?p=property-single">
                                                    <img src="assets/images/instragram/6.jpg" alt="">
                                                    <i class="ti-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end container -->
                    </div>
                    <div class="wpo-lower-footer">
                        <ul class="copyright">
                            <li>Copyright & copy; 2025 <a href="#">Ava Design</a> || All Rights Reserved</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-2 order-1">
                    <div class="wpo-team-section">
                        <div class="container">
                            <h2>contact with our agent</h2>
                            <div class="wpo-team-wrap-s2 owl-carousel">
                                <div class="wpo-team-item">
                                    <div class="wpo-team-content">
                                        <p>Achmad Varis</p>
                                        <span style="color:rgb(255, 214, 183);">Founder Ava Design</span>
                                        <h3>+62-857-7282-1484</h3>
                                        <small><b>E-mail:</b> varisananda971@gmail.com</small>
                                    </div>
                                </div>
                                <div class="wpo-team-item">
                                    <div class="wpo-team-content">
                                        <p>Nabiel Syarof Azzaky</p>
                                        <span style="color:rgb(255, 214, 183);">Admin Ava Design</span>
                                        <h3>+62-858-8345-7724</h3>
                                        <small><b>E-mail:</b> nabielsrfazky28@gmail.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of wpo-site-footer-section -->


    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins for this template -->
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/payment-cal.js"></script>
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>

</html>
