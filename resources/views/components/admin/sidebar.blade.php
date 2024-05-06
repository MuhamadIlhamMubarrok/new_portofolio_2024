<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{ route('admin.dashboard.index') }}">
            <img src="#" alt="KKRA">
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ route('admin.dashboard.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('admin.dashboard.hero.*') ? 'active' : '' }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#pages" role="button" aria-expanded="false"
                    aria-controls="pages">
                    <i class="link-icon" data-feather="grid"></i>
                    <span class="link-title">Pages</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ request()->routeIs('admin.dashboard.hero.*') ? 'show' : '' }}" id="pages">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ request()->routeIs('admin.dashboard.hero.*') ? 'active' : '' }}">Hero</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Banner</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
