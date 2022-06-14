<nav class="navbar navbar-expand-lg fw-bold fs-4 fixed-top  py-2" >
  <div class="container">
    <a class="navbar-brand" href="#">BB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
    <div class="collapse navbar-collapse mynav" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0 ms-auto me-auto">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{ url('/') }}" id="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#produk">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">Contact</a>
        </li>
      </ul>
      <ul class="navbar-nav mb-2 mb-lg-0 ">
        @auth
        <li class="nav-item me-2">
          <a class="nav-link" href="{{ url('keranjang') }}"><i class="bi bi-cart2"></i></a>
        </li>
        <li class="nav-item me-3 dropdown "><a href="" class="btn btnproduk dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{ auth()->user()->name }}</a>
        <ul class="dropdown-menu down" aria-labelledby="navbarDropdown">
          <li>
            <a class="dropdown-item down" href="{{ url('dashboard') }}">Dashboard</a>
          </li>
          <li>
            <a class="dropdown-item down" href="{{ url('orderlist') }}">My Order</a>
          </li>
          <li>
            <form action="{{ url('logout') }}" method="POST">
            @csrf
            <button type="submit" href="{{ url('logout') }}" class="dropdown-item">Logout</button>
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