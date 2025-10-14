<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="{{ route('index') }}" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="/admin/assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="/admin/assets/images/mylogo.png" alt="" height="17">
                        </span>
                    </a>

                    <a href="{{ route('index') }}" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="/admin/assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="/admin/assets/images/mylogo.png" alt="" height="17">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                    id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
            </div>

            <div class="d-flex align-items-center">
                <!-- Light/Dark Mode Toggle -->
                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button"
                        class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                        <i class='bx bx-moon fs-22'></i>
                    </button>
                </div>

                <!-- User Dropdown -->
                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user"
                                src="/admin/assets/images/users/user.png"
                                alt="Admin Avatar">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">
                                    {{ session('admin_username', 'Admin') }}
                                </span>
                                <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">Administrator</span>
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <h6 class="dropdown-header">Welcome {{ session('admin_username', 'Admin') }}!</h6>

                        <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                            <i class="mdi mdi-view-dashboard text-muted fs-16 align-middle me-1"></i>
                            <span class="align-middle">Dashboard</span>
                        </a>

                        <a class="dropdown-item" href="{{ route('index') }}" target="_blank">
                            <i class="mdi mdi-storefront text-muted fs-16 align-middle me-1"></i>
                            <span class="align-middle">View Store</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="{{ route('admin.logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i>
                            <span class="align-middle">Logout</span>
                        </a>

                        <form id="logout-form" action="{{ route('admin.logout') }}" method="GET" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
