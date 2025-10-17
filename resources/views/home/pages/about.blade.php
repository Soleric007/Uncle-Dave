<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Uncle Davids Cousine">
    <meta name="description"
        content="Order delicious Nigerian meals online — soups, rice, pasta, and platters freshly prepared and delivered to your doorstep.">
    <meta name="keywords"
        content="food delivery, Nigerian meals, order food online, egusi soup, jollof rice, Uncle Dave restaurant, Delta food delivery, Asaba food delivery">

    <meta name="description" content="Uncle Dave">
    <!-- ======== Page title ============ -->
    <title>Uncle David's Cuisine - About Us</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="/template/assets/img/logo/fav-icon.png">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="/template/assets/css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="/template/assets/css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="/template/assets/css/animate.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="/template/assets/css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="/template/assets/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="/template/assets/css/swiper-bundle.min.css">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="/template/assets/css/nice-select.css">
    <!--<< Expose Font.css >>-->
    <link rel="stylesheet" href="/template/assets/css/expose.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="/template/assets/css/main.css">
</head>

<body class="body-bg">

    <!-- Back To Top start -->
    <!-- <button id="back-top" class="back-to-top">
            <i class="fa-regular fa-arrow-up"></i>
        </button> -->

    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                <span data-text-preloader="U" class="letters-loading">
                    U
                </span>
                <span data-text-preloader="N" class="letters-loading">
                    N
                </span>
                <span data-text-preloader="C" class="letters-loading">
                    C
                </span>
                <span data-text-preloader="L" class="letters-loading">
                    L
                </span>
                <span data-text-preloader="E" class="letters-loading">
                    E
                </span>

                <span data-text-preloader="D" class="letters-loading">
                    D
                </span>
                <span data-text-preloader="A" class="letters-loading">
                    A
                </span>
                <span data-text-preloader="V" class="letters-loading">
                    V
                </span>
                <span data-text-preloader="I" class="letters-loading">
                    I
                </span>
                <span data-text-preloader="D" class="letters-loading">
                    D
                </span>
            </div>
            <p class="text-center">CUISINE</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-4 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="{{ route('index') }}">
                                <img style="width: 200px" src="/template/assets/img/logo/logo-black.png" alt="logo-img">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">

                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">No 17 ojife street Nnebisi road Asaba Delta
                                        State</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:uncledavidscuisine@gmail.com"><span
                                            class="mailto:uncledavidscuisine@gmail.com">uncledavidscuisine@gmail.com</span></a>

                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Monday - Saturday</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+2347063764926" class="d-block">07063764926</a>

                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4">
                            <a href="{{ route('contact') }}"
                                class="theme-btn d-inline-flex text-white justify-content-center align-items-center gap-xxl-2 gap-2 fs-16 rounded-1 fw-500 black-clr overflow-hidden">
                                Contact Us
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="https://www.facebook.com/share/1FQmhhxnt5/" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/uncle_davids_cuisine?igsh=ZXhuYjc5N3ZwdGU0"
                                target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://wa.me/2348081253560?text=Hello%20I%20want%20to%20order%20food"
                                target="_blank"><i class="fab fa-whatsapp"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <!-- Header Section Start -->
    <header id="header-sticky" class="header-1 position-relative header-style-inner">
        <div class="container">
            <div class="mega-menu-wrapper white-variation">
                <div class="header-main">
                    <div class="header-left">
                        <div class="logo">
                            <a href="{{ route('index') }}" class="header-logo">
                                <img src="/template/assets/img/logo/logowhite.png" alt="logo-img">
                            </a>
                        </div>
                    </div>
                    <div class="mean__menu-wrapper">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="has-dropdown droop active menu-thumb">
                                        <a href="{{ route('index') }}">
                                            Home

                                        </a>

                                    </li>
                                    <li class="has-dropdown droop active menu-thumb">
                                        <a href="{{ route('about') }}">
                                            About

                                        </a>

                                    </li>

                                    <li>
                                        <a href="javascript:void(0)">
                                            Shop
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('shop') }}">Shop</a></li>

                                            <li><a href="{{ route('cart') }}">Cart</a></li>
                                            <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                            <li><a href="{{ route('order.tracking') }}">Order Tracking</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-dropdown">
                                        <a href="{{ route('faqs') }}">
                                            Faqs

                                        </a>

                                    </li>

                                    <li class="has-dropdown">
                                        <a href="{{ route('contact') }}">
                                           Contact Us

                                        </a>

                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-right d-xl-none d-flex justify-content-end align-items-center gap-sm-3 gap-2">
                        <a href="{{ route('cart') }}">
                            <button type="button"
                                class="tolly-icon d-lg-none rounded-pill w-36px h-36px position-relative">
                                <img src="/template/assets/img/icons/tolly-theme.png" alt="tolly-icon">
                                <span class="count-quan d-center count-quan-black text-white">
                                    {{ count(session()->get('cart', [])) }}
                                </span>
                            </button>
                        </a>

                        <div class="header__hamburger d-lg-none d-block my-auto">
                            <div
                                class="sidebar__toggle black-bg d-flex align-items-center justify-content-center w-40px h-40px rounded-circle sidebar__toggle fs-20 text-white">
                                <i class="fa-solid fa-bars"></i>
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-flex d-none align-items-center gap-xxl-3 gap-3">

                        <a href="{{ route('cart') }}">
                            <button type="button"
                                class="tolly-icon border w-40px h-40px rounded-circle position-relative">
                                <img width="21" src="/template/assets/img/icons/tolly-theme.png"
                                    alt="tolly-icon">
                                <span class="count-quan d-center count-quan-black text-white">
                                    {{ count(session()->get('cart', [])) }}
                                </span>
                            </button>
                        </a>
                        <button type="button"
                            class="destop-bars black-bg w-40px h-40px rounded-circle d-xl-none d-flex align-items-center justify-content-center sidebar__toggle fs-20 text-white">
                            <i class="fa-solid fa-bars"></i>
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- Hero section start -->
    <section class="breadcrumb-section position-relative fix bg-cover"
        style="background-image: url(/template/assets/img/hero/breadcrumb-banner.jpg);">
        <div class="container">
            <div class="breadcrumb-content">
                <h2 class="white-clr fw-semibold text-center heading-font mb-2">
                    About us
                </h2>
                <ul class="breadcrumb align-items-center justify-content-center flex-wrap gap-3">
                    <li>
                        <a href="{{ route('index') }}">
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fa-solid fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="{{ route('index') }}">
                            Pages
                        </a>
                    </li>
                    <li>
                        <i class="fa-solid fa-angle-right"></i>
                    </li>
                    <li>
                        About
                    </li>
                </ul>
            </div>
        </div>
        <img src="/template/assets/img/home-1/home-shape-start.png" alt="img"
            class="bread-shape-start position-absolute">
        <img src="/template/assets/img/home-1/home-shape-end.png" alt="img"
            class="bread-shape-end position-absolute d-sm-block d-none">
    </section>

    <!-- About section start -->
    <section class="about-section position-relative section-padding fix">
        <div class="container">
            <div class="about-wrapper">
                <div class="row g-xxl-5 g-4 align-items-lg-center">
                    <div class="col-lg-4 col-md-4">
                        <div class="thumb img-hover wow fadeInUp" data-wow-delay="0.2s">
                            <img src="/template/assets/img/inner/about-m-thumb-big.png" alt="img"
                                style="border-radius: 100px 20px 20px 20px;" class="w-100">
                        </div>
                    </div>
                 <div class="col-lg-8 col-md-8">
    <div class="d-flex align-items-center gap-3 justify-content-between mb-40">
        <div class="section-title-style1 section-title2 max-w-450">
            <h6 class="heading-font-cormorant text-uppercase fw-bold text-dark mb-lg-3 mb-2">
                Quality Service
            </h6>
            <h2 class="wow fadeInUp heading-font-cormorant mb-sm-3 fw-bolder mb-2 white-clr text-black lh-1 fw-semibold text-capitalize"
                data-wow-delay=".3s">
                About Uncle David’s Cuisine
            </h2>
            <p class="fs-16 body-font wow fadeInUp" data-wow-delay=".5s">
                Welcome to <strong>Uncle David’s Cuisine</strong> — where every meal tells a story of tradition,
                taste, and true Nigerian hospitality. We serve freshly made dishes inspired by local flavors,
                prepared with love and the finest ingredients. From our sizzling soups to our perfectly seasoned meats,
                every bite brings you closer to home.
            </p>
        </div>
        <img src="/template/assets/img/home-2/about1-dine.png" alt="icon" class="d-lg-block d-none">
    </div>

    <div class="row align-items-center g-lg-4 g-3">
        <div class="col-lg-6">
            <h4 class="fw-bolder text-dark mb-1 heading-font-cormorant">Opening Hours</h4>
            <p class="fs-16 mb-xl-3 mb-2 body-font wow fadeInUp" data-wow-delay=".5s">
                We’re always ready to serve you hot, delicious, and freshly prepared meals — perfect for lunch, dinner,
                or that late-night craving.
            </p>
            <h6 class="text-dark body-font fs-16 mb-30">
                Monday – Saturday
            </h6>
            <a href="{{ route('about') }}" class="theme-btn rounded-1 theme-opacity-10 text-uppercase fs-13">
                <span class="theme-clr">Contact Us</span>
            </a>
        </div>

        <div class="col-sm-6">
            <div class="thumb img-hover max-w-350 ms-auto" style="border-radius: 20px 20px 100px 20px;">
                <img src="/template/assets/img/inner/about-m-thumb-small.jpg" alt="img" class="w-100">
            </div>
        </div>
    </div>
