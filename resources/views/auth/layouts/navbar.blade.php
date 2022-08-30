<nav class="navbar navbar-expand-lg fw-bold fs-4 fixed-top fixx py-2">
    <div class="container">
        <a class="navbar-brand bb" href="{{ url('home') }}">BB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse mynav" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 me-auto">
                <a class="nav-link {{ Request::is('') ? 'aktif': '' }}" aria-current="page" href="{{ url('/') }}" id="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('semuaproduk') ?  'aktif': '' }}" aria-current="page" href="{{ url('semuaproduk') }}">Produk</a>
                </li>
              
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('kontak') ?  'aktif': '' }}"href="{{ url('kontak') }}">Kontak</a>
                </li>
           
            </ul>
        


        </div>
    </div>
</nav>
