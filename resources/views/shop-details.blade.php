<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Uncle Davids Cousine">
    <meta name="description" content="Order delicious Nigerian meals online — soups, rice, pasta, and platters freshly prepared and delivered to your doorstep.">
    <meta name="keywords" content="food delivery, Nigerian meals, order food online, egusi soup, jollof rice, Uncle Dave restaurant, Delta food delivery, Asaba food delivery">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Uncle David's Cuisine - {{ $foodItem->name }}</title>
    <link rel="shortcut icon" href="/template/assets/img/logo/fav-icon.png">
    <link rel="stylesheet" href="/template/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/template/assets/css/all.min.css">
    <link rel="stylesheet" href="/template/assets/css/animate.css">
    <link rel="stylesheet" href="/template/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/template/assets/css/meanmenu.css">
    <link rel="stylesheet" href="/template/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/template/assets/css/nice-select.css">
    <link rel="stylesheet" href="/template/assets/css/expose.css">
    <link rel="stylesheet" href="/template/assets/css/main.css">

    <style>
        /* Custom Toast Notification Styles */
        .toast-notification {
            position: fixed;
            top: 20px;
            right: 20px;
            min-width: 300px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.15);
            padding: 16px 20px;
            z-index: 9999;
            display: flex;
            align-items: center;
            gap: 12px;
            animation: slideInRight 0.3s ease-out;
            border-left: 4px solid #28a745;
        }

        .toast-notification.error {
            border-left-color: #dc3545;
        }

        .toast-notification .toast-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
        }

        .toast-notification.success .toast-icon {
            background: #d4edda;
            color: #28a745;
        }

        .toast-notification.error .toast-icon {
            background: #f8d7da;
            color: #dc3545;
        }

        .toast-notification .toast-content {
            flex: 1;
        }

        .toast-notification .toast-title {
            font-weight: 600;
            color: #333;
            margin-bottom: 4px;
            font-size: 15px;
        }

        .toast-notification .toast-message {
            color: #666;
            font-size: 14px;
            margin: 0;
        }

        .toast-notification .toast-close {
            background: none;
            border: none;
            font-size: 20px;
            color: #999;
            cursor: pointer;
            padding: 0;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .toast-notification .toast-close:hover {
            color: #333;
        }

        @keyframes slideInRight {
            from {
                transform: translateX(400px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideOutRight {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(400px);
                opacity: 0;
            }
        }

        .toast-notification.hiding {
            animation: slideOutRight 0.3s ease-out forwards;
        }
    </style>
</head>

<body class="body-bg">

    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                <span data-text-preloader="U" class="letters-loading">U</span>
                <span data-text-preloader="N" class="letters-loading">N</span>
                <span data-text-preloader="C" class="letters-loading">C</span>
                <span data-text-preloader="L" class="letters-loading">L</span>
                <span data-text-preloader="E" class="letters-loading">E</span>
                <span data-text-preloader="D" class="letters-loading">D</span>
                <span data-text-preloader="A" class="letters-loading">A</span>
                <span data-text-preloader="V" class="letters-loading">V</span>
                <span data-text-preloader="I" class="letters-loading">I</span>
                <span data-text-preloader="D" class="letters-loading">D</span>
            </div>
            <p class="text-center">CUISINE</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left"><div class="bg"></div></div>
                <div class="col-3 loader-section section-left"><div class="bg"></div></div>
                <div class="col-3 loader-section section-right"><div class="bg"></div></div>
                <div class="col-3 loader-section section-right"><div class="bg"></div></div>
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
                            <button><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon"><i class="fal fa-map-marker-alt"></i></div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">No 17 ojife street Nnebisi road Asaba Delta State</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15"><i class="fal fa-envelope"></i></div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:uncledavidscuisine@gmail.com">uncledavidscuisine@gmail.com</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15"><i class="fal fa-clock"></i></div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Monday - Saturday</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15"><i class="far fa-phone"></i></div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+2347063764926" class="d-block">07063764926</a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4">
                            <a href="{{ route('contact') }}" class="theme-btn d-inline-flex text-white justify-content-center align-items-center gap-xxl-2 gap-2 fs-16 rounded-1 fw-500 black-clr overflow-hidden">
                                Contact Us <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="https://www.facebook.com/share/1FQmhhxnt5/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/uncle_davids_cuisine?igsh=ZXhuYjc5N3ZwdGU0" target="_blank"><i class="fab fa-instagram"></i></a>
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
                                        <a href="{{ route('index') }}">Home</a>
                                    </li>
                                    <li class="has-dropdown droop active menu-thumb">
                                        <a href="{{ route('about') }}">About</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Shop <i class="fas fa-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('shop') }}">Shop</a></li>
                                            <li><a href="{{ route('cart') }}">Cart</a></li>
                                            <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                            <li><a href="{{ route('order.tracking') }}">Order Tracking</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="{{ route('faqs') }}">Faqs</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-right d-xl-none d-flex justify-content-end align-items-center gap-sm-3 gap-2">
                        <a href="{{ route('cart') }}">
                            <button type="button" class="tolly-icon d-lg-none rounded-pill w-36px h-36px position-relative">
                                <img src="/template/assets/img/icons/tolly-theme.png" alt="tolly-icon">
                                <span class="count-quan d-center count-quan-black text-white">
                                    {{ count(session()->get('cart', [])) }}
                                </span>
                            </button>
                        </a>
                        <div class="header__hamburger d-lg-none d-block my-auto">
                            <div class="sidebar__toggle black-bg d-flex align-items-center justify-content-center w-40px h-40px rounded-circle sidebar__toggle fs-20 text-white">
                                <i class="fa-solid fa-bars"></i>
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-flex d-none align-items-center gap-xxl-3 gap-3">
                        <a href="{{ route('cart') }}">
                            <button type="button" class="tolly-icon border w-40px h-40px rounded-circle position-relative">
                                <img width="21" src="/template/assets/img/icons/tolly-theme.png" alt="tolly-icon">
                                <span class="count-quan d-center count-quan-black text-white">
                                    {{ count(session()->get('cart', [])) }}
                                </span>
                            </button>
                        </a>
                        <button type="button" class="destop-bars black-bg w-40px h-40px rounded-circle d-xl-none d-flex align-items-center justify-content-center sidebar__toggle fs-20 text-white">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Breadcrumb -->
    <section class="breadcrumb-section position-relative fix bg-cover" style="background-image: url(/template/assets/img/hero/breadcrumb-banner.jpg);">
        <div class="container">
            <div class="breadcrumb-content">
                <h2 class="white-clr fw-semibold text-center heading-font mb-2">Shop Details</h2>
                <ul class="breadcrumb align-items-center justify-content-center flex-wrap gap-3">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><i class="fa-solid fa-angle-right"></i></li>
                    <li><a href="{{ route('shop') }}">Shop</a></li>
                    <li><i class="fa-solid fa-angle-right"></i></li>
                    <li>{{ $foodItem->name }}</li>
                </ul>
            </div>
        </div>
        <img src="/template/assets/img/home-1/home-shape-start.png" alt="img" class="bread-shape-start position-absolute">
        <img src="/template/assets/img/home-1/home-shape-end.png" alt="img" class="bread-shape-end position-absolute d-sm-block d-none">
    </section>

    <!-- Shop Section -->
    <section class="shop-section position-relative z-1 fix section-padding pb-0">
        <div class="container">
            <div class="row g-4">
                <!-- Product Images -->
                <div class="col-lg-6">
                    <div class="shop-big-details me-lg-5 wow fadeInDown" data-wow-delay="0.3s">
                        <div class="swiper mySwiper2 mb-3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="thumbSlide-big">
                                        <img src="{{ $foodItem->image ? asset('storage/' . $foodItem->image) : '/template/assets/img/inner/shop-slide1.jpg' }}" alt="{{ $foodItem->name }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Details -->
                <div class="col-lg-5">
                    <div class="shop-details-right">
                        <h4 class="text-black mb-1 wow fadeInUp" data-wow-delay="0.1s">{{ $foodItem->name }}</h4>

                        <div class="d-flex align-items-center gap-xl-3 gap-2 flex-wrap mb-3 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="d-flex gap-1">
                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                <i class="fa-solid fa-star fs-16 text3-clr"></i>
                            </div>
                            <span class="fs-14">(4.8 Reviews)</span>
                        </div>

                        <h5 class="theme3-clr mb-2 wow fadeInUp" data-wow-delay="0.1s">
                            Price: ₦{{ number_format($foodItem->price, 2) }}
                        </h5>

                        <div class="d-flex align-items-center gap-1 mb-xl-3 mb-2 fs-18 wow fadeInUp" data-wow-delay="0.5s">
                            Availability:
                            @if($foodItem->is_available)
                                <span class="theme3-clr">In Stock</span>
                            @else
                                <span class="text-danger">Out of Stock</span>
                            @endif
                        </div>

                        <p class="text-clr mb-30 fs-16 wow fadeInUp" data-wow-delay="0.6s">
                            {{ $foodItem->description ?? 'No description available for this item.' }}
                        </p>

                        <!-- Quantity Wrapper -->
                        <div class="mb-30 wow fadeInUp" data-wow-delay="0.7s">
                            <h6 class="text-black mb-2">Quantity</h6>
                            <div class="quantity-wrapper d-inline-flex align-items-center">
                                <button type="button" class="quantityDecrement">-</button>
                                <input type="text" id="quantity" value="1" readonly>
                                <button type="button" class="quantityIncrement">+</button>
                            </div>
                        </div>

                        <!-- Add to Cart -->
                        <div class="d-flex align-items-center gap-xl-3 gap-2 flex-wrap mb-40 wow fadeInUp" data-wow-delay="0.8s">
                            <button type="button" id="addToCartBtn" class="theme-btn h-44px" data-food-item-id="{{ $foodItem->id }}">
                                <img src="/template/assets/img/icons/cart.png" alt="cart"> Add To Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <img src="/template/assets/img/inner-global-pasta.png" alt="img" class="position-absolute top-0 end-0 float-bob-y pt-100 mt-4 z-n1 d-sm-block d-none">
    </section>

    <!-- Shop Description Section -->
    <section class="shop-description-section fix section-padding pt-0">
        <div class="container pt-100">
            <div class="shop-description_inner">
                <ul class="nav d-flex flex-wrap align-items-center nav-tabs border-0 mb-4" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link p-0 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                            Product Description
                        </button>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <p class="fs-16 heading-font mb-sm-3 mb-2">
                            {{ $foodItem->long_description ?? $foodItem->description ?? 'Detailed description not available.' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Items -->
    @if($relatedItems->count())
    <section class="related-products section-padding pt-0">
        <div class="container">
            <h4 class="mb-4 text-black">You may also like</h4>
            <div class="row g-4">
                @foreach($relatedItems as $related)
                    <div class="col-md-4">
                        <div class="restaurant-card rounded-4 overflow-hidden border">
                            <div class="thumb">
                                <a href="{{ route('shop.details', $related->id) }}">
                                    <img src="{{ $related->image ? asset('storage/'.$related->image) : '/template/assets/img/inner/shop-grid1.jpg' }}" alt="{{ $related->name }}" class="w-100">
                                </a>
                            </div>
                            <div class="cont py-3 px-3">
                                <h6 class="mb-2 text-black">
                                    <a href="{{ route('shop.details', $related->id) }}" class="text-black link-effect">
                                        {{ $related->name }}
                                    </a>
                                </h6>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="theme3-clr fw-semibold">₦{{ number_format($related->price, 2) }}</span>
                                    <a href="{{ route('shop.details', $related->id) }}" class="theme-btn btn-sm">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Footer -->
    <footer class="footer-section position-relative fix black-bg z-1">
        <img src="/template/assets/img/inner/footer-shape-filter.png" alt="img" class="position-absolute start-0 top-0 mt-5 pt-5 float-bob-y z-n1 d-lg-block d-none opacity-25">
        <img src="/template/assets/img/home-4/footer4-right.png" alt="img" class="position-absolute end-0 top-0 pt-100 mt-40 mx-5 float-bob-y z-n1 opacity-25">
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
                            <h5 class="widget-head text-white text-uppercase fs-20 white-clr fw-semibold">Help</h5>
                            <ul class="important-link d-grid gap-sm-2 gap-1">
                                <li><a href="{{ route('faqs') }}" class="text-white opacity-75 fw-light link-effect">FAQs</a></li>
                                <li><a href="{{ route('order.tracking') }}" class="text-white opacity-75 fw-light link-effect">Delivery</a></li>
                                <li><a href="{{ route('contact') }}" class="text-white opacity-75 fw-light link-effect">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="single-footer-widget py-0">
                            <h5 class="widget-head text-white text-uppercase fs-20 white-clr fw-semibold">about US</h5>
                            <ul class="important-link d-grid gap-sm-2 gap-1">
                                <li><a href="{{ route('about') }}" class="text-white opacity-75 fw-light link-effect">Our Story</a></li>
                                <li><a href="{{ route('order.tracking') }}" class="text-white opacity-75 fw-light link-effect">Delivery</a></li>
                                <li><a href="{{ route('contact') }}" class="text-white opacity-75 fw-light link-effect">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="single-footer-widget py-0">
                            <h5 class="widget-head text-white text-uppercase fs-20 white-clr fw-semibold">address</h5>
                            <div class="footer-content">
                                <p class="fs-16 white-clr opacity-75 mb-xl-3 mb-2">No 17 ojife street Nnebisi road Asaba Delta State</p>
                                <h5 class="text-white mb-lg-3 mb-2"><a href="tel:+2347063764926" class="d-block" style="color: #fff">07063764926</a></h5>
                                <p class="fs-16 white-clr opacity-75"><a href="mailto:uncledavidscuisine@gmail.com" style="color: #fff">uncledavidscuisine@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="d-flex align-items-center justify-content-sm-between justify-content-center flex-wrap gap-2 fs-16 text-center">
                    <p class="fs-16 text4-clr">Copyright &copy; 2025 <a href="{{ route('index') }}" class="theme-clr">Uncle Dave</a> all Right Reserved</p>
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

    <script src="/template/assets/js/jquery-3.7.1.min.js"></script>
    <script src="/template/assets/js/viewport.jquery.js"></script>
    <script src="/template/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/template/assets/js/jquery.nice-select.min.js"></script>
    <script src="/template/assets/js/jquery.waypoints.js"></script>
    <script src="/template/assets/js/jquery.counterup.min.js"></script>
    <script src="/template/assets/js/swiper-bundle.min.js"></script>
    <script src="/template/assets/js/jquery.meanmenu.min.js"></script>
    <script src="/template/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/template/assets/js/wow.min.js"></script>
    <script src="/template/assets/js/main.js"></script>
<script>
    // Toast Notification Function
    function showToast(type, title, message) {
        const toast = document.createElement('div');
        toast.className = `toast-notification ${type}`;

        const iconClass = type === 'success' ? 'fa-circle-check' : 'fa-circle-xmark';

        toast.innerHTML = `
            <div class="toast-icon">
                <i class="fa-solid ${iconClass}"></i>
            </div>
            <div class="toast-content">
                <div class="toast-title">${title}</div>
                <p class="toast-message">${message}</p>
            </div>
            <button class="toast-close" onclick="closeToast(this)">
                <i class="fa-solid fa-times"></i>
            </button>
        `;

        document.body.appendChild(toast);

        // Auto remove after 5 seconds
        setTimeout(() => {
            closeToast(toast.querySelector('.toast-close'));
        }, 5000);
    }

    function closeToast(btn) {
        const toast = btn.closest('.toast-notification');
        toast.classList.add('hiding');
        setTimeout(() => {
            toast.remove();
        }, 300);
    }

    // Setup AJAX with CSRF token
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Add to cart functionality for details page
    $(document).ready(function() {
        // Unbind any existing handlers first to prevent double-firing
        $('#addToCartBtn').off('click').on('click', function(e) {
            e.preventDefault();

            let foodItemId = $(this).data('food-item-id');
            let quantity = parseInt($('#quantity').val()) || 1;
            let btn = $(this);
            let originalHTML = btn.html();

            btn.prop('disabled', true).html('<i class="fa-solid fa-spinner fa-spin"></i> Adding...');

            $.ajax({
                url: '{{ route("cart.add") }}',
                method: 'POST',
                data: {
                    food_item_id: foodItemId,
                    quantity: quantity
                },
                success: function(response) {
                    if(response.success) {
                        // Update cart count in header
                        $('.count-quan').text(response.cartCount);

                        // Show success toast
                        showToast('success', 'Added to Cart!', response.message);

                        // Change button appearance temporarily
                        btn.html('<i class="fa-solid fa-check"></i> Added!');

                        // Reset button after 2 seconds
                        setTimeout(function() {
                            btn.html(originalHTML).prop('disabled', false);
                        }, 2000);
                    }
                },
                error: function(xhr) {
                    let errorMsg = 'Error adding item to cart';
                    if(xhr.responseJSON && xhr.responseJSON.message) {
                        errorMsg = xhr.responseJSON.message;
                    }

                    showToast('error', 'Error', errorMsg);
                    btn.html(originalHTML).prop('disabled', false);
                }
            });
        });

        // Quantity increment/decrement - unbind existing handlers first
        $('.quantityIncrement').off('click').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            let input = $('#quantity');
            let currentVal = parseInt(input.val()) || 1;
            input.val(currentVal + 1);
        });

        $('.quantityDecrement').off('click').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            let input = $('#quantity');
            let currentVal = parseInt(input.val()) || 1;
            if(currentVal > 1) {
                input.val(currentVal - 1);
            }
        });
    });
</script>



</body>
</html>
