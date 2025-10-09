<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="authorNmaeHere">
    <meta name="description" content="Uncle Dave">
    <!-- ======== Page title ============ -->
    <title>Uncle Dave</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="/template/assets/img/logo/favicon.png">
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
                <span data-text-preloader="E" class="letters-loading">
                    E
                </span>
            </div>
            <p class="text-center">Loading</p>
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
                                <img src="/template/assets/img/logo/logo-white.png" alt="logo-img">
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
                                    <a target="_blank" href="#">Strits Es/154 Maces Road 1/8 United State</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:info@example.com"><span
                                            class="mailto:info@example.com">info@example.com</span></a>
                                    <a href="mailto:info@example.com"><span
                                            class="mailto:info@example.com">ex@example.com</span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Sat-friday, 02am -09pm</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+11002345909" class="d-block">365 5552-0127</a>
                                    <a href="tel:+11002345909">5421 5545 5422</a>
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
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
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
                                <img src="/template/assets/img/logo/logo-white.png" alt="logo-img">
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
                    Cart Page
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
                        Cart Page
                    </li>
                </ul>
            </div>
        </div>
        <img src="/template/assets/img/home-1/home-shape-start.png" alt="img" class="bread-shape-start position-absolute">
        <img src="/template/assets/img/home-1/home-shape-end.png" alt="img"
            class="bread-shape-end position-absolute d-sm-block d-none">
    </section>

    <!--- SHop Section -->
    <section class="shop-section position-relative z-1 fix section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-9">
                    <div class="table-cart-inner p-xxl-4 p-xl-4 p-3">
                        <div class="table-responsive">
                            <table class="table m-0 align-middle table-borderless">
                                <thead>
                                    <tr>
                                        <th class="pb-lg-4 pb-3">
                                            <div class="fs-18 fw-semibold text-black m-0">Item</div>
                                        </th>
                                        <th class="pb-lg-4 pb-3">
                                            <div class="fs-18 fw-semibold text-black m-0">Price</div>
                                        </th>
                                        <th class="pb-lg-4 pb-3">
                                            <div class="fs-18 fw-semibold text-black m-0">Quantity</div>
                                        </th>
                                        <th class="pb-lg-4 pb-3">
                                            <div class="fs-18 fw-semibold text-black m-0">Subtotal</div>
                                        </th>
                                        <th class="pb-lg-4 pb-3">
                                            <div class="fs-18 fw-semibold text-black m-0">Remove</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border overflow-hidden rounded">
                                        <td class="p-3">
                                            <a href="{{ route('checkout') }}" class="d-flex align-items-center gap-3">
                                                <img src="/template/assets/img/inner/shop-cart.jpg" alt=""
                                                    class="border rounded-2">
                                                <h5 class="text-black max-w-180 fw-500">Spicy Mushroom Pasta</h5>
                                            </a>
                                        </td>
                                        <td class="p-3">
                                            <h5 class="theme-clr fw-500">$12.00</h5>
                                        </td>
                                        <td class="p-3">
                                            <div class="wow fadeInUp" data-wow-delay="0.7s">
                                                <div class="quantity-wrapper d-inline-flex align-items-center">
                                                    <button type="button" class="quantityDecrement">-</button>
                                                    <input type="text" value="1" readonly>
                                                    <button type="button" class="quantityIncrement">+</button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-3">
                                            <h5 class="p-3 theme-clr fw-500">$24.00 </h5>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="text-center btn p-0 border-0"><i
                                                    class="fa-solid fa-xmark"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="border overflow-hidden rounded">
                                        <td class="p-3">
                                            <a href="{{ route('checkout') }}" class="d-flex align-items-center gap-3">
                                                <img src="/template/assets/img/inner/shop-cart.jpg" alt=""
                                                    class="border rounded-2">
                                                <h5 class="text-black max-w-180 fw-500">Spicy Mushroom Pasta</h5>
                                            </a>
                                        </td>
                                        <td class="p-3">
                                            <h5 class="theme-clr fw-500">$44.00</h5>
                                        </td>
                                        <td class="p-3">
                                            <div class="wow fadeInUp" data-wow-delay="0.7s">
                                                <div class="quantity-wrapper d-inline-flex align-items-center">
                                                    <button type="button" class="quantityDecrement">-</button>
                                                    <input type="text" value="1" readonly>
                                                    <button type="button" class="quantityIncrement">+</button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-3">
                                            <h5 class="p-3 theme-clr fw-500">$24.00 </h5>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="text-center btn p-0 border-0"><i
                                                    class="fa-solid fa-xmark"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="border overflow-hidden rounded">
                                        <td class="p-3">
                                            <a href="{{ route('checkout') }}" class="d-flex align-items-center gap-3">
                                                <img src="/template/assets/img/inner/shop-cart.jpg" alt=""
                                                    class="border rounded-2">
                                                <h5 class="text-black max-w-180 fw-500">Spicy Mushroom Pasta</h5>
                                            </a>
                                        </td>
                                        <td class="p-3">
                                            <h5 class="theme-clr fw-500">$09.00</h5>
                                        </td>
                                        <td class="p-3">
                                            <div class="wow fadeInUp" data-wow-delay="0.7s">
                                                <div class="quantity-wrapper d-inline-flex align-items-center">
                                                    <button type="button" class="quantityDecrement">-</button>
                                                    <input type="text" value="1" readonly>
                                                    <button type="button" class="quantityIncrement">+</button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-3">
                                            <h5 class="p-3 theme-clr fw-500">$09.00</h5>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="text-center btn p-0 border-0"><i
                                                    class="fa-solid fa-xmark"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="border overflow-hidden rounded">
                                        <td class="p-3">
                                            <a href="{{ route('checkout') }}" class="d-flex align-items-center gap-3">
                                                <img src="/template/assets/img/inner/shop-cart.jpg" alt=""
                                                    class="border rounded-2">
                                                <h5 class="text-black max-w-180 fw-500">Spicy Mushroom Pasta</h5>
                                            </a>
                                        </td>
                                        <td class="p-3">
                                            <h5 class="theme-clr fw-500">$22.00</h5>
                                        </td>
                                        <td class="p-3">
                                            <div class="wow fadeInUp" data-wow-delay="0.7s">
                                                <div class="quantity-wrapper d-inline-flex align-items-center">
                                                    <button type="button" class="quantityDecrement">-</button>
                                                    <input type="text" value="1" readonly>
                                                    <button type="button" class="quantityIncrement">+</button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-3">
                                            <h5 class="p-3 theme-clr fw-500">$44.00</h5>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="text-center btn p-0 border-0"><i
                                                    class="fa-solid fa-xmark"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="border overflow-hidden rounded">
                                        <td class="p-3">
                                            <a href="{{ route('checkout') }}" class="d-flex align-items-center gap-3">
                                                <img src="/template/assets/img/inner/shop-cart.jpg" alt=""
                                                    class="border rounded-2">
                                                <h5 class="text-black max-w-180 fw-500">Spicy Mushroom Pasta</h5>
                                            </a>
                                        </td>
                                        <td class="p-3">
                                            <h5 class="theme-clr fw-500">$44.00</h5>
                                        </td>
                                        <td class="p-3">
                                            <div class="wow fadeInUp" data-wow-delay="0.7s">
                                                <div class="quantity-wrapper d-inline-flex align-items-center">
                                                    <button type="button" class="quantityDecrement">-</button>
                                                    <input type="text" value="1" readonly>
                                                    <button type="button" class="quantityIncrement">+</button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-3">
                                            <h5 class="p-3 theme-clr fw-500">$44.00</h5>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="text-center btn p-0 border-0"><i
                                                    class="fa-solid fa-xmark"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex align-items-center gap-4 mt-4">
                            <h6 class="text-black">Back</h6>
                            <button type="button" class="theme-btn rounded-2">
                                Cancel Order
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex flex-column gap-3">
                        <div class="shadow-cus coupon-group p-xl-4 p-3 rounded-3 bg-white wow fadeInDown"
                            data-wow-delay="4.s">
                            <h5 class="border-bottom pb-2 mb-3">Coupon Code</h5>
                            <input type="text" placeholder="Enter your Coupon Code" class="mb-3">
                            <button type="button" class="theme-btn justify-content-center w-100 btn-outline-theme">
                                Apply Your Coupon
                            </button>
                        </div>
                        <div class="shadow-cus coupon-group p-xl-4 p-3 rounded-3 bg-white wow fadeInDown"
                            data-wow-delay="6.s">
                            <h5 class="border-bottom pb-2 mb-3">Order Summary</h5>
                            <div class="d-flex flex-column gap-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="fs-16 text-color">Discount</span>
                                    <span class="fs-16 text-black fw-medium">$20.00</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="fs-16 text-color">Delivery</span>
                                    <span class="fs-16 text-black fw-medium">$2.00</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="fs-16 text-color">Tax</span>
                                    <span class="fs-16 text-black fw-medium">$2.98</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="fs-16 text-color">Total</span>
                                    <span class="fs-16 text-black fw-medium">$349.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="shadow-cus coupon-group p-xl-4 p-3 rounded-3 bg-white wow fadeInDown"
                            data-wow-delay="8.s">
                            <h5 class="border-bottom pb-2 mb-3">Payment Method</h5>
                            <div class="d-flex flex-wrap align-items-center gap-2 mb-3">
                                <button type="button" class="btn p-0 border rounded-2 w-44px h-40px">
                                    <img width="30" height="30" src="/template/assets/img/icons/payment.png" alt="img">
                                </button>
                                <button type="button" class="btn p-0 border rounded-2 w-44px h-40px">
                                    <img width="30" height="30" src="/template/assets/img/icons/payment.png" alt="img">
                                </button>
                                <button type="button" class="btn p-0 border rounded-2 w-44px h-40px">
                                    <img width="30" height="30" src="/template/assets/img/icons/payment.png" alt="img">
                                </button>
                                <button type="button" class="btn p-0 border rounded-2 w-44px h-40px">
                                    <img width="30" height="30" src="/template/assets/img/icons/payment.png" alt="img">
                                </button>
                                <button type="button" class="btn p-0 border rounded-2 w-44px h-40px">
                                    <img width="30" height="30" src="/template/assets/img/icons/payment.png" alt="img">
                                </button>
                            </div>
                            <button type="button" class="theme-btn text-center justify-content-center w-100">
                                Apply Your Coupon
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="/template/assets/img/inner-global-pasta.png" alt="img"
            class="position-absolute bottom-0 pb-100 end-0 float-bob-y mt-4 z-n1 d-sm-block d-none">
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
                        <img src="/template/assets/img/logo/logo-white.png" alt="img">
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
                                <li>
                                    <a href="{{ route('order.tracking') }}"
                                        class="text-white opacity-75 fw-light link-effect">Store
                                        Locator</a>
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
                                <li>
                                    <a href="{{ route('about') }}" class="text-white opacity-75 fw-light link-effect">Store
                                        Locator</a>
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
                                    1487 Rocky Horse Carre 1487Rocky
                                    Arlington, TX 16819 United
                                </p>
                                <h5 class="text-white mb-lg-3 mb-2">1800 6565 222</h5>
                                <p class="fs-16 white-clr opacity-75">info@gmail.com</p>
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
                            <form action="#0" class="d-flex form-outline">
                                <input type="text" placeholder="Email Address">
                                <button type="button" class="btn p-0 border-0"><img
                                        src="/template/assets/img/icons/arrow-right-long.png" alt="icon"></button>
                            </form>
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
                    <div class="d-flex align-items-center flex-wrap gap-lg-4 gap-sm-3 gap-2">
                        <a href="{{ route('contact') }}" class="fs-16 text3-clr link-effect heading-font-afasad">Privacy
                            Policy</a>
                        <a href="{{ route('contact') }}" class="fs-16 text3-clr link-effect heading-font-afasad">Terms &
                            Conditions</a>
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
