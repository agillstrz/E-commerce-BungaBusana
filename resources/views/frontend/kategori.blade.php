@extends('frontend.index')
@section('title')
    Kategori produk
@endsection
@section('conten')

<div class="container-fluid keranjang p-3" style="margin-top: 90px;">

  <h1 class="text-center fs-1 fw-bold" style="color: #333333;">{{ $category->name }}</h1>
</div>
<div class="container">
      <!-- Padding -->

  <div class="row">
      @foreach ($produk as $prod)
          
      <div class="col col-6 col-lg-3 mb-3 product_data">
        <input type="hidden" value="{{ $prod->id }}" class="prod_id">
        <input type="hidden" name="quantity" value="{{ $prod_qty = 1 }}" class="qty-input" id="">
        <div class="card styleprod" >
          <div class="figure">
            @if($prod->trending == 1)
            <button class="icontrend bg-secondary badge text-white border-white">trending</button>
            @else
            @endif
           <a href="{{ url('kategori/'.$category->name.'/'.$prod->slug) }}">
             <img class="img-fluid hovertrend" src="{{ asset('assets/uploads/produk/'.$prod->image) }}" alt="Demo image 1" >
            </a>
            <div class="card-body" >
              <p class="card-title">{{ $prod->name }}</p>
              <p class="card-title fw-bolder">@currency( $prod->harga_jual)</p>
            </div>
            <div class="d-none d-lg-inline semuaproduk text-center">
              
              <button href="" class="btn btnpro addToCartBtn ">Keranjang<i class="bi bi-cart-plus"></i></button>
              <a href="{{ url('kategori/'.$category->name.'/'.$prod->slug) }}" class="btn btnpro">Lihat<i class="bi bi-binoculars"></i></a>
            </div>
           
          </div>
        </div>
      </div>
      @endforeach
  </div>
</div>
@endsection
