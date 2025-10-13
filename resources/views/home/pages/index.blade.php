<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Uncle Davids Cousine">
<meta name="description" content="Order delicious Nigerian meals online — soups, rice, pasta, and platters freshly prepared and delivered to your doorstep.">
<meta name="keywords" content="food delivery, Nigerian meals, order food online, egusi soup, jollof rice, Uncle Dave restaurant, Delta food delivery, Asaba food delivery">
    <meta name="description" content="Uncle Dave">
    <!-- ======== Page title ============ -->
    <title>Uncle Dave - Home</title>
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

    <!---- Menu Style 01 -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu_btn" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header border-bottom">
            <div class="offcanvas-title" id="offcanvasExampleLabel">
                <img style="width: 200px" src="/template/assets/img/logo/logo-black.png" alt="img">
            </div>
            <button type="button" class="w-32px h-32px rounded d-center theme-bg text-white" data-bs-dismiss="offcanvas"
                aria-label="Close">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="offcanvas-body">
            <div class="px-3">
                <ul class="menu-style-offcanvas d-flex flex-column gap-3">
                    <li class="">
                        <a href="{{ route('index') }}"
                            class="border-bottom rounded-1 py-2 pe-3 w-100 d-flex align-items-center justify-content-between">
                            Home
                        </a>

                    </li>
                    <li class="">
                        <a href="{{ route('about') }}"
                            class="border-bottom rounded-1 py-2 pe-3 w-100 d-flex align-items-center justify-content-between">
                            About Us
                        </a>

                    </li>

                    <li class="has-toggle">
                        <a href="javascript:void(0)"
                            class="clickAble border-bottom rounded-1 py-2 pe-3 w-100 d-flex align-items-center justify-content-between">
                            Shop
                            <i class="fas fa-angle-down"></i>
                        </a>
                        <ul class="submenu px-4 pt-2">
                            <li><a href="{{ route('shop') }}">Shop</a></li>
                            <li><a href="{{ route('cart') }}">Cart</a></li>
                            <li><a href="{{ route('checkout') }}">Checkout</a></li>
                            <li><a href="{{ route('order.tracking') }}">Order Tracking</a></li>
                        </ul>
                    </li>

                    <li class="has-toggle">
                        <a href="{{ route('faqs') }}"
                            class="clickAble border-bottom rounded-1 py-2 pe-3 w-100 d-flex align-items-center justify-content-between">
                            Faqs
                        </a>

                    </li>

                </ul>
                <div class="offcanvas__contact mt-4">
                    <h4 class="mb-2">Contact Info</h4>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">No 17 ojife street Nnebisi road Asaba Delta State</a>
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
                        <a href="https://www.facebook.com/share/1FQmhhxnt5/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/uncle_davids_cuisine?igsh=ZXhuYjc5N3ZwdGU0"  target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/2348081253560?text=Hello%20I%20want%20to%20order%20food" target="_blank"><i class="fab fa-whatsapp"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---- Menu Style 01 End -->

    <!-- Header Section Start -->
    <header id="header-sticky" class="header-1 white-variation">
        <div class="container">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="d-flex align-items-center gap-3">
                        <button type="button"
                            class="destop-bars  w-40px h-40px border-white rounded-circle d-center text-white fs-20"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu_btn">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                        <a href="tel:+2347063764926" class="d-sm-flex d-none align-items-center gap-lg-2 gap-1 text-white">
                            <i class="fa-solid fa-phone"></i>
                            <span class="">
                                <span class="fs-10 body-font lh-1 fw-semibold text-white d-block">Hotline Number:</span>
                                <span class="fs-15 body-font fw-semibold text-white d-block">07063764926</span>
                            </span>
                        </a>
                    </div>
                    <div class="header-left">
                        <a href="{{ route('cart') }}"
                            class="d-lg-none d-flex tolly-icon-hover  tolly-icon position-relative w-40px h-40px border-white rounded-circle d-center">
                            <img width="20" src="/template/assets/img/icons/tolly.png" alt="tolly-icon">
                            <span class="count-quan d-center">{{ count(session()->get('cart', [])) }}</span>
                        </a>
                        <div class="logo">
                            <a href="{{ route('index') }}" class="header-logo">
                                <img src="/template/assets/img/logo/logowhite.png" alt="logo-img">
                            </a>
                        </div>
                    </div>
                    <div class="d-lg-flex d-none align-items-center gap-3">
                        <button type="button"
                            class="tolly-icon tolly-icon-hover position-relative w-40px h-40px border-white rounded-circle d-center">
                            <img width="20" src="/template/assets/img/icons/tolly.png" alt="tolly-icon">
                            <span class="count-quan d-center">{{ count(session()->get('cart', [])) }}</span>
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero section start -->
    <section class="hero-section fix hero-style1 bg-cover"
        style="background-image: url(/template/assets/img/home-1/element/hero-bg1.jpg);">
        <div class="container">
            <div class="hero-content1 z-1 pt-100 text-center">
                <p class="fs-20 mb-lg-3 mb-2 text-white heading-font-bhalo wow fadeInUp" data-wow-delay="0.5s">Explore delicious meals, local favorites, and more</p>
                <h2 class="mb-sm-4 mb-3 text-white heading-font-bhalo wow fadeInUp" data-wow-delay="0.7s">Fast Delivery.
                    Zero Hassle.</h2>
                <div class="search-adjust1 bg-white rounded-pill d-flex align-items-center justify-content-between gap-2 max-w-750 mx-auto p-2 mb-md-5 mb-4 wow fadeInUp"
                    data-wow-delay="0.8s">
                    <form action="#" class="gap-2 d-flex align-items-center bg-white rounded-pill ps-4">
                        <i class="fa-solid fa-location-dot"></i>
                        <input class="fs-14 w-100 py-2 px-2 border-0" type="text" placeholder="Enter delivery address">
                    </form>
                    <div class="d-flex align-items-center gap-xl-4 gap-3">
                        <div class="d-flex align-content-center gap-2 text-title fw-medium cursor-pointer">
                            <i class="fa-solid fa-location-crosshairs"></i> <span
                                class="d-sm-block fs-16 d-none fs-16 fw-medium text-title">Locate Me</span>
                        </div>
                        <button type="submit"
                            class="theme-btn py-2 px-3 fw-500 text-capitalize d-center gap-2 rounded-pill">
                            <i class="fa-solid fa-magnifying-glass fs-14"></i> <span
                                class="d-sm-block text-capitalize d-none fs-16 fw-semibold text-white">Search</span>
                        </button>
                    </div>
                </div>
                <div
                    class="hero-menu-wrap flex-wrap max-w-750 mx-auto d-flex justify-content-md-between justify-content-center gap-3 pt-3">
                    <div class="menu-component icon-effect d-flex flex-column gap-2 wow fadeInDown"
                        data-wow-delay="0.5s">
                        <a href="{{ route('shop') }}"
                            class="card-split w-90px h-90px mx-auto rounded-circle d-center bg-white">
                            <img width="60" height="60" src="/template/assets/img/home-1/menu-l1.png" alt="icon"
                                class="rounded-3 icon">
                        </a>
                        <h6 class="text-white pt-1"><a href="{{ route('shop') }}" class="text-white">Soups</a></h6>
                    </div>
                    <div class="menu-component icon-effect d-flex flex-column gap-2 wow fadeInDown"
                        data-wow-delay="0.6s">
                        <a href="{{ route('shop') }}"
                            class="card-split w-90px h-90px mx-auto rounded-circle d-center bg-white">
                            <img width="60" height="60" src="/template/assets/img/home-1/menu-l2.png" alt="icon"
                                class="rounded-3 icon">
                        </a>
                        <h6 class="text-white pt-1"><a href="{{ route('shop') }}" class="text-white">Pasta</a></h6>
                    </div>
                    <div class="menu-component icon-effect d-flex flex-column gap-2 wow fadeInDown"
                        data-wow-delay="0.7s">
                        <a href="{{ route('shop') }}"
                            class="card-split w-90px h-90px mx-auto rounded-circle d-center bg-white">
                            <img width="60" height="60" src="/template/assets/img/home-1/menu-l6.png" alt="icon"
                                class="rounded-3 icon">
                        </a>
                        <h6 class="text-white pt-1"><a href="{{ route('shop') }}" class="text-white">Rice</a>
                        </h6>
                    </div>
                    <div class="menu-component icon-effect d-flex flex-column gap-2 wow fadeInDown"
                        data-wow-delay="0.8s">
                        <a href="{{ route('shop') }}"
                            class="card-split w-90px h-90px mx-auto rounded-circle d-center bg-white">
                            <img width="60" height="60" src="/template/assets/img/home-1/menu-l4.png" alt="icon"
                                class="rounded-3 icon">
                        </a>
                        <h6 class="text-white pt-1"><a href="{{ route('shop') }}" class="text-white">Platters</a></h6>
                    </div>
                    <div class="menu-component icon-effect d-flex flex-column gap-2 wow fadeInDown"
                        data-wow-delay="0.9s">
                    <a href="{{ route('shop') }}"
                            class="card-split w-90px h-90px mx-auto rounded-circle d-center bg-white">
                            <img width="60" height="60" src="/template/assets/img/home-1/menu-l3.png" alt="icon"
                                class="rounded-3 icon">
                        </a>
                        <h6 class="text-white pt-1"><a href="{{ route('shop') }}" class="text-white">Porridges</a></h6>

                    </div>
                    <div class="menu-component icon-effect d-flex flex-column gap-2 wow fadeInDown" data-wow-delay="1s">
                         <a href="{{ route('shop') }}"
                            class="card-split w-90px h-90px mx-auto rounded-circle d-center bg-white">
                            <img width="60" height="60" src="/template/assets/img/home-1/menu-l5.png" alt="icon"
                                class="rounded-3 icon">
                        </a>
                        <h6 class="text-white pt-1"><a href="{{ route('shop') }}" class="text-white">Extras</a></h6>

                    </div>
                </div>
            </div>
        </div>
        <img src="/template/assets/img/home-1/home-shape-start.png" alt="img" class="hero1-shape-start position-absolute">
        <img src="/template/assets/img/home-1/home-shape-end.png" alt="img"
            class="hero1-shape-end position-absolute d-sm-block d-none">
    </section>

    <!-- Offer Section start -->
    <section class="offer-section position-relative pt-80 pb-80 fix">
        <div class="container">
            <div class="row g-4">
                <a href="{{ route('contact') }}" class="col-sm-6 col-lg-4">
                    <div class="offer-card fix h-100 rounded-20 p-4 bg-cover wow fadeInUp"
                        style="background-image: url(/template/assets/img/home-1/offer-bg1.jpg);" data-wow-delay="0.7s">
                        <div class="cont p-2">
                            <p
                                class="theme2-bg fs-15 d-inline-block text-center rounded-pill py-1 px-3 text-black fw-semibold mb-3">
                                10% Off: FEASTA10</p>
                            <h3 class="text-uppercase lh-1 fs-30 heading-font-bhalo fw-bold mb-2">
                                Tango <br>
                                Bruger
                            </h3>
                            <img src="/template/assets/img/home-1/offer-burger.png" alt="img"
                                class="position-absolute bottom-0 end-0 float-bob-y me-3">
                            <img src="/template/assets/img/home-1/text-price11.png" alt="img">
                        </div>
                    </div>
                </a>
                <a href="{{ route('contact') }}" class="col-sm-6 col-lg-4">
                    <div class="offer-card fix text-center h-100 rounded-20 p-4 bg-cover wow fadeInUp"
                        style="background-image: url(/template/assets/img/home-1/offer-bg2.jpg);" data-wow-delay="0.9s">
                        <div class="cont p-2">
                            <p
                                class="theme2-bg fs-15 d-inline-block text-center rounded-pill py-1 px-3 text-black fw-semibold mb-3">
                                15% off: BOGO-Mojo</p>
                            <h3 class="text-uppercase lh-1 fs-30 heading-font-bhalo fw-bold mb-2">
                                Creamy Pasta
                            </h3>
                            <img src="/template/assets/img/home-1/text-price15.png" alt="img">
                        </div>
                    </div>
                </a>
                <a href="{{ route('contact') }}" class="col-sm-12 col-md-6 col-lg-4">
                    <div class="offer-card z-1 fix h-100 position-relative rounded-20 p-4 bg-cover wow fadeInUp"
                        style="background-image: url(/template/assets/img/home-1/offer-bg3.png);" data-wow-delay="1s">
                        <div class="cont p-2">
                            <p
                                class="theme2-bg fs-15 d-inline-block text-center rounded-pill py-1 px-3 text-black fw-semibold mb-3">
                                12%Off: FRIE12</p>
                            <h3 class="text-uppercase lh-1 fs-30 heading-font-bhalo fw-bold mb-2">
                                Cheesy <br>
                                Pizza!
                            </h3>
                            <img src="/template/assets/img/home-1/text-price12.png" alt="img">
                        </div>
                        <img src="/template/assets/img/home-1/offer-pizza.png" alt="img"
                            class="ani-circle position-absolute cir36">
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- <!-- restaurant Section start -->
    <section class="restaurant-section position-relative pb-80 fix">
        <div class="container">
            <div class="d-flex align-items-end justify-content-between gap-3 flex-wrap mb-30 pb-xl-0 pb-2">
                <div class="section-title-style1 wow fadeInRight" data-wow-delay="0.7s">
                    <div class="d-flex flex-column gap-2">
                        <h3 class="white-clr text-black fs-30 lh-1 fw-semibold">
                            Most Visited Restaurants
                        </h3>
                        <span class="w-32px section-badge1"></span>
                    </div>
                </div>
                <a href="{{ route('shop') }}" class="theme-btn btn-outline-blak heading-font">
                    See all Restaurant <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="row g-4">
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="restaurant-card position-relative border card-scale h-100 rounded-12 wow fadeInUp"
                        data-wow-delay="0.3s">
                        <div class="thumb rounded-top-3 d-block position-relative">
                            <img src="/template/assets/img/home-1/restaurant-thumb1.jpg" alt="img" class="w-100">
                            <div
                                class="position-absolute start-0 bottom-0 mb-xxl-3 mb-2 ms-xxl-4 ms-xl-3 ms-2 top-badge bg6 fs-10 rounded-1 py-1 lh-base px-2 text-white heading-font fw-500 d-inline-flex align-items-center gap-1 z-1">
                                <img src="/template/assets/img/icons/top-badge.svg" alt="img"> Top Rated
                            </div>
                        </div>
                        <div
                            class="position-absolute z-1 top-0 mt-xxl-4 mt-3 badge-offer bg-gradient fs-12 py-1 lh-base px-2 text-white heading-font fw-500 d-inline-flex align-items-center gap-1">
                            <img src="/template/assets/img/icons/badge-off.svg" alt="img"> Flat 15% Off
                        </div>
                        <div class="cont py-3 px-xxl-4 px-3">
                            <div class="d-flex gap-2 align-items-center mb-1">
                                <div class="d-flex align-items-center gap-1 fs-14 text-clr">
                                    <div class="theme2-bg rounded-1 d-center fs-10 text-white w-16px h-16px"><i
                                            class="fa-solid fa-star"></i></div><span><span
                                            class="text-black">4.8</span> (32)</span>
                                </div>
                                <span class=""
                                    style="width: 5px; height: 5px; border-radius: 50%; display: block; background-color: #B7B7B7;"></span>
                                <div class="d-flex align-items-center gap-1 fs-14 text-clr">
                                    <i class="fa-regular fa-clock"></i> 20-30 mins
                                </div>
                            </div>
                            <h6 class="mb-2"><a href="restaurant-details.html" class="text-black link-effect"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">Burger
                                    Express</a>
                            </h6>
                            <p class="d-block text-clr fs-15 mb-2 lh-1">Rice, Chicken</p>
                            <div class="d-flex align-items-center gap-2 fs-14 text-clr">
                                <i class="fa-solid fa-location-dot"></i> Asaba, Delta State
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="restaurant-card position-relative border card-scale h-100 rounded-12 wow fadeInUp"
                        data-wow-delay="0.5s">
                        <div class="thumb rounded-top-3 d-block position-relative">
                            <img src="/template/assets/img/home-1/restaurant-thumb2.jpg" alt="img" class="w-100">
                            <div
                                class="position-absolute start-0 bottom-0 mb-xxl-3 mb-2 ms-xxl-4 ms-xl-3 ms-2 top-badge bg6 fs-10 rounded-1 py-1 lh-base px-2 text-white heading-font fw-500 d-inline-flex align-items-center gap-1 z-1">
                                <img src="/template/assets/img/icons/top-badge.svg" alt="img"> Top Rated
                            </div>
                        </div>
                        <div
                            class="position-absolute z-1 top-0 mt-xxl-4 mt-3 badge-offer bg-gradient fs-12 py-1 lh-base px-2 text-white heading-font fw-500 d-inline-flex align-items-center gap-1">
                            <img src="/template/assets/img/icons/badge-off.svg" alt="img"> Flat 15% Off
                        </div>
                        <div class="cont py-3 px-xxl-4 px-3">
                            <div class="d-flex gap-2 align-items-center mb-1">
                                <div class="d-flex align-items-center gap-1 fs-14 text-clr">
                                    <div class="theme2-bg rounded-1 d-center fs-10 text-white w-16px h-16px">
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span>
                                        <span class="text-black">4.8</span>
                                        (32)
                                    </span>
                                </div>
                                <span class=""
                                    style="width: 5px; height: 5px; border-radius: 50%; display: block; background-color: #B7B7B7;"></span>
                                <div class="d-flex align-items-center gap-1 fs-14 text-clr">
                                    <i class="fa-regular fa-clock"></i> 20-30 mins
                                </div>
                            </div>
                            <h6 class="mb-2"><a href="restaurant-details.html" class="text-black link-effect"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">north Wind
                                    Restaurant</a></h6>
                            <p class="d-block text-clr fs-15 mb-2 lh-1">Rice, Chicken</p>
                            <div class="d-flex align-items-center gap-2 fs-14 text-clr">
                                <i class="fa-solid fa-location-dot"></i> Asaba, Delta State
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="restaurant-card position-relative border card-scale h-100 rounded-12 wow fadeInUp"
                        data-wow-delay="0.6s">
                        <div class="thumb rounded-top-3 d-block position-relative">
                            <img src="/template/assets/img/home-1/restaurant-thumb3.jpg" alt="img" class="w-100">
                            <div
                                class="position-absolute start-0 bottom-0 mb-xxl-3 mb-2 ms-xxl-4 ms-xl-3 ms-2 top-badge bg6 fs-10 rounded-1 py-1 lh-base px-2 text-white heading-font fw-500 d-inline-flex align-items-center gap-1 z-1">
                                <img src="/template/assets/img/icons/top-badge.svg" alt="img"> Top Rated
                            </div>
                        </div>
                        <div
                            class="position-absolute z-1 top-0 mt-xxl-4 mt-3 badge-offer bg-gradient fs-12 py-1 lh-base px-2 text-white heading-font fw-500 d-inline-flex align-items-center gap-1">
                            <img src="/template/assets/img/icons/badge-off.svg" alt="img"> Flat 15% Off
                        </div>
                        <div class="cont py-3 px-xxl-4 px-3">
                            <div class="d-flex gap-2 align-items-center mb-1">
                                <div class="d-flex align-items-center gap-1 fs-14 text-clr">
                                    <div class="theme2-bg rounded-1 d-center fs-10 text-white w-16px h-16px">
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span>
                                        <span class="text-black">4.8</span>
                                        (32)
                                    </span>
                                </div>
                                <span class=""
                                    style="width: 5px; height: 5px; border-radius: 50%; display: block; background-color: #B7B7B7;"></span>
                                <div class="d-flex align-items-center gap-1 fs-14 text-clr">
                                    <i class="fa-regular fa-clock"></i> 20-30 mins
                                </div>
                            </div>
                            <h6 class="mb-2"><a href="restaurant-details.html" class="text-black link-effect"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">KFG Cafe
                                    Shop</a>
                            </h6>
                            <p class="d-block text-clr fs-15 mb-2 lh-1">Rice, Chicken</p>
                            <div class="d-flex align-items-center gap-2 fs-14 text-clr">
                                <i class="fa-solid fa-location-dot"></i> Asaba, Delta State
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="restaurant-card position-relative border card-scale h-100 rounded-12 wow fadeInUp"
                        data-wow-delay="0.7s">
                        <div class="thumb rounded-top-3 d-block position-relative">
                            <img src="/template/assets/img/home-1/restaurant-thumb4.jpg" alt="img" class="w-100">
                            <div
                                class="position-absolute start-0 bottom-0 mb-xxl-3 mb-2 ms-xxl-4 ms-xl-3 ms-2 top-badge bg6 fs-10 rounded-1 py-1 lh-base px-2 text-white heading-font fw-500 d-inline-flex align-items-center gap-1 z-1">
                                <img src="/template/assets/img/icons/top-badge.svg" alt="img"> Top Rated
                            </div>
                        </div>
                        <div
                            class="position-absolute z-1 top-0 mt-xxl-4 mt-3 badge-offer bg-gradient fs-12 py-1 lh-base px-2 text-white heading-font fw-500 d-inline-flex align-items-center gap-1">
                            <img src="/template/assets/img/icons/badge-off.svg" alt="img"> Flat 15% Off
                        </div>
                        <div class="cont py-3 px-xxl-4 px-3">
                            <div class="d-flex gap-2 align-items-center mb-1">
                                <div class="d-flex align-items-center gap-1 fs-14 text-clr">
                                    <div class="theme2-bg rounded-1 d-center fs-10 text-white w-16px h-16px">
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span>
                                        <span class="text-black">4.8</span>
                                        (32)
                                    </span>
                                </div>
                                <span class=""
                                    style="width: 5px; height: 5px; border-radius: 50%; display: block; background-color: #B7B7B7;"></span>
                                <div class="d-flex align-items-center gap-1 fs-14 text-clr">
                                    <i class="fa-regular fa-clock"></i> 20-30 mins
                                </div>
                            </div>
                            <h6 class="mb-2"><a href="restaurant-details.html" class="text-black link-effect"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">Food
                                    Station99</a>
                            </h6>
                            <p class="d-block text-clr fs-15 mb-2 lh-1">Rice, Chicken</p>
                            <div class="d-flex align-items-center gap-2 fs-14 text-clr">
                                <i class="fa-solid fa-location-dot"></i> Asaba, Delta State
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- restaurant Section start -->
    {{-- <section class="restaurant-section position-relative pb-80 fix">
        <div class="container">
            <div class="d-flex align-items-end justify-content-between gap-3 flex-wrap mb-30 pb-xl-0 pb-2">
                <div class="section-title-style1">
                    <div class="d-flex flex-column gap-2">
                        <h3 class="wow fadeInRight white-clr text-black fs-30 lh-1 fw-semibold" data-wow-delay=".3s">
                            Super Delicious Deals
                        </h3>
                        <span class="w-32px section-badge1"></span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-1">
                    <button type="button" class="theme-btn p-0 w-40px h-40px d-center btn-outline-blak array-prev">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    <button type="button" class="theme-btn p-0 w-40px h-40px d-center btn-outline-blak array-next">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
            <div class="swiper superDeals-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="restaurant-card position-relative border card-scale h-100 rounded-12 wow fadeInUp"
                            data-wow-delay="0.3s">
                            <div class="thumb rounded-top-3 d-block position-relative">
                                <img src="/template/assets/img/home-1/super-deals1.jpg" alt="img" class="w-100">
                            </div>
                            <div
                                class="position-absolute z-1 top-0 mt-xxl-4 mt-3 badge-offer bg-gradient fs-12 py-1 lh-base px-2 text-white heading-font fw-500 d-inline-flex align-items-center gap-1">
                                <img src="/template/assets/img/icons/badge-off.svg" alt="img"> BOGO
                            </div>
                            <div class="position-absolute z-1 top-0 badge-offer bg-gradient fs-12 py-1 lh-base px-2 text-white heading-font fw-500 d-inline-flex align-items-center gap-1"
                                style="margin-top: 54px;">
                                <img src="/template/assets/img/icons/badge-off.svg" alt="img"> Flat 15% Off
                            </div>
                            <div class="cont py-3 px-xxl-4 px-3">
                                <div class="d-flex gap-2 align-items-center mb-1">
                                    <div class="d-flex align-items-center gap-1 fs-14 text-clr">
                                        <div class="theme2-bg rounded-1 d-center fs-10 text-white w-16px h-16px"><i
                                                class="fa-solid fa-star"></i></div> <span><span
                                                class="text-black">4.8</span> (32)</span>
                                    </div>
                                    <span class=""
                                        style="width: 5px; height: 5px; border-radius: 50%; display: block; background-color: #B7B7B7;"></span>
                                    <div class="d-flex align-items-center gap-1 fs-14 text-clr">
                                        <i class="fa-regular fa-clock"></i> 20-30 mins
                                    </div>
                                </div>
                                <h6 class="mb-2"><a href="restaurant-details.html" class="text-black link-effect"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">Oven
                                        Baked
                                        Pasta</a>
                                </h6>
                                <p class="d-block text-clr fs-15 mb-2 lh-1">Rice, Chicken</p>
                                <div class="d-flex align-items-center gap-2 fs-14 text-clr">
                                    <i class="fa-solid fa-location-dot"></i> Asaba, Delta State
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="restaurant-card position-relative border card-scale h-100 rounded-12 wow fadeInUp"
                            data-wow-delay="0.3s">
                            <div class="thumb rounded-top-3 d-block position-relative">
                                <img src="/template/assets/img/home-1/super-deals2.jpg" alt="img" class="w-100">
                                <div
                                    class="position-absolute start-0 bottom-0 mb-xxl-3 mb-2 ms-xxl-4 ms-xl-3 ms-2 top-badge bg6 fs-10 rounded-1 py-1 lh-base px-2 text-white heading-font fw-500 d-inline-flex align-items-center gap-1 z-1">
                                    <img src="/template/assets/img/icons/top-badge.svg" alt="img"> Top Rated
                                </div>
                            </div>
                            <div
                                class="position-absolute z-1 top-0 mt-xxl-4 mt-3 badge-offer bg-gradient fs-12 py-1 lh-base px-2 text-white heading-font fw-500 d-inline-flex align-items-center gap-1">
                                <img src="/template/assets/img/icons/badge-off.svg" alt="img"> BOGOBuy 1 Get 2
                            </div>
                            <div class="position-absolute z-1 top-0 badge-offer bg-gradient fs-12 py-1 lh-base px-2 text-white heading-font fw-500 d-inline-flex align-items-center gap-1"
                                style="margin-top: 54px;">
                                <img src="/template/assets/img/icons/badge-off.svg" alt="img"> Flat 15% Off
                            </div>
                            <div class="cont py-3 px-xxl-4 px-3">
                                <div class="d-flex gap-2 align-items-center mb-1">
                                    <div class="d-flex align-items-center gap-1 fs-14 text-clr">
                                        <div class="theme2-bg rounded-1 d-center fs-10 text-white w-16px h-16px"><i
                                                class="fa-solid fa-star"></i></div> <span><span
                                                class="text-black">4.8</span>
                                            (32)</span>
                                    </div>
                                    <span class=""
                                        style="width: 5px; height: 5px; border-radius: 50%; display: block; background-color: #B7B7B7;"></span>
                                    <div class="d-flex align-items-center gap-1 fs-14 text-clr">
                                        <i class="fa-regular fa-clock"></i> 20-30 mins
                                    </div>
                                </div>
                                <h6 class="mb-2"><a href="restaurant-details.html" class="text-black link-effect"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Cheshunt Salad</a>
                                </h6>
                                <p class="d-block text-clr fs-15 mb-2 lh-1">Rice, Chicken</p>
                                <div class="d-flex align-items-center gap-2 fs-14 text-clr">
                                    <i class="fa-solid fa-location-dot"></i> Asaba, Delta State
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="restaurant-card position-relative border card-scale h-100 rounded-12 wow fadeInUp"
                            data-wow-delay="0.3s">
                            <div class="thumb rounded-top-3 d-block position-relative">
                                <img src="/template/assets/img/home-1/super-deals3.jpg" alt="img" class="w-100">
                                <div
                                    class="position-absolute start-0 bottom-0 mb-xxl-3 mb-2 ms-xxl-4 ms-xl-3 ms-2 top-badge bg6 fs-10 rounded-1 py-1 lh-base px-2 text-white heading-font fw-500 d-inline-flex align-items-center gap-1 z-1">
                                    <img src="/template/assets/img/icons/top-badge.svg" alt="img"> Top Rated
                                </div>
                            </div>
                            <div
                                class="position-absolute z-1 top-0 mt-xxl-4 mt-3 badge-offer bg-gradient fs-12 py-1 lh-base px-2 text-white heading-font fw-500 d-inline-flex align-items-center gap-1">
                                <img src="/template/assets/img/icons/badge-off.svg" alt="img"> BOGO
                            </div>
                            <div class="position-absolute z-1 top-0 badge-offer bg-gradient fs-12 py-1 lh-base px-2 text-white heading-font fw-500 d-inline-flex align-items-center gap-1"
                                style="margin-top: 54px;">
                                <img src="/template/assets/img/icons/badge-off.svg" alt="img"> Flat 15% Off
                            </div>
                            <div class="cont py-3 px-xxl-4 px-3">
                                <div class="d-flex gap-2 align-items-center mb-1">
                                    <div class="d-flex align-items-center gap-1 fs-14 text-clr">
                                        <div class="theme2-bg rounded-1 d-center fs-10 text-white w-16px h-16px"><i
                                                class="fa-solid fa-star"></i></div> <span><span
                                                class="text-black">4.8</span>
                                            (32)</span>
                                    </div>
                                    <span class=""
                                        style="width: 5px; height: 5px; border-radius: 50%; display: block; background-color: #B7B7B7;"></span>
                                    <div class="d-flex align-items-center gap-1 fs-14 text-clr">
                                        <i class="fa-regular fa-clock"></i> 20-30 mins
                                    </div>
                                </div>
                                <h6 class="mb-2"><a href="restaurant-details.html" class="text-black link-effect"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Smoky Sandwich</a>
                                </h6>
                                <p class="d-block text-clr fs-15 mb-2 lh-1">Rice, Chicken</p>
                                <div class="d-flex align-items-center gap-2 fs-14 text-clr">
                                    <i class="fa-solid fa-location-dot"></i> Asaba, Delta State
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="restaurant-card position-relative border card-scale h-100 rounded-12 wow fadeInUp"
                            data-wow-delay="0.3s">
                            <div class="thumb rounded-top-3 d-block position-relative">
                                <img src="/template/assets/img/home-1/super-deals4.jpg" alt="img" class="w-100">
                                <div
                                    class="position-absolute start-0 bottom-0 mb-xxl-3 mb-2 ms-xxl-4 ms-xl-3 ms-2 top-badge bg6 fs-10 rounded-1 py-1 lh-base px-2 text-white heading-font fw-500 d-inline-flex align-items-center gap-1 z-1">
                                    <img src="/template/assets/img/icons/top-badge.svg" alt="img"> Top Rated
                                </div>
                            </div>
                            <div
                                class="position-absolute z-1 top-0 mt-xxl-4 mt-3 badge-offer bg-gradient fs-12 py-1 lh-base px-2 text-white heading-font fw-500 d-inline-flex align-items-center gap-1">
                                <img src="/template/assets/img/icons/badge-off.svg" alt="img"> Buy 1 Get 2
                            </div>
                            <div class="position-absolute z-1 top-0 badge-offer bg-gradient fs-12 py-1 lh-base px-2 text-white heading-font fw-500 d-inline-flex align-items-center gap-1"
                                style="margin-top: 54px;">
                                <img src="/template/assets/img/icons/badge-off.svg" alt="img"> Flat 10% Off
                            </div>
                            <div class="cont py-3 px-xxl-4 px-3">
                                <div class="d-flex gap-2 align-items-center mb-1">
                                    <div class="d-flex align-items-center gap-1 fs-14 text-clr">
                                        <div class="theme2-bg rounded-1 d-center fs-10 text-white w-16px h-16px"><i
                                                class="fa-solid fa-star"></i></div> <span><span
                                                class="text-black">4.8</span>
                                            (32)</span>
                                    </div>
                                    <span class=""
                                        style="width: 5px; height: 5px; border-radius: 50%; display: block; background-color: #B7B7B7;"></span>
                                    <div class="d-flex align-items-center gap-1 fs-14 text-clr">
                                        <i class="fa-regular fa-clock"></i> 20-30 mins
                                    </div>
                                </div>
                                <h6 class="mb-2"><a href="restaurant-details.html" class="text-black link-effect"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        The BBQ Chicken Burger</a>
                                </h6>
                                <p class="d-block text-clr fs-15 mb-2 lh-1">Rice, Chicken</p>
                                <div class="d-flex align-items-center gap-2 fs-14 text-clr">
                                    <i class="fa-solid fa-location-dot"></i> Asaba, Delta State
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="restaurant-section position-relative pb-80 fix">
    <div class="container">
        <div class="d-flex align-items-end justify-content-between gap-3 flex-wrap mb-30 pb-xl-0 pb-2">
            <div class="section-title-style1">
                <div class="d-flex flex-column gap-2">
                    <h3 class="wow fadeInRight white-clr text-black fs-30 lh-1 fw-semibold" data-wow-delay=".3s">
                        Super Delicious Deals
                    </h3>
                    <span class="w-32px section-badge1"></span>
                </div>
            </div>
            <div class="d-flex align-items-center gap-1">
                <button type="button" class="theme-btn p-0 w-40px h-40px d-center btn-outline-blak array-prev">
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
                <button type="button" class="theme-btn p-0 w-40px h-40px d-center btn-outline-blak array-next">
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>

        <div class="swiper superDeals-slider">
            <div class="swiper-wrapper">

                @forelse($foodItems as $foodItem)
                    <div class="swiper-slide">
                        <div class="restaurant-card position-relative border card-scale h-100 rounded-12 wow fadeInUp" data-wow-delay="0.3s">
                            <!-- Image -->
                            <div class="thumb rounded-top-3 d-block position-relative">
                                <a href="{{ route('shop.details', $foodItem->id) }}">
                                    <img src="{{ $foodItem->image ? asset('storage/' . $foodItem->image) : '/template/assets/img/home-1/super-deals1.jpg' }}"
                                         alt="{{ $foodItem->name }}" class="w-100">
                                </a>

                                @if($foodItem->is_available)
                                    <div class="position-absolute start-0 bottom-0 mb-xxl-3 mb-2 ms-xxl-4 ms-xl-3 ms-2 top-badge bg6 fs-10 rounded-1 py-1 lh-base px-2 text-white heading-font fw-500 d-inline-flex align-items-center gap-1 z-1">
                                        <img src="/template/assets/img/icons/top-badge.svg" alt="img"> Available
                                    </div>
                                @else
                                    <div class="position-absolute start-0 bottom-0 mb-xxl-3 mb-2 ms-xxl-4 ms-xl-3 ms-2 top-badge bg-danger fs-10 rounded-1 py-1 lh-base px-2 text-white heading-font fw-500 d-inline-flex align-items-center gap-1 z-1">
                                        <i class="fa-solid fa-xmark"></i> Out of Stock
                                    </div>
                                @endif
                            </div>

                            <!-- Content -->
                            <div class="cont py-3 px-xxl-4 px-3">
                                <div class="d-flex gap-2 align-items-center mb-1">
                                    <div class="d-flex align-items-center gap-1 fs-14 text-clr">
                                        <div class="theme2-bg rounded-1 d-center fs-10 text-white w-16px h-16px">
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <span><span class="text-black">4.8</span> ({{ rand(10, 100) }})</span>
                                    </div>
                                    <span class="mx-1" style="width: 5px; height: 5px; border-radius: 50%; background-color: #B7B7B7;"></span>
                                    <div class="d-flex align-items-center gap-1 fs-14 text-clr">
                                        <i class="fa-regular fa-clock"></i> 20-30 mins
                                    </div>
                                </div>

                                <h6 class="mb-2">
                                    <a href="{{ route('shop.details', $foodItem->id) }}" class="text-black link-effect">
                                        {{ $foodItem->name }}
                                    </a>
                                </h6>
                                <p class="d-block text-clr fs-15 mb-2 lh-1">{{ $foodItem->category ?? 'Delicious Meal' }}</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="theme3-clr fw-bold">₦{{ number_format($foodItem->price, 2) }}</span>
                                    <button type="button"
                                            class="add-to-cart-btn theme-btn btn-sm btn-outline-theme"
                                            data-food-item-id="{{ $foodItem->id }}">
                                        <i class="fa-solid fa-cart-plus"></i> Add
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-5">
                        <h5>No deals available right now 😔</h5>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
</section>


    <div class="how-order-section z-1 section-bg2 position-relative pb-80 pt-80 fix">
        <div class="container">
            <div class="section-title-style1 mx-auto mb-40 max-w-450 text-center">
                <h3 class="wow fadeInUp mb-sm-3 fw-bold mb-2 white-clr text-black fs-30 lh-1 fw-semibold text-capitalize text-capitalize"
                    data-wow-delay=".3s">
                    How to order?
                </h3>
                <p class="fs-16">
  Choose your meal, add to cart, checkout, and we’ll prepare it right away!
</p>
            </div>
            <div class="row g-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="order-card_box icon-effect bg-white rounded-20 position-relative">
                        <div class="icons smooth rounded-circle w-80px h-80px d-center theme-bg mb-sm-4 mb-3">
                            <img src="/template/assets/img/icons/order-icon1.png" alt="img" class="icon">
                        </div>
                        <h4 class="mb-xl-2 mb-2">
  <a href="{{ route('shop') }}" class="link-effect">Choose your meal</a>
</h4>
<p class="fs-16">
  Discover freshly made dishes crafted with premium ingredients — from rich soups
  to sizzling rice bowls and signature platters that satisfy every craving.
</p>

                        <div
                            class="py-2 px-3 step-badge smooth fs-16 fw-semibold theme-clr rounded-start-pill position-absolute end-0 top-0 mt-lg-5 mt-md-4 mt-3">
                            Step-01
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="order-card_box icon-effect bg-white rounded-20 position-relative">
                        <div class="icons smooth rounded-circle w-80px h-80px d-center theme-bg mb-sm-4 mb-3">
                            <img src="/template/assets/img/icons/order-icon2.png" alt="img" class="icon">
                        </div>
                        <h4 class="mb-xl-2 mb-2">
  <a href="{{ route('shop') }}" class="link-effect">Make your Order</a>
</h4>
<p class="fs-16">
  Browse our menu, add your favorite meals to the cart, and proceed to checkout.
  Enjoy a smooth and secure payment process — your delicious meal is just a few clicks away!
</p>
                        <div
                            class="py-2 px-3 step-badge smooth fs-16 fw-semibold theme-clr rounded-start-pill position-absolute end-0 top-0 mt-lg-5 mt-md-4 mt-3">
                            Step-02
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="order-card_box icon-effect bg-white rounded-20 position-relative">
                        <div class="icons smooth rounded-circle w-80px h-80px d-center theme-bg mb-sm-4 mb-3">
                            <img src="/template/assets/img/icons/order-icon3.png" alt="img" class="icon">
                        </div>
                        <<h4 class="mb-xl-2 mb-2">
  <a href="{{ route('shop') }}" class="link-effect">Food is on the way</a>
</h4>
<p class="fs-16">
  Sit back and relax while we prepare your meal fresh and deliver it right to your doorstep.
  Track your order in real time and get ready to enjoy every bite!
</p>
                        <div
                            class="py-2 px-3 step-badge smooth fs-16 fw-semibold theme-clr rounded-start-pill position-absolute end-0 top-0 mt-lg-5 mt-md-4 mt-3">
                            Step-03
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="/template/assets/img/home-1/order-ele1.png" alt="img" class="position-absolute z-n1 d-sm-block d-none"
            style="bottom: -20px; right: -50px;">
    </div>



    <!-- Big Burger Section start -->
    <section class="big-burger-section position-relative section-padding fix bg-cover"
        style="background-image: url(/template/assets/img/home-1/big-burger-bg.jpg); background-attachment: fixed;">
        <div class="container pt-xl-5">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="big-burger-thumb position-relative">
                        <img src="/template/assets/img/home-1/big-burger.png" alt="img" class="w-100 wow fadeInUp">
                        <!----- price -->
                        <img src="/template/assets/img/home-1/price-bik-burger.png" alt="img"
                            class="position-absolute end-0 top-0 me-30 price">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="big-burger-content">
                        <div class="d-flex gap-1 flex-column mb-xl-3 mb-lg-3 mb-2">
                            <h2 class="text-white heading-font-edensor position-relative">
                                Big Burger
                            </h2>
                            <h2 class="text-white heading-font-edensor">Cheese</h2>
                        </div>
                        <a href="{{ route('contact') }}" class="theme-btn btn-outline-white heading-font">
                            See Details & Offers <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Section start -->
<section class="popular-section position-relative pt-80 pb-80 fix">
    <div class="container">
        <div class="row g-4">
            <!-- Left: Popular Items List -->
            <div class="col-xl-8 col-lg-8">
                <div class="d-flex align-items-end justify-content-between gap-3 flex-wrap mb-30 pb-xl-2 pb-2">
                    <div class="section-title-style1">
                        <div class="d-flex flex-column gap-2">
                            <h3 class="wow fadeInUp white-clr text-black fs-30 lh-1 fw-semibold" data-wow-delay=".3s">
                                Most Popular Items
                            </h3>
                            <span class="w-32px section-badge1"></span>
                        </div>
                    </div>
                    <a href="{{ route('shop') }}" class="theme-btn btn-outline-blak heading-font">
    See all Menu <i class="fa-solid fa-arrow-right"></i>
</a>

                </div>

                <div class="row g-3">
                    @forelse($popularItems as $item)
                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.{{ $loop->iteration + 1 }}s">
                            <div class="most-popular-card card-effect smooth d-flex align-items-xxl-center justify-content-between gap-2 border rounded-12 p-xl-4 p-3">
                                <div class="cont">
                                    <h6 class="mb-lg-1 mb-1">
                                        <a href="{{ route('shop.details', $item->id) }}" class="link-effect">
                                            {{ $item->name }}
                                        </a>
                                    </h6>

                                    <p class="fs-15 mb-lg-2 mb-1 max-w-200 lh-base">
                                        {{ Str::limit($item->description, 50, '...') ?? 'Delicious and satisfying meal.' }}
                                    </p>

                                    <h6 class="theme-clr fs-16 fw-bold">₦{{ number_format($item->price, 2) }}</h6>
                                </div>

                                <div class="thumb rounded-2 position-relative w-90px h-90px">
                                    <img width="90" height="90"
                                        src="{{ $item->image ? asset('storage/'.$item->image) : '/template/assets/img/home-1/popular-items1.jpg' }}"
                                        alt="{{ $item->name }}"
                                        class="rounded-2">

                                    <button type="button"
                                        class="add-to-cart-btn w-28px h-28px z-1 position-absolute bottom-0 end-0 m-2 bg-white rounded d-center theme-clr fs-14"
                                        data-food-item-id="{{ $item->id }}">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-5">
                            <h5>No popular items available right now 😔</h5>
                        </div>
                    @endforelse
                </div>
            </div>

            <!-- Right: Promo Image -->
            <div class="col-xl-4 col-lg-4">
                <div class="popular-thumb-most position-relative rounded-20 overflow-hidden h-100">
                    <img src="/template/assets/img/home-1/popular-price.jpg" alt="img" class="w-100">
                    <div class="price-badge position-absolute top-0 start-0 ms-2 mt-5 pt-5">
                        <img src="/template/assets/img/home-1/price-badge-black.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- App Section start -->
    {{-- <section class="app-section position-relative py-lg-0 py-5 fix bg-cover"
        style="background-image: url(/template/assets/img/apps-bg.jpg);">
        <div class="container position-relative py-lg-5">
            <div class="row g-4 align-items-center justify-content-between py-5">
                <div class="col-lg-5 col-md-6">
                    <h3 class="text-white mb-lg-3 mb-2 fw-semibold wow fadeInUp" data-wow-delay="0.3s">Download the app
                    </h3>
                    <h2 class="text-white mb-30 fw-light wow fadeInUp" data-wow-delay="0.4s">
                        Get <strong class="fw-bold">20% Discount</strong> of
                        your First Order
                    </h2>
                    <div class="d-flex align-items-center gap-xl-3 gap-2 wow fadeInUp" data-wow-delay="0.5s">
                        <img src="/template/assets/img/google.png" alt="img">
                        <img src="/template/assets/img/app-store.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="app-thumb1" style="margin-bottom: -140px;">
                        <img src="/template/assets/img/apps.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <img src="/template/assets/img/fresh-beef.png" alt="img" class="app-buger position-absolute bounce-x">
    </section> --}}

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
                        <img src="/template/assets/img/flower.png" alt="img" class="position-absolute"
                            style="top: -50px; left: -50px;">
                        <div class="swiper testimonial-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div
                                        class="testimonial-items style1 d-flex flex-md-nowrap flex-wrap align-items-center position-relative">
                                        <a href="{{ route('contact') }}" class="testimonial-thumb rounded-20 position-relative">
                                            <img src="/template/assets/img/client-admin1.jpg" alt="img" class="rounded-20">
                                        </a>
                                        <div class="content">
                                            <div class="d-flex gap-1 mb-2">
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                            </div>
                                            <h3 class="text-black mb-2 fw-semibold">Great Product! Highly Recommended!
                                            </h3>
                                            <p class="mb-lg-3 mb-2 fs-16 max-w-480">“ Great Quality Products WitheryGood
                                                awrPackaging unknown
                                                printer took a galle rambled it make pecimive centuries
                                                Delicious Food Context ”</p>
                                            <div class=" gap-3 d-flex align-items-center">
                                                <img width="50" height="50" src="/template/assets/img/admin1.jpg" alt="img"
                                                    class="rounded-circle">
                                                <div class="">
                                                    <h6 class="mb-0 fw-bold black-clr">
                                                        Annette Black
                                                    </h6>
                                                    <span class="fs-14 fw-500 pra-clr d-block">Sr.Designer</span>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="/template/assets/img/quote.png" alt="img" class="quote-icon">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div
                                        class="testimonial-items style1 d-flex flex-md-nowrap flex-wrap align-items-center position-relative">
                                        <a href="{{ route('contact') }}" class="testimonial-thumb rounded-20 position-relative">
                                            <img src="/template/assets/img/client-admin1.jpg" alt="img" class="rounded-20">
                                        </a>
                                        <div class="content">
                                            <div class="d-flex gap-1 mb-2">
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                            </div>
                                            <h3 class="text-black mb-2 fw-semibold">Great Product! Highly Recommended!
                                            </h3>
                                            <p class="mb-lg-3 mb-2 fs-16 max-w-480">“ Great Quality Products WitheryGood
                                                awrPackaging unknown
                                                printer took a galle rambled it make pecimive centuries
                                                Delicious Food Context ”</p>
                                            <div class=" gap-3 d-flex align-items-center">
                                                <img width="50" height="50" src="/template/assets/img/admin1.jpg" alt="img"
                                                    class="rounded-circle">
                                                <div class="">
                                                    <h6 class="mb-0 fw-bold black-clr">
                                                        Annette Black
                                                    </h6>
                                                    <span class="fs-14 fw-500 pra-clr d-block">Sr.Designer</span>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="/template/assets/img/quote.png" alt="img" class="quote-icon">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div
                                        class="testimonial-items style1 d-flex flex-md-nowrap flex-wrap align-items-center position-relative">
                                        <a href="{{ route('contact') }}" class="testimonial-thumb rounded-20 position-relative">
                                            <img src="/template/assets/img/client-admin1.jpg" alt="img" class="rounded-20">
                                        </a>
                                        <div class="content">
                                            <div class="d-flex gap-1 mb-2">
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                            </div>
                                            <h3 class="text-black mb-2 fw-semibold">Great Product! Highly Recommended!
                                            </h3>
                                            <p class="mb-lg-3 mb-2 fs-16 max-w-480">“ Great Quality Products WitheryGood
                                                awrPackaging unknown
                                                printer took a galle rambled it make pecimive centuries
                                                Delicious Food Context ”</p>
                                            <div class=" gap-3 d-flex align-items-center">
                                                <img width="50" height="50" src="/template/assets/img/admin1.jpg" alt="img"
                                                    class="rounded-circle">
                                                <div class="">
                                                    <h6 class="mb-0 fw-bold black-clr">
                                                        Annette Black
                                                    </h6>
                                                    <span class="fs-14 fw-500 pra-clr d-block">Sr.Designer</span>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="/template/assets/img/quote.png" alt="img" class="quote-icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-dot"></div>
                    </div>
                </div>
                <div class="col-lg-3 mt-lg-0 mt-4">
                    <div class="theme-bg text-center p-30 rounded-12 position-relative">
                        <img src="/template/assets/img/satisfied-like.png" alt="icon" class="mb-30 pb-1 wow fadeInDown"
                            data-wow-delay="0.7s">
                        <h5 class="mb-xl-2 text-white mb-1 fw-500 wow fadeInDown" data-wow-delay="0.5s">Satisfied
                            Clients</h5>
                        <h1 class="text-white fw-semibold wow fadeInDown" data-wow-delay="0.3s">98%</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- team partner section start -->
<section class="team-partner-section position-relative z-1 section-bg2 pb-100">
    <div class="container">
        <div class="row g-md-4 g-4">

            <!-- Order a Meal -->
            <div class="col-md-6 col-lg-6">
                <div class="partner-single-item p-lg-4 p-3 bg7 card-effect position-relative rounded-16 overflow-hidden wow fadeInUp"
                    data-wow-delay=".3s">
                    <div
                        class="d-flex flex-sm-nowrap flex-wrap align-items-xl-center align-items-start gap-xxl-4 gap-xl-3 gap-3 py-xxl-2 px-xxl-3">
                        <div class="thumb min-w-110 d-block max-w-150 overflow-hidden rounded-12">
                            <img src="/template/assets/img/home-1/partner-thum1.png" alt="img"
                                class="w-100 overflow-hidden rounded-12">
                        </div>
                        <div class="content max-w-350">
                            <div class="p-xxl-2">
                                <h4 class="mb-1">
                                    <a href="{{ route('shop') }}" class="fw-semibold lh-base">
                                        Order Your Favorite Meal
                                    </a>
                                </h4>
                                <p class="fs-16 mb-xxl-3 mb-2">
                                    Explore our delicious menu, pick your favorite dishes, add them to your cart,
                                    and place your order in just a few clicks.
                                </p>
                                <a href="{{ route('shop') }}" class="theme-btn py-2 heading-font">
                                    Order Now <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Track Your Order -->
            <div class="col-md-6 col-lg-6">
                <div class="partner-single-item p-lg-4 p-3 bg7 card-effect position-relative rounded-16 overflow-hidden wow fadeInUp"
                    data-wow-delay=".5s">
                    <div
                        class="d-flex flex-sm-nowrap flex-wrap align-items-xl-center align-items-start gap-xxl-4 gap-xl-3 gap-3 py-xxl-2 px-xxl-3">
                        <div class="thumb min-w-110 d-block max-w-150 overflow-hidden rounded-12">
                            <img src="/template/assets/img/home-1/partner-thum2.png" alt="img"
                                class="w-100 overflow-hidden rounded-12">
                        </div>
                        <div class="content max-w-350">
                            <div class="p-xxl-2">
                                <h4 class="mb-1">
                                    <a href="{{ route('order.tracking') }}" class="fw-semibold lh-base">
                                        Track Your Food
                                    </a>
                                </h4>
                                <p class="fs-16 mb-xxl-3 mb-2">
                                    Already placed an order? Stay updated and track your food in real time — from our kitchen to your doorstep.
                                </p>
                                <a href="{{ route('order.tracking') }}" class="theme-btn py-2 heading-font">
                                    Track Now <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <img src="/template/assets/img/icons/f-chef2.png" alt="img">
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-4">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6">
                            <div class="thumb w-100 rounded-4">
                                <img src="/template/assets/img/inner/t-details-1.jpg" alt="img" class="w-100 rounded-4">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="quick-view-content">
                                <h3 class="mb-2 fw-semibold">Chess Mashala</h3>
                                <p class="fs-16 text-clr mb-lg-4 mb-3">
                                    Reprehenderit quibusdam dignissimos assumenda, sapiente eos repudiandae quas tempora
                                    voluptate totam corrupti deleniti ipsa iste quo impedit dolorem ullam temporibus
                                    nisi eum.
                                </p>
                                <h5 class="fw-500 mb-1">Size</h5>
                                <div class="d-flex align-items-center gap-2 mb-lg-4 mb-3">
                                    <div class="size_available active w-40px h-40px rounded-circle d-center">
                                        S
                                    </div>
                                    <div class="size_available w-40px h-40px rounded-circle d-center">
                                        S
                                    </div>
                                    <div class="size_available w-40px h-40px rounded-circle d-center">
                                        S
                                    </div>
                                </div>
                                <div class="d-flex gap-lg-2 gap-1 mb-lg-4 mb-3">
                                    <div
                                        class="view-new-cart d-flex flex-column align-items-center align-items-center gap-2 py-lg-3 py-2 px-1">
                                        <a href="javascript:void(0)" class="thumb card-effect w-80px h-80px rounded-2">
                                            <img src="/template/assets/img/inner/shop-grilled1.jpg" alt="img"
                                                class="w-100 rounded-2">
                                        </a>
                                        <div class="content">
                                            <a href="javascript:void(0)"
                                                class="fs-14 mb-1 fw-semibold text-black lh-1 d-block">Grilled
                                                Platter</a>
                                            <div class="fs-16 theme3-clr fw-bold">$19.00</div>
                                        </div>
                                    </div>
                                    <div
                                        class="view-new-cart d-flex flex-column align-items-center align-items-center gap-2 py-lg-3 py-2 px-1">
                                        <a href="javascript:void(0)" class="thumb card-effect w-80px h-80px rounded-2">
                                            <img src="/template/assets/img/inner/shop-grilled1.jpg" alt="img"
                                                class="w-100 rounded-2">
                                        </a>
                                        <div class="content">
                                            <a href="javascript:void(0)"
                                                class="fs-14 mb-1 fw-semibold text-black lh-1 d-block">Eggstasy
                                                Omelet</a>
                                            <div class="fs-16 theme3-clr fw-bold">$14.00</div>
                                        </div>
                                    </div>
                                    <div
                                        class="view-new-cart d-flex flex-column align-items-center align-items-center gap-2 py-lg-3 py-2 px-1">
                                        <a href="javascript:void(0)" class="thumb card-effect w-80px h-80px rounded-2">
                                            <img src="/template/assets/img/inner/shop-grilled1.jpg" alt="img"
                                                class="w-100 rounded-2">
                                        </a>
                                        <div class="content">
                                            <a href="javascript:void(0)"
                                                class="fs-14 mb-1 fw-semibold text-black lh-1 d-block">Scramble
                                                Shine</a>
                                            <div class="fs-16 theme3-clr fw-bold">$36.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 d-flex flex-wrap align-items-center gap-xxl-2 gap-1">
                                    <div class="quantity-wrapper d-inline-flex align-items-center">
                                        <button type="button" class="quantityDecrement">-</button>
                                        <input type="text" value="1" readonly>
                                        <button type="button" class="quantityIncrement">+</button>
                                    </div>
                                    <a href="{{ route('cart') }}" class="theme-btn fs-14 px-3 text-nowrap">
                                        Buy Now
                                    </a>
                                    <h3 class="fw-semibold mt-2 text-end px-3">$541</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer section start -->
    <footer class="footer-section fix black-bg">
        <div class="container">
            <div class="footer-widget-wrapper pt-md-0">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-footer-widget pt-0 pb-0">
                            <div class="widget-head">
                                <a href="{{ route('index') }}">
                                    <img style="width: 200px" src="/template/assets/img/logo/logowhite.png" alt="logo-img">
                                </a>
                            </div>
                            <div class="footer-content">
                                <p class="fs-16 white-clr opacity-75 mb-xl-3 mb-2">
                                    No 17 ojife street Nnebisi road Asaba Delta State
                                </p>
                                <h5 class="text-white mb-lg-3 mb-2"><a href="tel:+2347063764926" class="d-block" style="color: #fff">07063764926</a></h5>
                                <p class="fs-16 white-clr opacity-75"><a href="mailto:uncledavidscuisine@gmail.com" style="color: #fff">uncledavidscuisine@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-sm-center col-xl-2 col-lg-2 col-md-5 col-sm-6 wow fadeInUp"
                        data-wow-delay=".4s">
                        <div class="single-footer-widget pt-0 pb-0">
                            <h5 class="widget-head text-white text-uppercase fs-20 white-clr fw-semibold">
                                Quick Links
                            </h5>
                            <ul class="important-link d-grid gap-sm-2 gap-1">

                                <li>
                                    <a href="{{ route('about') }}" class="text-white opacity-75 fw-light link-effect">Get to know
                                        us</a>
                                </li>
                                <li>
                                    <a href="{{ route('shop') }}"
                                        class="text-white opacity-75 fw-light link-effect">Get a meal</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}" class="text-white opacity-75 fw-light link-effect">Contact
                                        Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex justify-content-lg-center col-xl-3 col-lg-3 col-md-5 col-sm-6 wow fadeInUp"
                        data-wow-delay=".3s">
                        <div class="single-footer-widget pt-0 pb-0">
                            <div class="widget-head text-white text-uppercase fs-20 white-clr fw-semibold">
                                Information
                            </div>
                            <ul class="important-link d-grid gap-sm-2 gap-1">
                                <li>
                                    <a href="{{ route('faqs') }}" class="text-white opacity-75 fw-light link-effect">Help
                                        Center</a>
                                </li>

                                <li>
                                    <a href="{{ route('order.tracking') }}"
                                        class="text-white opacity-75 fw-light link-effect">Track your Order</a>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div
                class="footer-bottom d-flex align-items-center justify-content-sm-between justify-content-center flex-wrap gap-2 fs-16 text-center">
                <p class="fs-16 text4-clr">Copyright &copy; 2025 <a href="{{ route('contact') }}" class="theme-clr">Uncle Dave</a></p>
                <div class="d-flex align-items-center gap-4">
                    <a href="https://www.facebook.com/share/1FQmhhxnt5/" target="_blank">
                        <i class="fa-brands fa-facebook-f fs-18 text-white"></i>
                    </a>
                    <a href="https://www.instagram.com/uncle_davids_cuisine?igsh=ZXhuYjc5N3ZwdGU0" target="_blank">
                        <i class="fa-brands fa-instagram fs-18 text-white"></i>
                    </a>
                    <a href="https://wa.me/2348081253560?text=Hello%20I%20want%20to%20order%20food" target="_blank">
                        <i class="fa-brands fa-whatsapp fs-18 text-white"></i>
                    </a>

                </div>
            </div>
        </div>
    </footer>


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
        url: '{{ route("cart.add") }}',
        method: 'POST',
        data: {
            food_item_id: foodItemId,
            quantity: 1
        },
        success: function(response) {
            if(response.success) {
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
