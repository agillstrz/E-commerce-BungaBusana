<nav class="navbar navbar-expand-lg fw-bold fs-4 fixed-top fixx py-2">
    <div class="container">
        <a class="navbar-brand bb" href="{{ url('/') }}">BB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa-solid togle fa-bars"></i></span>
        </button>

        <div class="collapse navbar-collapse mynav" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 me-auto">
                <li class="nav-item">
                <a class="nav-link {{ Request::is('home') ? 'aktif': '' }}" aria-current="page" href="{{ url('/home') }}" id="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('semuaproduk') ?  'aktif': '' }}" aria-current="page" href="{{ url('semuaproduk') }}">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('kategori') ?  'aktif': '' }}" aria-current="page" href="{{ url('kategori') }}">Kategori</a>
                </li>
              
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('kontak') ?  'aktif': '' }}"href="{{ url('kontak') }}">Kontak</a>
                </li>
           
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0 ">
                <li class="nav-item ">
                    <form action="{{ url('semuaproduk') }}" method="GET" class="d-flex">
                    <input type="search" name="cari" class="form-control w-75" value="{{ request('cari') }}" placeholder="...">
                    <button type="submit" class="btn ms-1 btnproduk pencarian">Cari</button>
                    </form>
                </li>
                @auth
                    <li class="nav-item me-4">
                            <a class="nav-link " href="{{ url('keranjang') }}">
                                
                                <i class="fa-solid fa-cart-arrow-down"></i>
                            <span class="badge rounded-circle cart-count" style="font-size: 10px">0</span>

                        </a>
                    </li>
                    <li class="nav-item me-3 dropdown "><a href="" class="btn btnproduk dropdown-toggle "
                            id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->username }}</a>
                        <ul class="dropdown-menu down" aria-labelledby="navbarDropdown">

                            @if(auth()->user()->role_as=='1')
                            <li>
                                <a class="dropdown-item down " href="{{ url('dashboard') }}">Dashboard</a>
                            </li>
                            @endif
                            <li>
                                <a class="dropdown-item down " href="{{ url('orderlist') }}">Pesanan saya</a>
                            </li>
                            <li>

                                <form action="{{ url('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" href="{{ url('logout') }}"
                                        class="dropdown-item">Logout</button>
                                </form>
                            </li>

                        </ul>
                    </li>
                @else
                    <li class="nav-item me-3"><a href="{{ url('login') }}" class="btn btnproduk">Login</a></li>
                @endauth
            </ul>


        </div>
    </div>
</nav>
