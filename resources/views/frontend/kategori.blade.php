@extends('frontend.index')

@section('conten')

<div class="container" style="margin-top: 100px;">

    <form class="form-inline d-flex justify-content-center md-form form-sm active-pink-2 mt-2">
      <input class="form-control form-control-sm p-2 w-75 text-center" type="text" placeholder="Cari Produk..."
        aria-label="Search">
        <i class="bi bi-search mt-2 ms-2"></i>
    </form>
      <!-- Padding -->
  <h1 class="text-center mt-2 p-4 text-capitalize fw-bold" style="color: #333333;">{{ $category->name }}</h1>

  <div class="row">
      @foreach ($produk as $prod)
          
      <div class="col-md-3 mb-3 ">
        <div class="card">
          <div class="figure">
          
           <a href="{{ url('kategori/'.$category->name.'/'.$prod->slug) }}">
             <img class="img-fluid" src="{{ asset('assets/uploads/produk/'.$prod->image) }}" alt="Demo image 1" >
            </a>
            <div class="card-body  text-center fw-bold" style="background-color: #D4ECE5;">
              
              <p class="card-title">{{ $prod->name }}</p>
              <p class="card-title">{{"Rp. ".number_format( $prod->harga_jual,0,"",".") }}</p>
            </div>

            <div class="produk text-center">
              
              <a href="" class="btn btnpro ">Keranjang<i class="bi bi-cart-plus"></i></a>
              <a href="{{ url('kategori/'.$category->name.'/'.$prod->slug) }}" class="btn btnpro">Lihat<i class="bi bi-binoculars"></i></a>
            </div>
           
          </div>
        </div>
      </div>
      @endforeach
  </div>
  
</div>

@endsection
