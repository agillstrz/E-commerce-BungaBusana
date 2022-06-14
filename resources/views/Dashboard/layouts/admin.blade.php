<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Bunga Busana</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/bb6b15c5b9.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('style/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('js/rupiah.js') }}">
  </head>
  <body>
<div class="container-fluid">
  <div class="row">
    
@include('Dashboard.layouts.sidebar')
  
    
    <div class="dropdown border-top" >
      <a href="#" class="align-items-center d-flex profil  p-3 link-dark text-decoration-none dropdown-toggle  id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png " alt="mdo" width="50" height="50" class="rounded-circle">
        <h5 class="ms-2">{{ auth()->user()->name  }}</h5>
      </a>
      <ul class="dropdown-menu dropdown-menu-end text-small shadow" aria-labelledby="dropdownUser3">
        <li><a class="dropdown-item" href="{{ url('') }}">Home</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="{{ route('logout') }}"
         onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
     <span data-feather="log-out"></span> </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
      </form></li></li>
      </ul>
    </div> 
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="margin-top: 60px" >

      <section>
       @yield('conten')
      </section>
    
  </main>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if (session('status'))
    <script>
      swal("{{ session('status') }}");
    </script>
@endif
    <script>
      feather.replace()
    </script>
     
  </body>
</html>
