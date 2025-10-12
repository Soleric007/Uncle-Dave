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
    <title>Uncle Dave - Description</title>
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
                                        <a href="{{ route('shop') }}">
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

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-right d-xl-none d-flex justify-content-end align-items-center gap-sm-3 gap-2">
                        <button type="button" class="tolly-icon d-lg-none rounded-pill w-36px h-36px position-relative">
                            <img src="/template/assets/img/icons/tolly-theme.png" alt="tolly-icon">
                            <span class="count-quan d-center count-quan-black text-white">02</span>
                        </button>
                        <a href="{{ route('contact') }}"
                            class="rounded-pill d-center gap-2 fw-bold theme-clr login-white fs-14 h-36px w-36px px-1">
                            <i class="fa-regular fa-user"></i>
                        </a>
                        <div class="header__hamburger d-lg-none d-block my-auto">
                            <div
                                class="sidebar__toggle black-bg d-flex align-items-center justify-content-center w-40px h-40px rounded-circle sidebar__toggle fs-20 text-white">
                                <i class="fa-solid fa-bars"></i>
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-flex d-none align-items-center gap-xxl-3 gap-3">

                        <button type="button" class="tolly-icon border w-40px h-40px rounded-circle position-relative">
                            <img width="21" src="/template/assets/img/icons/tolly-theme.png" alt="tolly-icon">
                            <span class="count-quan d-center count-quan-black text-white">02</span>
                        </button>
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
                    Shop Details
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
                        Shop Details
                    </li>
                </ul>
            </div>
        </div>
        <img src="/template/assets/img/home-1/home-shape-start.png" alt="img" class="bread-shape-start position-absolute">
        <img src="/template/assets/img/home-1/home-shape-end.png" alt="img"
            class="bread-shape-end position-absolute d-sm-block d-none">
    </section>

    <!--- SHop Section -->
    <section class="shop-section position-relative z-1 fix section-padding pb-0">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="shop-big-details me-lg-5 wow fadeInDown" data-wow-delay="0.3s">
                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                            class="swiper mySwiper2 mb-3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="thumbSlide-big">
                                        <img src="/template/assets/img/inner/shop-slide1.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="thumbSlide-big">
                                        <img src="/template/assets/img/inner/shop-slide2.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="thumbSlide-big">
                                        <img src="/template/assets/img/inner/shop-slide3.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="thumbSlide-big">
                                        <img src="/template/assets/img/inner/shop-slide4.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="thumbSlide-big">
                                        <img src="/template/assets/img/inner/shop-slide3.jpg" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="thumbSlide">
                                        <img src="/template/assets/img/inner/shop-slide1.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="thumbSlide">
                                        <img src="/template/assets/img/inner/shop-slide2.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="thumbSlide">
                                        <img src="/template/assets/img/inner/shop-slide3.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="thumbSlide">
                                        <img src="/template/assets/img/inner/shop-slide4.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="thumbSlide">
                                        <img src="/template/assets/img/inner/shop-slide3.jpg" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="shop-details-right">
                        <h4 class="text-black mb-1 wow fadeInUp" data-wow-delay="0.1s">Spicy Mushroom Pasta</h4>
                        <div class="d-flex align-items-center gap-xl-3 gap-2 flex-wrap mb-3 wow fadeInUp"
                            data-wow-delay="0.2s">
                            <div class="d-flex gap-1">
                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                <i class="fa-solid fa-star fs-16 text3-clr"></i>
                            </div>
                            <span class="fs-14 wow fadeInUp" data-wow-delay="0.3s">(4.8 Reviews)</span>
                            <span class="fs-14 wow fadeInUp" data-wow-delay="0.4s">I Write a Review</span>
                        </div>
                        <h5 class="theme3-clr mb-2 wow fadeInUp" data-wow-delay="0.1s">13.50</h5>
                        <div class="d-flex align-items-center gap-1 mb-xl-3 mb-2 fs-18 wow fadeInUp"
                            data-wow-delay="0.5s">
                            Availability: <span class="theme3-clr">In Stock</span>
                        </div>
                        <p class="text-clr mb-30 fs-16 wow fadeInUp" data-wow-delay="0.6s">
                            Aromatic mushrooms cooked in a creamy, spicy sauce with
                            garlic and herbs. Perfectly tossed with pasta for a
                            bold, flavorful bite!
                        </p>
                        <!-- Quantity Wrapper -->
                        <div class="mb-30 wow fadeInUp" data-wow-delay="0.7s">
                            <h6 class="text-black mb-2">Quantity</h6>
                            <div class="quantity-wrapper d-inline-flex align-items-center">
                                <button type="button" class="quantityDecrement">-</button>
                                <input type="text" value="1" readonly>
                                <button type="button" class="quantityIncrement">+</button>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-xl-3 gap-2 flex-wrap mb-40 wow fadeInUp"
                            data-wow-delay="0.8s">
                            <button type="button" class="theme-btn h-44px">
                                <img src="/template/assets/img/icons/cart.png" alt="img"> Add To Cart
                            </button>
                            <a href="{{ route('about') }}"
                                class="theme-btn rounded-1 h-44px fw-semibold theme-opacity-10 text-capitalize fs-14 ">
                                <img src="/template/assets/img/icons/hart.png" alt="img">
                                <span class="theme-clr">Add To Wishlist</span>
                            </a>
                        </div>
                        <div class="d-flex align-items-center gap-3 flex-wrap wow fadeInUp" data-wow-delay="0.9s">
                            <h6 class="text-black mb-2">Social Share:</h6>
                            <div class="soical-gray d-flex align-items-center gap-2">
                                <a href="javascript:void(0)" class="social">
                                    <i class="fa-brands fa-facebook-f fs-18"></i>
                                </a>
                                <a href="javascript:void(0)" class="social">
                                    <i class="fa-brands fa-twitter fs-18"></i>
                                </a>
                                <a href="javascript:void(0)" class="social">
                                    <i class="fa-brands fa-instagram fs-18"></i>
                                </a>
                                <a href="javascript:void(0)" class="social">
                                    <i class="fa-brands fa-pinterest-p fs-18"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="/template/assets/img/inner-global-pasta.png" alt="img"
            class="position-absolute top-0 end-0 float-bob-y pt-100 mt-4 z-n1 d-sm-block d-none">
    </section>

    <!--- Shop Description Section -->
    <section class="shop-description-section fix section-padding pt-0">
        <div class="container pt-100">
            <div class="shop-description_inner">
                <ul class="nav d-flex flex-wrap align-items-center nav-tabs border-0 mb-4" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link p-0 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true">
                            Product Description
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link p-0" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">
                            Specification
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link p-0" id="profile-tab01" data-bs-toggle="tab" data-bs-target="#profile01"
                            type="button" role="tab" aria-controls="profile01" aria-selected="false">
                            (4) Reviews
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <p class="fs-16 heading-font mb-sm-3 mb-2">
                            Indulge in the bold flavors of our Spicy Mushroom Pasta — a perfect fusion of heat and
                            creaminess. Fresh mushrooms are
                            sautéed with garlic,
                            chili flakes, and herbs, then blended into a rich, spicy sauce that coats every strand of
                            pasta. Ideal for those who
                            crave a kick in every bite,
                            this dish delivers warmth, comfort, and irresistible taste in one bowl.
                        </p>
                        <h4 class="mb-1 text-black">Key Features</h4>
                        <ul class="d-flex flex-column before-list">
                            <li class="position-relative fs-16 text-black d-flex align-items-center"> Loaded with fresh,
                                sautéed mushrooms</li>
                            <li class="position-relative fs-16 text-black d-flex align-items-center">Infused with chili
                                flakes for a spicy kick</li>
                            <li class="position-relative fs-16 text-black d-flex align-items-center">Flavored with
                                garlic and aromatic herbs</li>
                            <li class="position-relative fs-16 text-black d-flex align-items-center">Rich and creamy
                                sauce perfectly coats the pasta</li>
                            <li class="position-relative fs-16 text-black d-flex align-items-center">Vegetarian-friendly
                                and full of bold taste</li>
                            <li class="position-relative fs-16 text-black d-flex align-items-center">Ideal for lunch or
                                dinner with a spicy twist</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <p class="fs-16 heading-font mb-sm-3 mb-2">
                            Indulge in the bold flavors of our Spicy Mushroom Pasta — a perfect fusion of heat and
                            creaminess. Fresh mushrooms are
                            sautéed with garlic,
                            chili flakes, and herbs, then blended into a rich, spicy sauce that coats every strand of
                            pasta. Ideal for those who
                            crave a kick in every bite,
                            this dish delivers warmth, comfort, and irresistible taste in one bowl.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="profile01" role="tabpanel" aria-labelledby="profile-tab01">
                        <p class="fs-16 heading-font mb-sm-3 mb-2">
                            Indulge in the bold flavors of our Spicy Mushroom Pasta — a perfect fusion of heat and
                            creaminess. Fresh mushrooms are
                            sautéed with garlic,
                            chili flakes, and herbs, then blended into a rich, spicy sauce that coats every strand of
                            pasta. Ideal for those who
                            crave a kick in every bite,
                            this dish delivers warmth, comfort, and irresistible taste in one bowl.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer section start -->
        <footer class="footer-section position-relative fix black-bg z-1">
        <img src="/template/assets/img/inner/footer-shape-filter.png" alt="img"
            class="position-absolute start-0 top-0 mt-5 pt-5 float-bob-y z-n1 d-lg-block d-none opacity-25">
        <img src="/template/assets/img/home-4/footer4-right.png" alt="img"
            class="position-absolute end-0 top-0 pt-100 mt-40 mx-5 float-bob-y z-n1 opacity-25">
        <div class="container">
            <div class="footer-widget-wrapper pb-80">
                <div class="d-flex align-items-center justify-content-between gap-3 pb-100">
                    <img src="/template/assets/img/home-4/f-lin-dot.png" alt="img" class="w-100 d-xl-block d-none">
                    <a href="{{ route('index') }}">
                        <img style="width: 300px" src="/template/assets/img/logo/logowhite.png" alt="img">
                    </a>
                    <img src="/template/assets/img/home-4/f-lin-dot.png" alt="img" class="w-100 d-xl-block d-none">
                </div>
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="single-footer-widget py-0">
                            <h5 class="widget-head text-white text-uppercase fs-20 white-clr fw-semibold">
                                Help
                            </h5>
                            <ul class="important-link d-grid gap-sm-2 gap-1">
                                <li>
                                    <a href="{{ route('faqs') }}" class="text-white opacity-75 fw-light link-effect">FAQs</a>
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
                                    <a href="{{ route('about') }}" class="text-white opacity-75 fw-light link-effect">Our
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
                                <h5 class="text-white mb-lg-3 mb-2"><a href="tel:+2347063764926" class="d-block" style="color: #fff">07063764926</a></h5>
                                <p class="fs-16 white-clr opacity-75"><a href="mailto:uncledavidscuisine@gmail.com" style="color: #fff">uncledavidscuisine@gmail.com</a></p>
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
                    <p class="fs-16 text4-clr">Copyright &copy; 2025 <a href="{{ route('index') }}" class="theme-clr">Uncle Dave</a>
                        all Right
                        Reserved</p>
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


</body>

</html>
