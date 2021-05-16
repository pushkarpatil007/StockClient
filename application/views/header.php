<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="TechyDevs" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>StockView.in</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url() ?>assets/images/favicon.png" />

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,200,300,400,500,600,700,800&amp;display=swap" rel="stylesheet" />

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/flaticon.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/select2.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" />

</head>

<body>
    <!-- start per-loader -->
    <div class="loader-container">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- end per-loader -->

    <!-- ================================
            START HEADER AREA
================================= -->
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="header-top-info">
                            <ul class="info-list">
                                <!--
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <a href="mailto:example@gmail.com">support@stockview.in</a>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <a href="tel:+9876543210">1800 123 123</a>
                                </li>
                                -->
                            </ul>
                        </div>
                        <!-- end header-top-info -->
                    </div>
                    <!-- end col-lg-6 -->
                    <div class="col-lg-6 col-sm-6">
                        <div class="header-top-info header-login-info">
                            <ul class="info-list">
                                <?php if(empty($_SESSION['email'])) { ?>
                                <li>
                                    <a href="<?php echo base_url() ?>auth/register"><i class="fa fa-user"></i> Sign up</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>auth/login"><i class="fa fa-sign-in-alt"></i> Sign In</a>
                                </li>
                                <?php } else { ?>
                                <li>
                                    <a href="<?php echo base_url() ?>members/profile"><i class="fa fa-user"></i> My Account</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>auth/logout"><i class="fa fa-sign-out-alt"></i> Sign Out</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <!-- end header-top-info -->
                    </div>
                    <!-- end col-lg-6 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end header-top -->
        <div class="header-menu-wrapper">
            <div class="container">
                <div class="row header-menu-row">
                    <div class="col-lg-3">
                        <div class="logo">
                            <!--<a href="#"><img src="<?php echo base_url() ?>assets/images/logo.png" alt="logo" /></a>-->
                            <a href="<?php echo base_url() ?>" style="font-size:30px; color:#17375f; ">StockView.in</a>
                        </div>
                        <!-- end logo -->
                    </div>
                    <!-- end col-lg-3-->
                    <div class="col-lg-9 main-menu-wrapper">
                        <div class="main-menu-content">
                            <nav>
                                <ul>
                                    <li><a href="<?php echo base_url() ?>">Home</a></li>
                                    <li><a href="<?php echo base_url() ?>members">Members</a></li>
                                    <li><a href="<?php echo base_url() ?>pricing">Pricing</a></li>
                                    <!--
                                    <li>
                                        <a href="#">blog <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="#">blog grid</a></li>
                                            <li><a href="#">blog detail</a></li>
                                        </ul>
                                    </li>
                                    -->
                                    <li><a href="#">contact</a></li>
                                </ul>
                            </nav>
                            <div class="logo-right-button">
                                <!--
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="search-button"><i class="fa fa-search"></i></a>
                                    </li>
                                </ul>
                                -->
                                <div class="side-menu-open">
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                </div>
                                <!-- end side-menu-open -->
                            </div>
                            <!-- end logo-right-button -->
                            <div class="search-option">
                                <form action="#">
                                    <input class="form-control" type="text" placeholder="Search a stock by NSE Symbol or Company Name..." />
                                    <i class="fa fa-search search-icon"></i>
                                </form>
                            </div>
                            <!-- end search-option -->
                        </div>
                        <!-- end main-menu-content -->
                    </div>
                    <!-- end col-lg-9 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end header-menu-wrapper -->
        <div class="side-nav-container">
            <div class="humburger-menu">
                <div class="humburger-menu-lines side-menu-close"></div>
                <!-- end humburger-menu-lines -->
            </div>
            <!-- end humburger-menu -->
            <div class="side-menu-wrap">
                <ul class="side-menu-ul">
                    <li class="sidenav__item"><a href="<?php echo base_url() ?>">Home</a></li>
                    <li class="sidenav__item"><a href="<?php echo base_url() ?>members">Members</a></li>
                    <li class="sidenav__item"><a href="<?php echo base_url() ?>pricing">Pricing</a></li>
                    <!--
                    <li class="sidenav__item">
                        <a href="blog-grid.html">blog</a>
                        <span class="menu-plus-icon"></span>
                        <ul class="side-sub-menu">
                            <li><a href="blog-grid.html">blog grid</a></li>
                            <li><a href="blog-single.html">blog detail</a></li>
                        </ul>
                    </li>
                    -->
                    <li class="sidenav__item">
                        <a href="<?php echo base_url() ?>contact">contact</a>
                    </li>
                    <?php if(empty($_SESSION['email'])) { ?>
                    <li class="sidenav__item sidenav__item2 text-center">
                        <a href="<?php echo base_url() ?>auth/register"><i class="fa fa-user"></i> sign up</a>
                    </li>
                    <li class="sidenav__item sidenav__item2 text-center">
                        <a href="<?php echo base_url() ?>auth/login"><i class="fa fa-sign-in-alt"></i> sign in</a>
                    </li>
                    <?php } else { ?>
                    <li class="sidenav__item sidenav__item2 text-center">
                        <a href="<?php echo base_url() ?>members/profile"><i class="fa fa-user"></i> Profile</a>
                    </li>
                    <li class="sidenav__item sidenav__item2 text-center">
                        <a href="<?php echo base_url() ?>auth/logout"><i class="fa fa-sign-out-alt"></i> sign out</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- end side-menu-wrap -->
        </div>
        <!-- end side-nav-container -->
    </header>
    <!-- ================================
         END HEADER AREA
================================= -->
