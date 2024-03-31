<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('assets/images/favicon.png') }}" class="img-fluid">
            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2">Control Panel</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item {{ $pages === 'Dashboard' ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Basic">Beranda</div>
            </a>
        </li>
        <li class="menu-item {{ $pages === 'Kota' ? 'active' : '' }}">
            <a href="" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-city"></i>
                <div data-i18n="Basic">Daftar Kota</div>
            </a>
        </li>
        <li class="menu-item {{ $pages === 'Agent' ? 'active' : '' }}">
            <a href="{{ route('agent') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user-detail"></i>
                <div data-i18n="Basic">Agent</div>
            </a>
        </li>
        <li class="menu-item {{ $pages === 'Property' ? 'active' : '' }}">
            <a href="" class="menu-link">
                <i class="menu-icon tf-icons bx bx-buildings"></i>
                <div data-i18n="Basic">Property</div>
            </a>
        </li>
        <li class="menu-item {{ $pages === 'Kontak Masuk' ? 'active' : '' }}">
            <a href="{{ route('kontak-masuk') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-chat"></i>
                <div data-i18n="Basic">Kontak Masuk</div>
            </a>
        </li>
        <li class="menu-item {{ $pages === 'Ulasan' ? 'active' : '' }}">
            <a href="{{ route('ulasan') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-conversation"></i>
                <div data-i18n="Basic">Ulasan</div>
            </a>
        </li>
        <li class="menu-item {{ $master === 'Pengaturan Website' ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Pengaturan Website">Pengaturan Website</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ $pages === 'Whatsapp' ? 'active' : '' }}">
                    <a href="" class="menu-link">
                        <div data-i18n="Whatsapp">Whatsapp</div>
                    </a>
                </li>
                <li class="menu-item {{ $pages === 'Pengaturan Umum' ? 'active' : '' }}">
                    <a href="" class="menu-link">
                        <div data-i18n="Pengaturan Umum">Pengaturan Umum</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
