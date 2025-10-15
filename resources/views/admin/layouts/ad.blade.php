<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Uncle David's Cuisine - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="/admin/assets/images/fav-icon.ico">
    <link href="/admin/assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
    <script src="/admin/assets/js/layout.js"></script>
    <link href="/admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>

</style>
</head>

<body>
    <div id="layout-wrapper">
        @include('admin.sections.header')
        @include('admin.sections.sidebar')
        <div class="vertical-overlay"></div>

        @yield('content')

    </div>

    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>

    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="p-2 shadow-lg btn-info rounded-pill btn btn-icon btn-lg" data-bs-toggle="offcanvas"
            data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- Theme Settings (keeping it short for brevity - include full content from your original) -->
    <div class="border-0 offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas">
        <!-- Your full theme settings code here -->
    </div>

    <script src="/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/admin/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/admin/assets/libs/node-waves/waves.min.js"></script>
    <script src="/admin/assets/libs/feather-icons/feather.min.js"></script>
    <script src="/admin/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="/admin/assets/js/plugins.js"></script>
    <script src="/admin/assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="/admin/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="/admin/assets/libs/jsvectormap/maps/world-merc.js"></script>
    <script src="/admin/assets/libs/swiper/swiper-bundle.min.js"></script>
    <script src="/admin/assets/js/pages/dashboard-ecommerce.init.js"></script>
    <script src="/admin/assets/js/app.js"></script>
    <script type="text/javascript">
        function confirmation(e) {
            var urlToredirect = e.currentTarget.getAttribute('href');
            swal({
                    title: "Are you sure to remove this product",
                    text: "You will not be able to revert this!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willcancel) => {
                    if (willcancel) {
                        window.location.href = urlToredirect;
                    }
                });
        }
    </script>



</body>
</html>
