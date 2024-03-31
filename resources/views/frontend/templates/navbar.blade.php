<nav class="site-nav">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <a href="{{ route('/') }}" class="logo m-0 float-start">Ladang Padi Resor</a>

                <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                    <li class="{{ $pages === 'Home' ? 'active' : '' }}"><a href="{{ route('/') }}">Beranda</a></li>
                    <li class="{{ $pages === 'Properties' ? 'active' : '' }}"><a
                            href="{{ route('properties') }}">Properti</a></li>
                    <li class="{{ $pages === 'Agent' ? 'active' : '' }}"><a href="{{ route('agent') }}">Agen</a></li>
                    <li class="{{ $pages === 'Contact' ? 'active' : '' }}"><a href="{{ route('contact') }}">Kontak
                            Kami</a></li>
                </ul>

                <a href="#"
                    class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
                    data-toggle="collapse" data-target="#main-navbar">
                    <span></span>
                </a>
            </div>
        </div>
    </div>
</nav>
