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
    <title>Uncle David's Cuisine - Checkout</title>
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
                            <button type="button" class="tolly-icon d-lg-none rounded-pill w-36px h-36px position-relative">
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
                        <button type="button" class="tolly-icon border w-40px h-40px rounded-circle position-relative">
                            <img width="21" src="/template/assets/img/icons/tolly-theme.png" alt="tolly-icon">
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
                    Checkout
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
                        Checkout
                    </li>
                </ul>
            </div>
        </div>
        <img src="/template/assets/img/home-1/home-shape-start.png" alt="img" class="bread-shape-start position-absolute">
        <img src="/template/assets/img/home-1/home-shape-end.png" alt="img"
            class="bread-shape-end position-absolute d-sm-block d-none">
    </section>

    <!--- SHop Section -->
    {{-- <section class="shop-section position-relative z-1 fix section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="checkout-billing-details h-100">
                        <h4 class="text-black mb-lg-4 mb-3 wow fadeInUp" data-wow-delay="fadeInUp0.2s">Billing Details
                        </h4>
                        <form action="#0" class="billing-form">
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <div class="form-group m-0">
                                        <input type="text" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group m-0">
                                        <input type="text" placeholder="Last Name">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group m-0">
                                        <select name="select">
                                            <option value="">Town / City</option>

                                            <option value="Okpanam">Okpanam</option>
                                            <option value="Infant Jesus Area">Infant Jesus Area</option>
                                            <option value="Anwai Road Area">Anwai Road Area</option>
                                            <option value="DBS Road Area">DBS Road Area</option>
                                            <option value="Cable Point">Cable Point</option>
                                            <option value="Umueze">Umueze</option>
                                            <option value="Umuonaje">Umuonaje</option>
                                            <option value="Isieke">Isieke</option>
                                            <option value="Overhead Bridge Layout">Overhead Bridge Layout</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group m-0">
                                        <input type="text" placeholder="Apartment, Suite, unit, etc (Optional)">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group m-0">
                                        <input type="text" placeholder="E-mail Address">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group m-0">
                                        <input type="text" placeholder="Phone">
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="shadow-cus d-flex flex-column justify-content-between coupon-group position-relative h-100 p-xl-4 p-3 rounded-3 bg-white wow fadeInDown"
                        data-wow-delay="6.s">
                        <div class="div">
                            <h5 class="border-bottom pb-2 mb-3">Order Summary</h5>
                            <div class="d-flex flex-column gap-3 align-items-center pb-4">
                                <div class="order-summary d-flex justify-content-between w-100 gap-2">
                                    <div class="d-flex align-items-center gap-3">
                                        <img width="40" height="40" src="/template/assets/img/inner/shop-cart.jpg" alt=""
                                            class="border rounded-2">
                                        <div>
                                            <h5 class="text-black fs-12 lh-1 max-w-180 fw-500">Spicy Mushroom Pasta</h5>
                                            <span class="fw-semibold theme-clr fs-12">$24.00</span>
                                        </div>
                                    </div>
                                    <div class="quantity-wrapper d-inline-flex align-items-center">
                                        <button type="button" class="quantityDecrement">-</button>
                                        <input type="text" value="1" readonly>
                                        <button type="button" class="quantityIncrement">+</button>
                                    </div>
                                </div>
                                <div class="order-summary d-flex justify-content-between w-100 gap-2">
                                    <div class="d-flex align-items-center gap-3">
                                        <img width="40" height="40" src="/template/assets/img/inner/shop-cart.jpg" alt=""
                                            class="border rounded-2">
                                        <div>
                                            <h5 class="text-black fs-12 lh-1 max-w-180 fw-500">Spicy Mushroom Pasta</h5>
                                            <span class="fw-semibold theme-clr fs-12">$24.00</span>
                                        </div>
                                    </div>
                                    <div class="quantity-wrapper d-inline-flex align-items-center">
                                        <button type="button" class="quantityDecrement">-</button>
                                        <input type="text" value="1" readonly>
                                        <button type="button" class="quantityIncrement">+</button>
                                    </div>
                                </div>
                                <div class="order-summary d-flex justify-content-between w-100 gap-2">
                                    <div class="d-flex align-items-center gap-3">
                                        <img width="40" height="40" src="/template/assets/img/inner/shop-cart.jpg" alt=""
                                            class="border rounded-2">
                                        <div>
                                            <h5 class="text-black fs-12 lh-1 max-w-180 fw-500">Spicy Mushroom Pasta</h5>
                                            <span class="fw-semibold theme-clr fs-12">$24.00</span>
                                        </div>
                                    </div>
                                    <div class="quantity-wrapper d-inline-flex align-items-center">
                                        <button type="button" class="quantityDecrement">-</button>
                                        <input type="text" value="1" readonly>
                                        <button type="button" class="quantityIncrement">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="order-summary-footer">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center justify-content-between border-top pt-2 pb-1">
                                    <span class="fs-12 text-black fw-medium">Subtotal</span>
                                    <span class="fs-12 text-black fw-medium">$2,390.00</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pb-2">
                                    <span class="fs-12 text-black fw-medium">Subtotal</span>
                                    <span class="fs-12 text-black fw-medium">$2,390.00</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-2 pb-3">
                                    <span class="fs-12 text-black fw-medium">Total(USD)</span>
                                    <span class="fs-12 text-black fw-medium">$2450.00</span>
                                </div>
                            </div>
                            <button type="button" class="theme-btn text-center justify-content-center w-100">
                                Pay via Transfer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="/template/assets/img/inner-global-pasta.png" alt="img"
            class="position-absolute bottom-0 end-0 float-bob-y mt-4 z-n1 d-sm-block d-none">
    </section> --}}

    <section class="shop-section position-relative z-1 fix section-padding">
        <div class="container">
            <div class="row g-4">
               <div class="col-lg-8">
    <div class="checkout-billing-details h-100">
        <h4 class="text-black mb-lg-4 mb-3">Billing Details</h4>

        <form action="{{ route('checkout.store') }}" method="POST" class="billing-form">
            @csrf
            <div class="row g-4">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="mb-2 text-black fs-14 fw-medium">Full Name <span class="text-danger">*</span></label>
                        <input type="text"
                               name="customer_name"
                               class="form-control rounded-pill py-3 px-4 @error('customer_name') is-invalid @enderror"
                               placeholder="Enter your full name"
                               value="{{ old('customer_name') }}"
                               required>
                        @error('customer_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="mb-2 text-black fs-14 fw-medium">Email Address <span class="text-danger">*</span></label>
                        <input type="email"
                               name="customer_email"
                               class="form-control rounded-pill py-3 px-4 @error('customer_email') is-invalid @enderror"
                               placeholder="your@email.com"
                               value="{{ old('customer_email') }}"
                               required>
                        @error('customer_email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="mb-2 text-black fs-14 fw-medium">Phone Number <span class="text-danger">*</span></label>
                        <input type="tel"
                               name="customer_phone"
                               class="form-control rounded-pill py-3 px-4 @error('customer_phone') is-invalid @enderror"
                               placeholder=""
                               value="{{ old('customer_phone') }}"
                               required>
                        @error('customer_phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="mb-2 text-black fs-14 fw-medium">Delivery Area <span class="text-danger">*</span></label>
                        <select name="delivery_address"
                                class="form-select rounded-pill py-3 px-4 @error('delivery_address') is-invalid @enderror"
                                required>
                            <option value="" disabled selected>Select your area</option>
                            <option value="Okpanam" {{ old('delivery_address') == 'Okpanam' ? 'selected' : '' }}>Okpanam</option>
                            <option value="Infant Jesus Area" {{ old('delivery_address') == 'Infant Jesus Area' ? 'selected' : '' }}>Infant Jesus Area</option>
                            <option value="Anwai Road Area" {{ old('delivery_address') == 'Anwai Road Area' ? 'selected' : '' }}>Anwai Road Area</option>
                            <option value="DBS Road Area" {{ old('delivery_address') == 'DBS Road Area' ? 'selected' : '' }}>DBS Road Area</option>
                            <option value="Cable Point" {{ old('delivery_address') == 'Cable Point' ? 'selected' : '' }}>Cable Point</option>
                            <option value="Umueze" {{ old('delivery_address') == 'Umueze' ? 'selected' : '' }}>Umueze</option>
                            <option value="Umuonaje" {{ old('delivery_address') == 'Umuonaje' ? 'selected' : '' }}>Umuonaje</option>
                            <option value="Isieke" {{ old('delivery_address') == 'Isieke' ? 'selected' : '' }}>Isieke</option>
                            <option value="Overhead Bridge Layout" {{ old('delivery_address') == 'Overhead Bridge Layout' ? 'selected' : '' }}>Overhead Bridge Layout</option>
                        </select>
                        @error('delivery_address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label class="mb-2 text-black fs-14 fw-medium">Payment Method <span class="text-danger">*</span></label>
                        <select name="payment_method"
                                class="form-select rounded-pill py-3 px-4 @error('payment_method') is-invalid @enderror"
                                required>
                            <option value="" disabled selected>Choose payment method</option>
                            <option value="bank_transfer" {{ old('payment_method') == 'bank_transfer' ? 'selected' : '' }}>
                                <i class="fa-solid fa-building-columns"></i> Pay via Bank Transfer
                            </option>
                            <option value="cash_on_delivery" {{ old('payment_method') == 'cash_on_delivery' ? 'selected' : '' }}>
                                <i class="fa-solid fa-money-bill-wave"></i> Cash on Delivery
                            </option>
                        </select>
                        @error('payment_method')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-12 mt-4">
                    <button type="submit"
                            class="theme-btn text-center justify-content-center w-100 rounded-pill py-3 px-4 fw-medium">
                        <i class="fa-solid fa-check-circle me-2"></i> Place Order
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<style>
.form-control,
.form-select {
    border: 1px solid #e5e7eb;
    transition: all 0.3s ease;
}

.form-control:focus,
.form-select:focus {
    border-color: var(--theme3);
    box-shadow: 0 0 0 0.2rem rgba(var(--theme3-rgb), 0.15);
}

.form-select {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right 1rem center;
    background-size: 16px 12px;
}
</style>

                <!-- ORDER SUMMARY -->
                <div class="col-lg-4">
                    <div class="shadow-cus d-flex flex-column justify-content-between coupon-group position-relative h-100 p-xl-4 p-3 rounded-3 bg-white">
                        <div>
                            <h5 class="border-bottom pb-2 mb-3">Order Summary</h5>

                            @if(!empty($cart))
                                <div class="d-flex flex-column gap-3 align-items-center pb-4">
                                    @foreach($cart as $id => $item)
                                        <div class="order-summary d-flex justify-content-between w-100 gap-2">
                                            <div class="d-flex align-items-center gap-3">
                                                <img width="50" height="50"
                                                    src="{{ asset('storage/' . $item['image']) }}"
                                                    onerror="this.src='/template/assets/img/inner/shop-cart.jpg';"
                                                    class="border rounded-2" alt="{{ $item['name'] }}">
                                                <div>
                                                    <h5 class="text-black fs-13 lh-1 fw-500">{{ $item['name'] }}</h5>
                                                    <span class="fw-semibold theme-clr fs-13">₦{{ number_format($item['price'], 2) }}</span>
                                                </div>
                                            </div>
                                            <div class="fs-13">x{{ $item['quantity'] }}</div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="order-summary-footer">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 pb-1">
                                            <span class="fs-13 text-black fw-medium">Subtotal</span>
                                            <span class="fs-13 text-black fw-medium">₦{{ number_format($cartTotal['subtotal'], 2) }}</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between pb-2">
                                            <span class="fs-13 text-black fw-medium">Delivery Fee</span>
                                            <span class="fs-13 text-black fw-medium">₦{{ number_format($cartTotal['deliveryFee'], 2) }}</span>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 pb-3">
                                            <span class="fs-13 text-black fw-bold">Total</span>
                                            <span class="fs-13 theme-clr fw-bold">₦{{ number_format($cartTotal['total'], 2) }}</span>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <p class="text-center text-muted py-4">Your cart is empty.</p>
                            @endif
                        </div>
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
