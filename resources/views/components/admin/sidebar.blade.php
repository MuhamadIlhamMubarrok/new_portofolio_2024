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
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item {{ request()->routeIs('admin.dashboard.index') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Halaman</li>
            <li class="nav-item {{ request()->routeIs('admin.hero.*') ? 'active' : '' }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#home" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="grid"></i>
                    <span class="link-title">Home</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ request()->routeIs('admin.hero.*') ? 'show' : '' }}" id="home">
                    <ul class="nav sub-menu">
                        <li class="nav-item {{ request()->routeIs('admin.hero.*') ? 'active' : '' }}">
                            <a href="{{ route('admin.hero.index') }}" class="nav-link">Hero</a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('admin.banner.*') ? 'active' : '' }}">
                            <a href="{{ route('admin.banner.index') }}" class="nav-link">Banner</a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('admin.profile.*') ? 'active' : '' }}">
                            <a href="{{ route('admin.profile.index') }}" class="nav-link">Profil</a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('admin.sumber-data.*') ? 'active' : '' }}">
                            <a href="{{ route('admin.sumber-data.index') }}" class="nav-link">Sumber Data</a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('admin.galeri.*') ? 'active' : '' }}">
                            <a href="{{ route('admin.galeri.index') }}" class="nav-link">Gallery</a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('admin.testimony.*') ? 'active' : '' }}">
                            <a href="{{ route('admin.testimony.index') }}" class="nav-link">Testimony</a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('admin.pengurus.*') ? 'active' : '' }}">
                            <a href="{{ route('admin.pengurus.index') }}" class="nav-link">Pengurus</a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('admin.media-informasi.*') ? 'active' : '' }}">
                            <a href="{{ route('admin.media-informasi.index') }}" class="nav-link">Media Informasi</a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('admin.contact.*') ? 'active' : '' }}">
                            <a href="{{ route('admin.contact.index') }}" class="nav-link">Kontak</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item {{ request()->routeIs('admin.artikel.*') ? 'active' : '' }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#artikel" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="grid"></i>
                    <span class="link-title">Artikel</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ request()->routeIs('admin.artikel.*') ? 'show' : '' }}" id="artikel">
                    <ul class="nav sub-menu">
                        <li class="nav-item {{ request()->routeIs('admin.artikel.*') ? 'active' : '' }}">
                            <a href="{{ route('admin.artikel.index') }}" class="nav-link">Artikel</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item {{ request()->routeIs('admin.pedoman.*') ? 'active' : '' }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#pedoman" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="grid"></i>
                    <span class="link-title">Dokumen</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ request()->routeIs('admin.pedoman.*') ? 'show' : '' }}" id="pedoman">
                    <ul class="nav sub-menu">
                        <li class="nav-item {{ request()->routeIs('admin.article.*') ? 'active' : '' }}">
                            <a href="{{ route('admin.pedoman.index') }}" class="nav-link">Pedoman</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item {{ request()->routeIs('admin.sertifikat.*') ? 'active' : '' }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#sertifikat" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="grid"></i>
                    <span class="link-title">Sertifikat</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ request()->routeIs('admin.sertifikat.*') ? 'show' : '' }}" id="sertifikat">
                    <ul class="nav sub-menu">
                        <li class="nav-item {{ request()->routeIs('admin.article.*') ? 'active' : '' }}">
                            <a href="{{ route('admin.sertifikat.index') }}" class="nav-link">Sertifikat</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
