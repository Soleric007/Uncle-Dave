<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ route('admin.dashboard') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="/template/assets/img/logo/fav-icon.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="/template/assets/img/logo/logowhite.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ route('admin.dashboard') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="/template/assets/img/logo/fav-icon.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="/template/assets/img/logo/logowhite.png" alt="" height="17">
            </span>
        </a>
        <button type="button" class="p-0 btn btn-sm fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>

            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                <!-- Dashboard -->
                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
                       href="{{ route('admin.dashboard') }}">
                        <i class="ri-dashboard-2-line"></i>
                        <span data-key="t-dashboards">Dashboard</span>
                    </a>
                </li>

                <!-- Orders -->
                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('admin.orders.*') ? 'active' : '' }}"
                       href="{{ route('admin.orders.index') }}">
                        <i class="ri-shopping-bag-line"></i>
                        <span data-key="t-orders">Orders</span>
                        @php
                            $pendingCount = \App\Models\Order::where('order_status', 'pending')->count();
                        @endphp
                        @if($pendingCount > 0)
                            <span class="badge bg-danger rounded-pill ms-auto">{{ $pendingCount }}</span>
                        @endif
                    </a>
                </li>

                <!-- Food Items -->
                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('admin.food-items.index') || request()->routeIs('admin.food-items.edit') ? 'active' : '' }}"
                       href="{{ route('admin.food-items.index') }}">
                        <i class="ri-restaurant-line"></i>
                        <span data-key="t-food-items">Food Items</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('admin.food-items.create') ? 'active' : '' }}"
                       href="{{ route('admin.food-items.create') }}">
                        <i class="ri-add-circle-line"></i>
                        <span data-key="t-add-food">Add Food Item</span>
                    </a>
                </li>

                <!-- Categories -->
                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('admin.categories.index') || request()->routeIs('admin.categories.edit') ? 'active' : '' }}"
                       href="{{ route('admin.categories.index') }}">
                        <i class="ri-folder-line"></i>
                        <span data-key="t-categories">Categories</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('admin.categories.create') ? 'active' : '' }}"
                       href="{{ route('admin.categories.create') }}">
                        <i class="ri-add-circle-line"></i>
                        <span data-key="t-add-category">Add Category</span>
                    </a>
                </li>

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Other</span></li>

                <!-- View Store -->
                <li class="nav-item">
                    <a class="nav-link menu-link"
                       href="{{ route('index') }}"
                       target="_blank">
                        <i class="ri-store-2-line"></i>
                        <span data-key="t-store">View Store</span>
                        <i class="ri-external-link-line ms-auto"></i>
                    </a>
                </li>

                <!-- Order Tracking -->
                <li class="nav-item">
                    <a class="nav-link menu-link"
                       href="{{ route('order.tracking') }}"
                       target="_blank">
                        <i class="ri-map-pin-line"></i>
                        <span data-key="t-tracking">Track Order</span>
                        <i class="ri-external-link-line ms-auto"></i>
                    </a>
                </li>

                <!-- Logout -->
                <li class="nav-item">
                    <a class="nav-link menu-link text-danger"
                       href="{{ route('admin.logout') }}"
                       onclick="event.preventDefault(); document.getElementById('sidebar-logout-form').submit();">
                        <i class="ri-logout-box-line"></i>
                        <span data-key="t-logout">Logout</span>
                    </a>
                    <form id="sidebar-logout-form" action="{{ route('admin.logout') }}" method="GET" style="display: none;">
                        @csrf
                    </form>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>

