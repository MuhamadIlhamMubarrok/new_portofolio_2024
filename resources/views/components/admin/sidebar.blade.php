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
            <li class="nav-item {{ request()->routeIs('admin.dashboard.index')? 'active' : '' }}">
                <a href="{{ route('admin.dashboard.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Pages</li>
            <li class="nav-item {{ request()->routeIs('admin.hero.*')? 'active' : '' }}">
                <a href="{{ route('admin.hero.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Hero</span>
                </a>
            </li>
    </div>
</nav>
