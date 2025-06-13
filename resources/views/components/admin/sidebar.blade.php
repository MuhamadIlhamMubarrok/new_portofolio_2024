<nav class="sidebar">
    <div class="sidebar-header">
        <a href="/">
            <img src="{{ asset('./assets/images/favicon.png') }}" class="w-50 h-40" alt="PT.AKM">
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Halaman</li>
            <li
                class="nav-item {{ request()->routeIs('certificate.*', 'client.*', 'projek.*', 'count.*', 'skill.*') ? 'active' : '' }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#home" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="grid"></i>
                    <span class="link-title">Self Maintenance</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ request()->routeIs('client.*', 'projek.*', 'count.*', 'certificate.*', 'skill.*', 'member.*', 'news.*') ? 'show' : '' }}"
                    id="home">
                    <ul class="nav sub-menu">
                        <li class="nav-item ">
                            <a href="{{ route('client.index') }}"
                                class="nav-link {{ request()->routeIs('client.*') ? 'active' : '' }}">Client</a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('projek.index') }}"
                                class="nav-link {{ request()->routeIs('projek.*') ? 'active' : '' }}">Project</a>
                        </li>

                        <li class="nav-item ">
                            <a href="{{ route('count.index') }}"
                                class="nav-link {{ request()->routeIs('count.*') ? 'active' : '' }}">Count</a>
                        </li>

                        <li class="nav-item ">
                            <a href="{{ route('certificate.index') }}"
                                class="nav-link {{ request()->routeIs('certificate.*') ? 'active' : '' }}">Certificate</a>
                        </li>

                        <li class="nav-item ">
                            <a href="{{ route('skill.index') }}"
                                class="nav-link {{ request()->routeIs('skill.*') ? 'active' : '' }}">Skill</a>
                        </li>

                        <li class="nav-item ">
                            <a href="{{ route('member.index') }}"
                                class="nav-link {{ request()->routeIs('member.*') ? 'active' : '' }}">Member</a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('news.index') }}"
                                class="nav-link {{ request()->routeIs('news.*') ? 'active' : '' }}">news</a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('dashboard.message') }}"
                                class="nav-link {{ request()->routeIs('dashboard.message.*') ? 'active' : '' }}">Messages</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
