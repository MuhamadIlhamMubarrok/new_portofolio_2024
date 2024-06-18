<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{ route('admin.dashboard.index') }}">
            <img src="{{ asset('./assets/images/logo.png') }}" class="w-50 h-40" alt="PT.AKM">
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item {{ request()->routeIs('admin.dashboard.index') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Halaman</li>
            <li
                class="nav-item {{ request()->routeIs('admin.banner.*', 'admin.client.*', 'admin.projek.*', 'admin.subGambar.*', 'admin.testimony.*', 'admin.count.*') ? 'active' : '' }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#home" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="grid"></i>
                    <span class="link-title">Self Maintenance</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ request()->routeIs('admin.banner.*', 'admin.client.*', 'admin.projek.*', 'admin.subGambar.*', 'admin.testimony.*', 'admin.count.*') ? 'show' : '' }}"
                    id="home">
                    <ul class="nav sub-menu">

                        <li class="nav-item {{ request()->routeIs('admin.banner.*') ? 'active' : '' }}">
                            <a href="{{ route('admin.banner.index') }}" class="nav-link">Banner</a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('admin.client.index') }}"
                                class="nav-link {{ request()->routeIs('admin.client.*') ? 'active' : '' }}">Client</a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('admin.projek.index') }}"
                                class="nav-link {{ request()->routeIs('admin.projek.*') ? 'active' : '' }}">Project</a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('admin.subGambar.index') }}"
                                class="nav-link {{ request()->routeIs('admin.subGambar.*') ? 'active' : '' }}">Sub
                                Gamabar Project</a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('admin.count.index') }}"
                                class="nav-link {{ request()->routeIs('admin.count.*') ? 'active' : '' }}">Count</a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('admin.testimony.index') }}"
                                class="nav-link {{ request()->routeIs('admin.testimony.*') ? 'active' : '' }}">Self
                                Comment</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item {{ request()->routeIs('admin.message.*') ? 'active' : '' }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#message" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="grid"></i>
                    <span class="link-title">Message</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ request()->routeIs('admin.message.*') ? 'show' : '' }}" id="message">
                    <ul class="nav sub-menu">
                        <li class="nav-item {{ request()->routeIs('admin.message.*') ? 'active' : '' }}">
                            <a href="{{ route('admin.message.index') }}" class="nav-link">Message</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
