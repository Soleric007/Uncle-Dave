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
<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Uncle Dave">
    <!-- ======== Page title ============ -->
    <title>Uncle Dave - Shop</title>
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

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-right d-xl-none d-flex justify-content-end align-items-center gap-sm-3 gap-2">
                        <button type="button" class="tolly-icon d-lg-none rounded-pill w-36px h-36px position-relative">
                            <img src="/template/assets/img/icons/tolly-theme.png" alt="tolly-icon">
                            <span class="count-quan d-center count-quan-black text-white">
    {{ count(session()->get('cart', [])) }}
</span>
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
                            <span class="count-quan d-center count-quan-black text-white">
    {{ count(session()->get('cart', [])) }}
</span>
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
                    Shop Page
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
                        Shop Page
                    </li>
                </ul>
            </div>
        </div>
        <img src="/template/assets/img/home-1/home-shape-start.png" alt="img" class="bread-shape-start position-absolute">
        <img src="/template/assets/img/home-1/home-shape-end.png" alt="img"
            class="bread-shape-end position-absolute d-sm-block d-none">
    </section>

<!-- Shop Section -->
<section class="shop-section position-relative z-1 fix section-padding">
    <div class="container">
        <div class="row g-4">
            <!-- Sidebar -->
            <div class="col-lg-3">
                <!-- Categories -->
                {{-- <div class="shop-category cmn-shadow-shop mb-xxl-4 mb-3">
                    <h4 class="mb-3">Categories</h4>
                    <div class="d-flex flex-column gap-3">
                        @php
                            $categories = ['Soups', 'Pasta', 'Rice', 'Platters', 'Porridges', 'Extras'];
                        @endphp
                        @foreach($categories as $category)
                            <a href="{{ route('shop', ['category' => $category]) }}"
                               class="d-flex w-100 link-effect align-items-center justify-content-between border-bottom pb-3">
                                <span class="d-flex align-items-center gap-1 fs-15 text-clr">
                                    <img src="/template/assets/img/icons/shop-check.png" alt="icon">
                                    {{ $category }}
                                </span>
                                <span class="fs-13 text-clr">(25)</span>
                            </a>
                        @endforeach
                    </div>
                </div> --}}
                <div class="shop-category cmn-shadow-shop mb-xxl-4 mb-3">
    <h4 class="mb-3">Categories</h4>
    <div class="d-flex flex-column gap-3">
        @php
            $categories = ['Soups', 'Pasta', 'Rice', 'Platters', 'Porridges', 'Extras'];
        @endphp
        @foreach($categories as $cat)
            <a href="{{ route('shop', ['category' => $cat]) }}"
               class="d-flex w-100 link-effect align-items-center justify-content-between border-bottom pb-3
               {{ ($category ?? '') === $cat ? 'theme3-clr fw-bold' : 'text-clr' }}">
                <span class="d-flex align-items-center gap-1 fs-15">
                    <img src="/template/assets/img/icons/shop-check.png" alt="icon">
                    {{ $cat }}
                </span>
                <span class="fs-13">(25)</span>
            </a>
        @endforeach
        <a href="{{ route('shop') }}"
           class="d-flex w-100 link-effect align-items-center justify-content-between border-bottom pb-3
           {{ empty($category) ? 'theme3-clr fw-bold' : 'text-clr' }}">
            <span class="d-flex align-items-center gap-1 fs-15">
                <img src="/template/assets/img/icons/shop-check.png" alt="icon">
                All Items
            </span>
        </a>
    </div>
