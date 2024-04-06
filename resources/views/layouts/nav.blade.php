<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-menu-trigger">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
        <div class="nk-sidebar-brand">
            <a href="html/hotel/index.html" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
            </a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="html/hotel/index.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                            <span class="nk-menu-text">Sales</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('sales.index') }}" class="nk-menu-link"><span class="nk-menu-text">All Sales</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('sales.create') }}" class="nk-menu-link"><span class="nk-menu-text">New Sale</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('sales.returns') }}" class="nk-menu-link"><span class="nk-menu-text">Returns</span></a>
                            </li>
                        </ul>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-home-fill"></em></span>
                            <span class="nk-menu-text">Purchases</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('purchases.index') }}" class="nk-menu-link"><span class="nk-menu-text">All Purchases</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('purchases.create') }}" class="nk-menu-link"><span class="nk-menu-text">New Purchase</span></a>
                            </li>
                        </ul>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                            <span class="nk-menu-text">Suppliers</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('suppliers.index') }}" class="nk-menu-link"><span class="nk-menu-text">All Suppliers</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('suppliers.create') }}" class="nk-menu-link"><span class="nk-menu-text">Expenses</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('suppliers.index') }}" class="nk-menu-link"><span class="nk-menu-text">Booking</span></a>
                            </li>
                        </ul>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                            <span class="nk-menu-text">Customers</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('customers.index') }}" class="nk-menu-link"><span class="nk-menu-text">All Customers</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('customers.index') }}" class="nk-menu-link"><span class="nk-menu-text">Invocie List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('customers.index') }}" class="nk-menu-link"><span class="nk-menu-text">Invocie Details</span></a>
                            </li>
                        </ul>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-layers-fill"></em></span>
                            <span class="nk-menu-text">Inventory</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('inventory.index') }}" class="nk-menu-link"><span class="nk-menu-text">Products</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('inventory.index') }}" class="nk-menu-link"><span class="nk-menu-text">Categories</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('inventory.index') }}" class="nk-menu-link"><span class="nk-menu-text">History</span></a>
                            </li>
                        </ul>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-reports"></em></span>
                            <span class="nk-menu-text">Reports</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('reports.index') }}" class="nk-menu-link"><span class="nk-menu-text">Products</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('reports.index') }}" class="nk-menu-link"><span class="nk-menu-text">Categories</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('reports.index') }}" class="nk-menu-link"><span class="nk-menu-text">Invocie Details</span></a>
                            </li>
                        </ul>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.settings') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting-alt-fill"></em></span>
                            <span class="nk-menu-text">Settings</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">ADMINISTRATION</h6>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.support') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-chat-circle-fill"></em></span>
                            <span class="nk-menu-text">Support</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.settings') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting-alt-fill"></em></span>
                            <span class="nk-menu-text">Settings</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>