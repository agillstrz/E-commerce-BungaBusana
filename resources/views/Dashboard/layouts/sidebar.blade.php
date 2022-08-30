<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="logo text-center  ">
        <h1>Bunga Busana</h1>
    </div>
    <hr>
    <div class="position-sticky">
        <ul class="nav flex-column">
            <li class="nav-item sidehov">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"
                    href="{{ url('dashboard') }}">
                    <i class="fa-solid fa-house"></i> Dashboard
                </a>
            </li>
            <li class="nav-item sidehov">
                <a class="nav-link {{ Request::is('categories') ? 'active' : '' }}" aria-current="page"
                    href="{{ url('categories') }}">
                    <i class="fa-solid fa-boxes-packing"></i> Kategori
                </a>
            </li>
            <li class="nav-item sidehov">
                <a class="nav-link {{ Request::is('produk') ? 'active' : '' }}" aria-current="page"
                    href="{{ url('produk') }}">
                    <i class="fa-solid fa-suitcase-rolling"></i> Produk
                </a>
            </li>

            <li class="nav-item sidehov">
                <a class="nav-link {{ Request::is('orders' ) ? 'active' : '' }}" aria-current="page"
                    href="{{ url('orders') }}">
                    <i class="fa-solid fa-cart-arrow-down"></i> Daftar Pesanan<span class="badge pesananbaru rounded-circle"></span>
                </a>
            </li>
            <li class="nav-item sidehov">
                <a class="nav-link {{ Request::is('user-list') ? 'active' : '' }}" aria-current="page"
                    href="{{ url('user-list') }}">
                    <i class="fa-solid fa-user"></i> Pengguna
                </a>
            </li>




        </ul>
    </div>
</nav>
