<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Uncle Davids Cousine">
    <meta name="description" content="Order delicious Nigerian meals online – soups, rice, pasta, and platters freshly prepared and delivered to your doorstep.">
    <meta name="keywords" content="food delivery, Nigerian meals, order food online, egusi soup, jollof rice, Uncle Dave restaurant, Delta food delivery, Asaba food delivery">
    <title>Uncle Dave - Track Your Orders</title>
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

    <!-- Hero section start -->
       <section class="breadcrumb-section position-relative fix bg-cover"
        style="background-image: url(/template/assets/img/hero/breadcrumb-banner.jpg);">
        <div class="container">
            <div class="breadcrumb-content">
                <h3 class="white-clr fs-1 fw-semibold text-center heading-font mb-2">
                    Track your Order
                </h3>
                <p class="fs-16 text-white text-center mb-xxl-4 mb-3">
                    Get real-time updates on your delivery status
                </p>
                <div
                    class="search-adjust1 bg-white rounded-pill d-flex align-items-center justify-content-between gap-2 max-w-750 mx-auto p-2 mb-md-5 mb-4">
                    <form action="#" class="gap-2 d-flex align-items-center bg-white rounded-pill ps-4">
                        <input class="fs-14 w-100 py-2 px-2 border-0" type="text"
                            placeholder="Enter your Order Number or Phone Number">
                    </form>
                    <div class="d-flex align-items-center gap-xl-4 gap-3">

                        <button type="submit"
                            class="theme-btn py-2 px-3 fw-500 text-capitalize d-center gap-2 rounded-pill">
                            <i class="fa-solid fa-magnifying-glass fs-14"></i> <span
                                class="d-sm-block text-capitalize d-none fs-16 fw-semibold text-white">Search</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <img src="/template/assets/img/home-1/home-shape-start.png" alt="img" class="bread-shape-start position-absolute">
        <img src="/template/assets/img/home-1/home-shape-end.png" alt="img"
            class="bread-shape-end position-absolute d-sm-block d-none">
    </section>

    <!-- Tracking order start -->
    <section class="reservation-section fix section-padding position-relative">
        <div class="container">
            @if(isset($order))
            <div class="shadow-cus p-lg-5 p-sm-4 p-3">
                <div class="d-flex justify-content-between flex-wrap gap-2 mb-xxl-5 mb-xl-4 mb-3">
                    <div>
                        <h4 class="text-black mb-1 lh-1">Order #{{ $order->order_number }}</h4>
                        <span class="text-clr fs-16">Placed on: {{ $order->created_at->format('h:i a, F d, Y') }}</span>
                    </div>
                    <div>
                        <h4 class="text-black mb-1 lh-1 fs-20">Payment Status</h4>
                        <span class="badge bg-{{ $order->payment_status == 'confirmed' ? 'success' : 'warning' }}">
                            {{ ucfirst($order->payment_status) }}
                        </span>
                    </div>
                </div>

                <!-- Progress -->
                @php
                    $statusSteps = ['placed','confirmed','preparing','ready','on_the_way','delivered'];
                    $currentStatusIndex = array_search($order->frontend_status, $statusSteps);
                    $progress = $currentStatusIndex !== false ? (($currentStatusIndex + 1) / count($statusSteps) * 100) : 0;
                @endphp

                <div class="progress-area mb-xxl-5 mb-xl-4 mb-3">
                    <div class="d-flex align-items-end justify-content-between gap-2 mb-2">
                        <h4 class="text-black fw-500 text-capitalize">Delivery Progress</h4>
                        <h4 class="text-black fw-500 text-capitalize">{{ round($progress) }}%</h4>
                    </div>
                    <div class="progress" style="height: 8px;">
                        <div class="progress-bar bg-success" style="width: {{ $progress }}%;" role="progressbar"></div>
                    </div>
                </div>

                <!-- Current Status -->
                <div class="d-flex align-items-center gap-2 bg-gray-10 rounded py-2 px-3 mb-40">
                    <img src="/template/assets/img/icons/pre-icon.png" alt="img">
                    <div>
                        <h6 class="fw-500 text-black lh-1 text-capitalize">{{ ucfirst(str_replace('_',' ',$order->frontend_status)) }}</h6>
                        <span class="fs-14 text-clr">
                            @switch($order->frontend_status)
                                @case('placed') Your order has been received and is awaiting confirmation. @break
                                @case('confirmed') Your order has been confirmed and payment verified. @break
                                @case('preparing') The kitchen is preparing your delicious meal. @break
                                @case('ready') Your order is ready for pickup by our delivery partner. @break
                                @case('on_the_way') Your order is on the way to you! @break
                                @case('delivered') Your order has been delivered successfully. Enjoy! @break
                                @default Processing your order.
                            @endswitch
                        </span>
                    </div>
                </div>

                <!-- Timeline -->
                <h4 class="text-black mb-lg-4 mb-sm-3 mb-2">Order Timeline</h4>
                <ul class="preparetion-traking">
                    @foreach($statusSteps as $index => $step)
                    <li class="d-flex position-relative gap-xxl-4 gap-xl-3 gap-2 {{ $index <= $currentStatusIndex ? 'active' : '' }}">
                        <i class="fa-solid fa-circle fs-20 text-clr"></i>
                        <div>
                            <h5 class="fw-500 fs-20 text-black mb-2 lh-1 text-capitalize">{{ str_replace('_',' ',$step) }}</h5>
                            <p class="fs-14 text-clr mb-1 lh-1">
                                @if($step === 'placed')
                                    @if($order->created_at)
                                        {{ $order->created_at->format('M d, Y h:i A') }}
                                    @else
                                        Pending
                                    @endif
                                @elseif($step === 'confirmed')
                                    @if($order->payment_confirmed_at)
                                        {{ $order->payment_confirmed_at->format('M d, Y h:i A') }}
                                    @else
                                        Waiting for confirmation
                                    @endif
                                @elseif($step === 'preparing')
                                    @if($order->cooking_started_at)
                                        {{ $order->cooking_started_at->format('M d, Y h:i A') }}
                                    @else
                                        Not started yet
                                    @endif
                                @elseif($step === 'ready')
                                    @if($order->ready_at)
                                        {{ $order->ready_at->format('M d, Y h:i A') }}
                                    @else
                                        Not ready yet
                                    @endif
                                @elseif($step === 'on_the_way')
                                    @if($order->out_for_delivery_at)
                                        {{ $order->out_for_delivery_at->format('M d, Y h:i A') }}
                                    @else
                                        Not dispatched yet
                                    @endif
                                @elseif($step === 'delivered')
                                    @if($order->delivered_at)
                                        {{ $order->delivered_at->format('M d, Y h:i A') }}
                                    @else
                                        Not delivered yet
                                    @endif
                                @endif
                            </p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Order Summary -->
            <div class="shadow-cus mt-5 p-lg-5 p-sm-4 p-3">
                <ul class="d-flex flex-column gap-xl-3 gap-2">
                    <li class="d-flex align-items-center justify-content-between fs-16 fw-semibold text-black">
                        Order ID: <span>{{ $order->order_number }}</span>
                    </li>
                    <li class="d-flex align-items-center justify-content-between fs-16 fw-semibold text-black">
                        Customer: <span class="text-clr">{{ $order->customer_name }}</span>
                    </li>
                    <li class="d-flex align-items-center justify-content-between fs-16 fw-semibold text-black">
                        Payment: <span class="text-clr">{{ ucfirst($order->payment_method) }}</span>
                    </li>
                    <li class="d-flex align-items-center justify-content-between fs-16 fw-semibold text-black">
                        Delivery Address: <span class="text-clr">{{ $order->delivery_address }}</span>
                    </li>
                </ul>
                <div class="border-bottom my-xl-5 my-4"></div>

                <!-- Items -->
                <ul class="d-flex flex-column gap-xl-3 gap-2">
                    <li class="d-flex align-items-center justify-content-between fs-20 fw-semibold text-black">
                        Items:
                    </li>
                    @foreach($order->orderItems as $item)
                    <li class="d-flex flex-wrap gap-1 align-items-center justify-content-between fs-16 fw-semibold text-black">
                        <div class="d-flex gap-2">
                            @if($item->foodItem && $item->foodItem->image)
                            <img width="40" height="40" src="{{ asset('storage/'.$item->foodItem->image) }}" class="rounded-circle" alt="{{ $item->food_name }}">
                            @else
                            <div class="bg-secondary rounded-circle" style="width: 40px; height: 40px;"></div>
                            @endif
                            <div>
                                <span class="fs-16 fw-semibold text-black mb-1">{{ $item->food_name }}</span>
                                <span class="fs-14 text-black fw-normal d-block">({{ $item->quantity }} × ₦{{ number_format($item->price, 2) }})</span>
                            </div>
                        </div>
                        <span>₦{{ number_format($item->quantity * $item->price, 2) }}</span>
                    </li>
                    @endforeach
                </ul>

                <div class="border-bottom my-xl-5 my-4"></div>

                <!-- Totals -->
                <ul class="d-flex flex-column gap-xl-3 gap-2">
                    <li class="d-flex align-items-center justify-content-between fs-16 fw-semibold text-black">
                        Subtotal: <span>₦{{ number_format($order->subtotal, 2) }}</span>
                    </li>
                    <li class="d-flex align-items-center justify-content-between fs-16 fw-semibold text-black">
                        Delivery Fee: <span>₦{{ number_format($order->delivery_fee, 2) }}</span>
                    </li>
                    <li class="d-flex align-items-center justify-content-between fs-20 fw-bold text-black border-top pt-3">
                        Total: <span class="text-success">₦{{ number_format($order->total, 2) }}</span>
                    </li>
                </ul>
            </div>

            @else
            <div class="text-center p-5">
                <div class="mb-4">
                    <i class="fa-solid fa-search fs-1 text-muted"></i>
                </div>
                <h4>Track Your Order</h4>
                <p class="text-muted">Enter your order number above to track your delicious meal!</p>
            </div>
            @endif
        </div>
    </section>

    <!-- Footer section start -->
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
</body>
</html>
