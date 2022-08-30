@extends('frontend.index')
@section('title')
    Semua Produk
@endsection
@section('conten')
<div class="container-fluid keranjang p-2" style="margin-top: 90px;">

  <h1 class="text-center fs-1 fw-bold">Produk</h1>
</div>
<div class="container">
<nav class="navbar justify-content-center mb-4 ">
      <a href="{{ url('produkwanita') }}" class="btn btn-sm gender btn-outline-secondary m-1" type="button">Wanita</a>
      <a href="{{ url('semuaproduk') }}" class="btn btn-secondary text-white btn-sm gender btn-outline-secondary m-1" type="button">Semua</a>
      <a href="{{ url('produkpria') }}" class="btn btn-sm gender btn-outline-secondary m-1" type="button">Pria</a>
    
  </nav>
    <div class="row">
      @foreach ($semuaproduk as $prod)
          
      <div class="col col-6 col-lg-3 mb-3 product_data" >
        <input type="hidden" value="{{ $prod->id }}" class="prod_id">
        <input type="hidden" name="quantity" value="{{ $prod_qty = 1 }}" class="qty-input" >
        <div class="card styleprod">
          @if($prod->trending == 1)
          <button class="icontrend bg-secondary badge text-white border-white">trending</button>
          @else
          @endif
           <a href="{{ url('kategori/'.$prod->name.'/'.$prod->slug) }}">
             <img class="img-fluid hovertrend" src="{{ asset('assets/uploads/produk/'.$prod->image) }}" alt="Demo image 1" >
            </a>
            <div class="d-none d-lg-inline semuaproduk text-center">
              <button href="" class="btn btnpro addToCartBtn ">Keranjang<i class="bi bi-cart-plus"></i></button>
              <a href="{{ url('kategori/'.$prod->name.'/'.$prod->slug) }}" class="btn btnpro">Lihat<i class="fa-solid fa-eye"></i></a>
            </div>
            <div class="card-body" >
              <p class="card-title fs-6 text-capitalize lg-text-lowercase">{{ $prod->name }} </p>
              <span class="fw-bolder">@currency( $prod->harga_jual)</span>
            </div>
          
        </div>
      </div>
      @endforeach
    </div>
    <div class="d-flex justify-content-center mt-3">
      {{ $semuaproduk->links() }}
    </div>
  </div>
  @endsection