</div>

                </div>
            </div>
        </div>
    </section>

    <!-- How to Order section start -->
    <div class="how-order-section z-1 section-bg2 position-relative section-padding fix">
        <div class="container">
            <div
                class="d-flex flex-md-nowrap flex-wrap align-items-center gap-xl-2 gap-3 justify-content-between order-customize-wrapper">
                <div class="max-w-300">
                    <div class="order-card_box style2 icon-effect rounded-20 position-relative">
                        <div class="icons smooth rounded-4 w-72px h-72px d-center mb-sm-4 mb-3">
                            <img src="/template/assets/img/icons/f-chef1.png" alt="img" class="icon">
                        </div>
                        <h3 class="mb-xl-2 mb-2 heading-font-cormorant">
                            <a href="javascript:void(0)"
                                class="link-effect heading-font-cormorant fw-bolder">Professional Chef</a>
                        </h3>
                        <p class="fs-16">
                            Our expert chefs bring years of experience and authentic Nigerian cooking skills to every
                            dish —
                            ensuring rich flavours, perfect seasoning, and that true homemade taste in every bite.
                        </p>
                    </div>
                </div>
                <div class="line"></div>
                <div class="max-w-300">
                    <div class="order-card_box style2 icon-effect rounded-20 position-relative">
                        <div class="icons smooth rounded-4 w-72px h-72px d-center mb-sm-4 mb-3">
                            <img src="/template/assets/img/icons/f-chef2.png" alt="img" class="icon">
                        </div>
                        <h3 class="mb-xl-2 mb-2 heading-font-cormorant">
                            <a href="javascript:void(0)"
                                class="link-effect heading-font-cormorant fw-bolder">Delicious Meals</a>
                        </h3>
                        <p class="fs-16">
                            From rich okra soup to tender beef and spicy jollof rice, every meal is freshly prepared
                            with
                            premium ingredients to give you that satisfying, finger-licking experience.
                        </p>
                    </div>
                </div>
                <div class="line"></div>
                <div class="max-w-300">
                    <div class="order-card_box style2 icon-effect rounded-20 position-relative">
                        <div class="icons smooth rounded-4 w-72px h-72px d-center mb-sm-4 mb-3">
                            <img src="/template/assets/img/icons/f-chef3.png" alt="img" class="icon">
                        </div>
                        <h3 class="mb-xl-2 mb-2 heading-font-cormorant">
                            <a href="javascript:void(0)"
                                class="link-effect heading-font-cormorant fw-bolder">Thousands of Happy Customers</a>
                        </h3>
                        <p class="fs-16">
                            Loved by families, foodies, and working professionals across Nigeria — our meals have become
                            the go-to choice for anyone craving quality food that tastes just like home.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--- Chef Section -->
    {{-- <section class="chef-section section-padding bg-cover fix"
        style="background-image: url(/template/assets/img/home-2/chefs-bg.jpg);">
        <div class="container">
            <div class="section-title-style1 section-title2 mx-auto mb-40 text-center">
                <h6 class="heading-font text-uppercase fw-normal letter-spacing-1 text-white mb-lg-3 mb-2">Experts Where
                    Need</h6>
                <h2 class="wow fadeInUp heading-font mb-sm-3 fw-bolder mb-2 text-white lh-1 fw-semibold text-capitalize text-capitalize"
                    data-wow-delay=".3s">
                    Meet Our Skilled Chefs
                </h2>
                <p class="fs-16 text5-clr body-font wow fadeInUp" data-wow-delay=".5s">where tradition meets tastWe
                    bring authentic flavors area test ingredients</p>
            </div>
            <div class="row g-xl-4 g-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="chef-single-item card-effect position-relative rounded-16 overflow-hidden wow fadeInUp"
                        data-wow-delay=".2s">
                        <div class="thumb d-block w-100 overflow-hidden">
                            <img src="/template/assets/img/home-2/chef_01.jpg" alt="img" class="w-100 overflow-hidden">
                        </div>
                        <div class="content position-absolute bottom-0 z-1 bg-white rounded-2 px-lg-3 px-3 pb-lg-3 pb-3 mb-3 text-center pt-0"
                            style="width: 90%; left: 50%; transform: translateX(-50%);">
                            <div class="d-inline-flex align-items-center justify-content-center gap-2 theme-bg rounded-2 py-1 px-3 position-relative"
                                style="top: -15px;">
                                <a href="javascript:void(0)">
                                    <i class="fa-brands fa-facebook-f fs-18 text-white"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fa-brands fa-twitter fs-18 text-white"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fa-brands fa-instagram fs-18 text-white"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fa-brands fa-linkedin fs-18 text-white"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fa-brands fa-whatsapp fs-18 text-white"></i>
                                </a>
                            </div>
                            <div>
                                <h5 class="heading-font-cormorant mb-lg-1">
                                    <a href="team-details.html"
                                        class="fw-semibold lh-1 fw-bolder heading-font-cormorant">
                                        Jenny Wilson
                                    </a>
                                </h5>
                                <span class="body-font fs-14 d-block">Chef Director</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="chef-single-item card-effect position-relative rounded-16 overflow-hidden wow fadeInUp"
                        data-wow-delay=".4s">
                        <div class="thumb d-block w-100 overflow-hidden">
                            <img src="/template/assets/img/home-2/chef_02.jpg" alt="img" class="w-100 overflow-hidden">
                        </div>
                        <div class="content position-absolute bottom-0 z-1 bg-white rounded-2 px-lg-3 px-3 pb-lg-3 pb-3 mb-3 text-center pt-0"
                            style="width: 90%; left: 50%; transform: translateX(-50%);">
                            <div class="d-inline-flex align-items-center justify-content-center gap-2 theme-bg rounded-2 py-1 px-3 position-relative"
                                style="top: -15px;">
                                <a href="javascript:void(0)">
                                    <i class="fa-brands fa-facebook-f fs-18 text-white"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fa-brands fa-twitter fs-18 text-white"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fa-brands fa-instagram fs-18 text-white"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fa-brands fa-linkedin fs-18 text-white"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fa-brands fa-whatsapp fs-18 text-white"></i>
                                </a>
                            </div>
                            <div>
                                <h5 class="heading-font-cormorant mb-lg-1">
                                    <a href="team-details.html"
                                        class="fw-semibold lh-1 fw-bolder heading-font-cormorant">
                                        De Enjoy
                                    </a>
                                </h5>
                                <span class="body-font fs-14 d-block">Chef Director</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="chef-single-item card-effect position-relative rounded-16 overflow-hidden wow fadeInUp"
                        data-wow-delay=".6s">
                        <div class="thumb d-block w-100 overflow-hidden">
                            <img src="/template/assets/img/home-2/chef_03.jpg" alt="img" class="w-100 overflow-hidden">
                        </div>
                        <div class="content position-absolute bottom-0 z-1 bg-white rounded-2 px-lg-3 px-3 pb-lg-3 pb-3 mb-3 text-center pt-0"
                            style="width: 90%; left: 50%; transform: translateX(-50%);">
                            <div class="d-inline-flex align-items-center justify-content-center gap-2 theme-bg rounded-2 py-1 px-3 position-relative"
                                style="top: -15px;">
                                <a href="javascript:void(0)">
                                    <i class="fa-brands fa-facebook-f fs-18 text-white"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fa-brands fa-twitter fs-18 text-white"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fa-brands fa-instagram fs-18 text-white"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fa-brands fa-linkedin fs-18 text-white"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fa-brands fa-whatsapp fs-18 text-white"></i>
                                </a>
                            </div>
                            <div>
                                <h5 class="heading-font-cormorant mb-lg-1">
                                    <a href="team-details.html"
                                        class="fw-semibold lh-1 fw-bolder heading-font-cormorant">
                                        Devid Lue
                                    </a>
                                </h5>
                                <span class="body-font fs-14 d-block">Chef Director</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="chef-single-item card-effect position-relative rounded-16 overflow-hidden wow fadeInUp"
                        data-wow-delay=".8s">
                        <div class="thumb d-block w-100 overflow-hidden">
                            <img src="/template/assets/img/home-2/chef_04.jpg" alt="img" class="w-100 overflow-hidden">
                        </div>
                        <div class="content position-absolute bottom-0 z-1 bg-white rounded-2 px-lg-3 px-3 pb-lg-3 pb-3 mb-3 text-center pt-0"
                            style="width: 90%; left: 50%; transform: translateX(-50%);">
                            <div class="d-inline-flex align-items-center justify-content-center gap-2 theme-bg rounded-2 py-1 px-3 position-relative"
                                style="top: -15px;">
                                <a href="javascript:void(0)">
                                    <i class="fa-brands fa-facebook-f fs-18 text-white"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fa-brands fa-twitter fs-18 text-white"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fa-brands fa-instagram fs-18 text-white"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fa-brands fa-linkedin fs-18 text-white"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fa-brands fa-whatsapp fs-18 text-white"></i>
                                </a>
                            </div>
                            <div>
                                <h5 class="heading-font-cormorant mb-lg-1">
                                    <a href="team-details.html"
                                        class="fw-semibold lh-1 fw-bolder heading-font-cormorant">
                                        Kon Joy
                                    </a>
                                </h5>
                                <span class="body-font fs-14 d-block">Chef Director</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Text Slide start -->
    <section class="text-slider-section theme-bg py-3">
        <div class="sponsor-text-slide swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide w-fit">
                    <div class="text-slide-item rounded-3">
                        <img src="/template/assets/img/home-2/text1.png" alt="img">
                    </div>
                </div>
                <div class="swiper-slide w-fit">
                    <div class="text-slide-item rounded-3">
                        <img src="/template/assets/img/home-2/text-slide-flower.png" alt="img">
                    </div>
                </div>
                <div class="swiper-slide w-fit">
                    <div class="text-slide-item rounded-3">
                        <img src="/template/assets/img/home-2/text2.png" alt="img">
                    </div>
                </div>
                <div class="swiper-slide w-fit">
                    <div class="text-slide-item rounded-3">
                        <img src="/template/assets/img/home-2/text-slide-flower.png" alt="img">
                    </div>
                </div>
                <div class="swiper-slide w-fit">
                    <div class="text-slide-item rounded-3">
                        <img src="/template/assets/img/home-2/text3.png" alt="img">
                    </div>
                </div>
                <div class="swiper-slide w-fit">
                    <div class="text-slide-item rounded-3">
                        <img src="/template/assets/img/home-2/text-slide-flower.png" alt="img">
                    </div>
                </div>
                <div class="swiper-slide w-fit">
                    <div class="text-slide-item rounded-3">
                        <img src="/template/assets/img/home-2/text4.png" alt="img">
                    </div>
                </div>
                <div class="swiper-slide w-fit">
                    <div class="text-slide-item rounded-3">
                        <img src="/template/assets/img/home-2/text-slide-flower.png" alt="img">
                    </div>
                </div>
                <div class="swiper-slide w-fit">
                    <div class="text-slide-item rounded-3">
                        <img src="/template/assets/img/home-2/text5.png" alt="img">
                    </div>
                </div>
                <div class="swiper-slide w-fit">
                    <div class="text-slide-item rounded-3">
                        <img src="/template/assets/img/home-2/text-slide-flower.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Book Table3 section start -->
    <div class="book-table-section3 z-1 position-relative section-padding fix bg-cover"
        style="background-image: url(/template/assets/img/inner/book-point-bg.png);">
        <div class="container">
            <div class="book-table-init mx-auto">
                <div class="section-title-style4 mx-auto mb-40 pb-xl-2 text-center">
                    <h5
                        class="heading-font-afasad text-uppercase fw-normal mb-xl-4 mb-sm-3 mb-3 pb-xxl-2 text-white letter-spacing-4">
                        your table</h5>
                    <h2 class="wow fadeInUp heading-font-edensor fw-medium text-white fs-30 lh-1 text-uppercase"
                        data-wow-delay=".3s">
                        book a table
                    </h2>
                </div>
                <div class="book-table-wrap3 book-table-inner mx-auto">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-1 mb-xxl-4 mb-3">
                        <h4 class="text-white heading-font-edensor">Book a table</h4>
                        <h4 class="theme-clr heading-font-edensor">Book a table</h4>
                    </div>
                    <div class="row g-xl-4 g-3 justify-content-center">
                        <div class="col-sm-12">
                            <input type="text" placeholder="Your Name">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" placeholder="Your Email">
                        </div>
                        <div class="col-sm-6">
                            <select name="book">
                                <option value="1">
                                    1 Person
                                </option>
                                <option value="2">
                                    2 Person
                                </option>
                                <option value="3">
                                    3 Person
                                </option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <select name="book">
                                <option value="1">
                                    mm/dd/yyyy
                                </option>
                                <option value="2">
                                    mm/dd/yyyy
                                </option>
                                <option value="3">
                                    mm/dd/yyyy
                                </option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <select name="book">
                                <option value="1">
                                    04:50 pm
                                </option>
                                <option value="2">
                                    04:50 pm
                                </option>
                                <option value="3">
                                    04:50 pm
                                </option>
                            </select>
                        </div>
                        <div class="col-sm-12">
                            <textarea name="message" placeholder="Special Requests"></textarea>
                        </div>
                        <div class="col-sm-12 mt-4 pt-2 text-center">
                            <a href="{{ route('cart') }}"
                                class="theme-btn btn-outline--seconday text-white py-2 text-uppercase fs-18 heading-font-afasad">
                                BOOK A TABLE
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="client-section z-1 position-relative pb-100 pt-80 fix">
        <div class="container">
            <div class="section-title-style1 mx-auto mb-40 max-w-450 text-center">
                <h3 class="wow fadeInUp text-black fs-30 lh-1 fw-semibold" data-wow-delay=".3s">
                    What’s Client Think About
                    Our Services
                </h3>
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-lg-9">
                    <div class="testimonial-wrapper1">
                        <img src="/template/assets/img/flow-theme3.png" alt="img" class="position-absolute"
                            style="top: -50px; left: -50px;">
                        <div class="swiper testimonial-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div
                                        class="testimonial-items style1 d-flex flex-md-nowrap flex-wrap align-items-center position-relative">
                                        <a href="{{ route('contact') }}"
                                            class="testimonial-thumb rounded-20 position-relative">
                                            <img src="/template/assets/img/client-admin1.jpg" alt="img"
                                                class="rounded-20">
                                        </a>
                                        <div class="content">
                                            <div class="d-flex gap-1 mb-2">
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                            </div>
                                            <h3 class="text-black mb-2 fw-semibold">Absolutely Worth Every Kobo!</h3>
                                            <p class="mb-lg-3 mb-2 fs-16 max-w-480">
                                                “ I honestly didn’t expect the food to taste this good. The portion was
                                                generous,
                                                the packaging neat, and the soup was so rich! Even my mum asked for
                                                their contact.
                                                You people sabi this cooking thing abeg! ”
                                            </p>
                                            <div class="gap-3 d-flex align-items-center">
                                                <img width="50" height="50"
                                                    src="/template/assets/img/admin1.jpg" alt="img"
                                                    class="rounded-circle">
                                                <div>
                                                    <h6 class="mb-0 fw-bold black-clr">Chiamaka Okafor</h6>
                                                    <span class="fs-14 fw-500 pra-clr d-block">Customer, Asaba</span>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="/template/assets/img/quote.png" alt="img" class="quote-icon">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div
                                        class="testimonial-items style1 d-flex flex-md-nowrap flex-wrap align-items-center position-relative">
                                        <a href="{{ route('contact') }}"
                                            class="testimonial-thumb rounded-20 position-relative">
                                            <img src="/template/assets/img/client-admin1.jpg" alt="img"
                                                class="rounded-20">
                                        </a>
                                        <div class="content">
                                            <div class="d-flex gap-1 mb-2">
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                            </div>
                                            <h3 class="text-black mb-2 fw-semibold">Excellent Service and Taste!</h3>
                                            <p class="mb-lg-3 mb-2 fs-16 max-w-480">
                                                “ From ordering to delivery, everything was smooth. The seafood okra was
                                                heavenly — fresh prawns, soft fish, and that native flavour that hits
                                                just right.
                                                I’m now a regular customer, no cap. ”
                                            </p>
                                            <div class="gap-3 d-flex align-items-center">
                                                <img width="50" height="50"
                                                    src="/template/assets/img/admin1.jpg" alt="img"
                                                    class="rounded-circle">
                                                <div>
                                                    <h6 class="mb-0 fw-bold black-clr">Emeka Nwosu</h6>
                                                    <span class="fs-14 fw-500 pra-clr d-block">Customer, Asaba</span>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="/template/assets/img/quote.png" alt="img" class="quote-icon">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div
                                        class="testimonial-items style1 d-flex flex-md-nowrap flex-wrap align-items-center position-relative">
                                        <a href="{{ route('contact') }}"
                                            class="testimonial-thumb rounded-20 position-relative">
                                            <img src="/template/assets/img/client-admin1.jpg" alt="img"
                                                class="rounded-20">
                                        </a>
                                        <div class="content">
                                            <div class="d-flex gap-1 mb-2">
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                            </div>
                                            <h3 class="text-black mb-2 fw-semibold">Na This Kind Food We Need!</h3>
                                            <p class="mb-lg-3 mb-2 fs-16 max-w-480">
                                                “ The turkey was soft, well-spiced and the soup tasted like home. You
                                                can tell
                                                they use fresh ingredients. I even had to hide my plate so my younger
                                                brother
                                                won’t finish it. Ten over ten! ”
                                            </p>
                                            <div class="gap-3 d-flex align-items-center">
                                                <img width="50" height="50"
                                                    src="/template/assets/img/admin1.jpg" alt="img"
                                                    class="rounded-circle">
                                                <div>
                                                    <h6 class="mb-0 fw-bold black-clr">Tunde Adewale</h6>
                                                    <span class="fs-14 fw-500 pra-clr d-block">Customer, Asaba</span>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="/template/assets/img/quote.png" alt="img" class="quote-icon">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-dot dot-theme3"></div>
                    </div>
                </div>
                <div class="col-lg-3 mt-lg-0 mt-4">
                    <div class="theme3-bg text-center p-30 rounded-12 position-relative">
                        <img src="/template/assets/img/satisfied-like.png" alt="icon" class="mb-30 pb-1">
                        <h5 class="mb-xl-2 text-white mb-1 fw-500">Satisfied Clients</h5>
                        <h1 class="text-white fw-semibold">98%</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer section start -->
    <footer class="footer-section position-relative fix black-bg z-1">
        <img src="/template/assets/img/inner/footer-shape-filter.png" alt="img"
            class="position-absolute start-0 top-0 mt-5 pt-5 float-bob-y z-n1 d-lg-block d-none opacity-25">
        <img src="/template/assets/img/home-4/footer4-right.png" alt="img"
            class="position-absolute end-0 top-0 pt-100 mt-40 mx-5 float-bob-y z-n1 opacity-25">
        <div class="container">
            <div class="footer-widget-wrapper pb-80">
                <div class="d-flex align-items-center justify-content-between gap-3 pb-100">
                    <img src="/template/assets/img/home-4/f-lin-dot.png" alt="img"
                        class="w-100 d-xl-block d-none">
                    <a href="{{ route('index') }}">
                        <img style="width: 300px" src="/template/assets/img/logo/logowhite.png" alt="img">
                    </a>
                    <img src="/template/assets/img/home-4/f-lin-dot.png" alt="img"
                        class="w-100 d-xl-block d-none">
                </div>
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="single-footer-widget py-0">
                            <h5 class="widget-head text-white text-uppercase fs-20 white-clr fw-semibold">
                                Help
                            </h5>
                            <ul class="important-link d-grid gap-sm-2 gap-1">
                                <li>
                                    <a href="{{ route('faqs') }}"
                                        class="text-white opacity-75 fw-light link-effect">FAQs</a>
                                </li>
                                <li>
                                    <a href="{{ route('order.tracking') }}"
                                        class="text-white opacity-75 fw-light link-effect">Delivery</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}"
                                        class="text-white opacity-75 fw-light link-effect">Contact</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="single-footer-widget py-0">
                            <h5 class="widget-head text-white text-uppercase fs-20 white-clr fw-semibold">
                                about US
                            </h5>
                            <ul class="important-link d-grid gap-sm-2 gap-1">
                                <li>
                                    <a href="{{ route('about') }}"
                                        class="text-white opacity-75 fw-light link-effect">Our
                                        Story</a>
                                </li>
                                <li>
                                    <a href="{{ route('order.tracking') }}"
                                        class="text-white opacity-75 fw-light link-effect">Delivery</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}"
                                        class="text-white opacity-75 fw-light link-effect">Contact</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="single-footer-widget py-0">
                            <h5 class="widget-head text-white text-uppercase fs-20 white-clr fw-semibold">
                                address
                            </h5>
                            <div class="footer-content">
                                <p class="fs-16 white-clr opacity-75 mb-xl-3 mb-2">
                                    No 17 ojife street Nnebisi road Asaba Delta State
                                </p>
                                <h5 class="text-white mb-lg-3 mb-2"><a href="tel:+2347063764926" class="d-block"
                                        style="color: #fff">07063764926</a></h5>
                                <p class="fs-16 white-clr opacity-75"><a href="mailto:uncledavidscuisine@gmail.com"
                                        style="color: #fff">uncledavidscuisine@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="single-footer-widget py-0">
                            <h5 class="widget-head text-white text-uppercase fs-20 white-clr fw-semibold">
                                CONNECT
                            </h5>
                            <p class="fs-16 white-clr opacity-75 mb-xl-3 mb-2">
                                Absolutely loved the cozy vibe and Rich aroma! The coffee was perfectly brewed
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div
                    class="d-flex align-items-center justify-content-sm-between justify-content-center flex-wrap gap-2 fs-16 text-center">
                    <p class="fs-16 text4-clr">Copyright &copy; 2025 <a href="{{ route('index') }}"
                            class="theme-clr">Uncle Dave</a>
                        all Right
                        Reserved</p>
                    <div class="d-flex align-items-center gap-4">
                        <a href="https://www.facebook.com/share/1FQmhhxnt5/" target="_blank">
                            <i class="fa-brands fa-facebook-f fs-18 text-white"></i>
                        </a>
                        <a href="https://www.instagram.com/uncle_davids_cuisine?igsh=ZXhuYjc5N3ZwdGU0"
                            target="_blank">
                            <i class="fa-brands fa-instagram fs-18 text-white"></i>
                        </a>
                        <a href="https://wa.me/2348081253560?text=Hello%20I%20want%20to%20order%20food"
                            target="_blank">
                            <i class="fa-brands fa-whatsapp fs-18 text-white"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close open" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--<< All JS Plugins >>-->
    <script src="/template/assets/js/jquery-3.7.1.min.js"></script>
    <!--<< Viewport Js >>-->
    <script src="/template/assets/js/viewport.jquery.js"></script>
    <!--<< Bootstrap Js >>-->
    <script src="/template/assets/js/bootstrap.bundle.min.js"></script>
    <!--<< Nice Select Js >>-->
    <script src="/template/assets/js/jquery.nice-select.min.js"></script>
    <!--<< Waypoints Js >>-->
    <script src="/template/assets/js/jquery.waypoints.js"></script>
    <!--<< Counterup Js >>-->
    <script src="/template/assets/js/jquery.counterup.min.js"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="/template/assets/js/swiper-bundle.min.js"></script>
    <!--<< MeanMenu Js >>-->
    <script src="/template/assets/js/jquery.meanmenu.min.js"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="/template/assets/js/jquery.magnific-popup.min.js"></script>
    <!--<< Wow Animation Js >>-->
    <script src="/template/assets/js/wow.min.js"></script>
    <!--<< Main.js >>-->
    <script src="/template/assets/js/main.js"></script>



    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Add to cart functionality
        $(document).on('click', '.add-to-cart-btn', function(e) {
            e.preventDefault();

            let foodItemId = $(this).data('food-item-id');
            let btn = $(this);
            let originalText = btn.text().trim();

            btn.prop('disabled', true).text('Adding...');

            $.ajax({
                url: '{{ route('cart.add') }}',
                method: 'POST',
                data: {
                    food_item_id: foodItemId,
                    quantity: 1
                },
                success: function(response) {
                    if (response.success) {
                        // Update cart count in header
                        $('.count-quan').text(response.cartCount);

                        // Change button appearance
                        btn.text('Added!').removeClass('btn-outline-theme').addClass('theme-btn');

                        // Show success message
                        alert(response.message);

                        // Reset button after 2 seconds
                        setTimeout(function() {
                            btn.text(originalText)
                                .addClass('btn-outline-theme')
                                .removeClass('theme-btn')
                                .prop('disabled', false);
                        }, 2000);
                    }
                },
                error: function(xhr) {
                    alert('Error adding item to cart');
                    btn.prop('disabled', false).text(originalText);
                }
            });
        });
    </script>

</body>

</html>
