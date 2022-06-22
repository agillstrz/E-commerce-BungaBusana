
@extends('frontend.index')

@section('title')
    Semua Produk
@endsection

@section('conten')
 <div class="container" style="margin-top: 100px">
  <h1 class="text-center mt-2 p-4 text-capitalize fw-bold" style="color: #333333;">Semua Produk</h1>
    <div class="row">
      @foreach ($semuaproduk as $prod)
          
      <div class="col-md-3 mb-3 product_data">
        <input type="hidden" value="{{ $prod->id }}" class="prod_id">
        <input type="hidden" name="quantity" value="{{ $prod_qty = 1 }}" class="qty-input" id="">
        <div class="card">
          
           <a href="{{ url('kategori/'.$prod->name.'/'.$prod->slug) }}">
             <img class="img-fluid hovertrend" src="{{ asset('assets/uploads/produk/'.$prod->image) }}" alt="Demo image 1" >
            </a>
            <div class="card-body" >
              <p class="card-title">{{ $prod->name }}</p>
              <span class="font-bold">{{"Rp. ".number_format( $prod->harga_jual,0,"",".") }}</span>
            </div>
            <div class="produk text-center">
              
              <button href="" class="btn btnpro addToCartBtn ">Keranjang<i class="bi bi-cart-plus"></i></button>
              <a href="{{ url('kategori/'.$prod->name.'/'.$prod->slug) }}" class="btn btnpro">Lihat<i class="bi bi-binoculars"></i></a>
            </div>
           
         
        </div>
      </div>
      @endforeach

    </div>
  </div>
  @endsection