</div>


                <!-- Popular Items -->
                <div class="shop-category cmn-shadow-shop mb-xxl-4 mb-3">
                    <h4 class="mb-3">Popular Menu Items</h4>
                    <div class="d-flex flex-column gap-sm-3 gap-2">
                        @foreach($popularItems ?? [] as $item)
                            <div class="d-flex align-items-center gap-xl-3 gap-2">
                                <a href="{{ route('shop.details', $item->id) }}" class="thumb card-effect w-80px h-80px rounded-2">
                                    <img src="{{ $item->image ? asset('storage/' . $item->image) : '/template/assets/img/inner/shop-grilled1.jpg' }}"
                                         alt="{{ $item->name }}" class="w-100 rounded-2">
                                </a>
                                <div class="content">
                                    <a href="{{ route('shop.details', $item->id) }}" class="fs-16 fw-semibold text-black">{{ $item->name }}</a>
                                    <div class="d-flex gap-1 mb-1">
                                        <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                        <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                        <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                        <i class="fa-solid fa-star fs-16 ratting-clr"></i>
                                        <i class="fa-solid fa-star fs-16 text3-clr"></i>
                                    </div>
                                    <div class="fs-16 theme3-clr fw-bold">${{ number_format($item->price, 2) }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-lg-9">
                <!-- Filter Bar -->
                <div class="shop-filter-area border rounded-2 py-3 px-3 d-flex align-items-center justify-content-between flex-wrap gap-3 mb-xxl-4 mb-3">
                    <span class="fs-15 text-clr">
                        Showing {{ $foodItems->firstItem() ?? 0 }}–{{ $foodItems->lastItem() ?? 0 }} of {{ $foodItems->total() ?? 0 }} results
                    </span>
                    <div class="d-flex align-items-center shop-filter-inner">
                        <select name="sorting" class="form-select-sm">
                            <option value="">Default Sorting</option>
                            <option value="price_asc">Price: Low to High</option>
                            <option value="price_desc">Price: High to Low</option>
                        </select>
                        <ul class="nav d-flex flex-nowrap align-items-center gap-3 nav-tabs border-0" id="shopTab" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link p-0 border-0 active" id="grid-tab" data-bs-toggle="tab" data-bs-target="#grid"
                                        type="button" role="tab" aria-selected="true">
                                    <i class="fa-solid fa-grid-2"></i>
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link p-0 border-0" id="list-tab" data-bs-toggle="tab" data-bs-target="#list"
                                        type="button" role="tab" aria-selected="false">
                                    <i class="fa-solid fa-list"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="tab-content" id="shopTabContent">
                    <div class="tab-pane fade show active" id="grid" role="tabpanel">
                        <div class="row g-xxl-4 g-xl-3 g-2">
                            @forelse($foodItems ?? [] as $foodItem)
                                <div class="col-sm-6 col-lg-4">
                                    <div class="restaurant-card rounded-4 border h-100 card-scale wow fadeInUp">
                                        <div class="thumb rounded-top-3 position-relative">
                                            <img src="{{ $foodItem->image ? asset('storage/' . $foodItem->image) : '/template/assets/img/inner/shop-grid1.jpg' }}"
                                                 alt="{{ $foodItem->name }}" class="w-100 rounded-top-3">
                                            @if($foodItem->is_available)
                                                <div class="position-absolute top-0 theme3-bg fs-12 py-1 px-2 text-white fw-500 rounded-end">
                                                    Available
                                                </div>
                                            @endif
                                        </div>
                                        <div class="cont py-3 px-xxl-4 px-3">
                                            <h6 class="mb-2">
                                                <a href="{{ route('shop.details', $foodItem->id) }}" class="text-black link-effect">
                                                    {{ $foodItem->name }}
                                                </a>
                                            </h6>
                                            <p class="fs-12 mb-3 lh-18">{{ Str::limit($foodItem->description, 80) }}</p>
                                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                                <span class="theme3-clr fw-semibold fs-16">${{ number_format($foodItem->price, 2) }}</span>
                                                <button type="button" class="add-to-cart-btn theme-btn btn-outline-theme rounded-pill py-2 px-3"
                                                        data-food-item-id="{{ $foodItem->id }}">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12 text-center py-5">
                                    <h4>No food items available yet</h4>
                                    <p>Check back soon!</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                @if(isset($foodItems) && $foodItems->hasPages())
                    <div class="d-flex justify-content-center mt-40">
                        {{ $foodItems->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Floating Decorations -->
    <img src="/template/assets/img/inner-global-left.png" alt="img"
         class="position-absolute bottom-0 start-0 float-bob-y z-n1 d-sm-block d-none">
    <img src="/template/assets/img/inner-global-chess.png" alt="img"
         class="position-absolute top-0 end-0 float-bob-y z-n1 d-sm-block d-none">
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
