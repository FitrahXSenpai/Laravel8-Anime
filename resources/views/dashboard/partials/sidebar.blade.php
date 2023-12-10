<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="container-fluid">
        <div class="position-sticky pt-3 mt-3 sidebar-sticky">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard"><i class="bi bi-house" style="font-size: 20px;"></i> <span>Dashboard</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/daftar-anime*') ? 'active' : '' }}" href="/dashboard/daftar-anime"><i class="bi bi-file-earmark-fill" style="font-size: 20px;"></i> <span>Daftar Anime</span></a>
                </li>
            </ul>
            
            @can('admin')
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Administrator</span>
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" aria-current="page" href="/dashboard/categories"><i class="bi bi-ui-checks-grid" style="font-size: 20px;"></i> <span>Daftar Categories</span></a>
                    </li>
                </ul>
            @endcan
            
        </div>
    </div>
</nav>