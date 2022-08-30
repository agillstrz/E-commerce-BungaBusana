@extends('frontend.index')

@section('title')
    Bunga Busana
@endsection

@section('sampul')
    @include('frontend.layouts.sampul')
@endsection


@section('conten')

  {{-- Trending --}}
  <div class="container-fluid mt-4">
    <h1 class="text-center mt-2 p-4 text-capitalize fw-bold judul" >Trending</h1>
  <div class="row">
    <div class="owl-carousel owl-theme">
      @foreach ($produkunggulan as $item)
        
      <div class="item me-3">
        <a href="{{ url('kategori/'.$item->name.'/'.$item->slug) }}" style="color: black">
          <div class="card hovertrend hometrending" style="height: 360px" >
            <img class="" src="{{ asset('assets/uploads/produk/'.$item->image) }}" alt="">
            <div class="card-body">
              <p class="card-tittle text-capitalize">{{ $item->name }}</p>
              <button class="icontrend bg-secondary badge text-white border-white">trend</button>
              <span class="float-end fw-bolder"> @currency($item->harga_jual)</span>
              
            </div>
            
          </div>
        </a>
      </div>
      @endforeach
  </div>
  </div>
  </div>
  <hr>
  {{-- Batas Trending --}}

  {{-- Kategori --}}
  <div id="kategori" class="container-fluid mt-3">  
    <h1 class="text-center mt-2  p-4 text-capitalize fw-bold judul" >Kategori</h1>
    <div class="row">
      <div class="owl-carousel owl-theme">
      @foreach ($kategori as $item)        
      <div class="item">
            <a href="{{ url('kategori/'.$item->slug) }}" class="text-black ">
              <div class="card trending ">
                  <img class="" src="{{ asset('assets/uploads/category/'.$item->image) }}" alt="produk" >
                  <div class="card-body text-center " style="background-color: #D4ECE5;">
                     <h1 class="card-title fw-bolder text-capitalize">{{ $item->name }}</h1>
                  </div>
              </div>
            </a>
        </div>
        @endforeach    
      </div>
      <div class="text-center"><a class="btn btnproduk more text-center" href="{{ url('kategori') }}">Lihat lebih banyak</a></div>
    </div>
    <hr>
    {{-- Batas kategori --}}


    <div class="container mt-3">
  <h1 class="text-center mt-2 p-4 text-capitalize fw-bold judul" >Semua Produk</h1>
      <div class="row">
        @foreach ($semuaproduk as $prod)
            
        <div class="col col-6 col-lg-3  product_data">
          <input type="hidden" value="{{ $prod->id }}" class="prod_id">
          <input type="hidden" name="quantity" value="{{ $prod_qty = 1 }}" class="qty-input" id="">
          <div class="card mt-2 position-relative ">
            <a href="{{ url('kategori/'.$prod->name.'/'.$prod->slug) }}">
              <img class="img-fluid hovertrend" src="{{ asset('assets/uploads/produk/'.$prod->image) }}" alt="Demo image 1" >
             </a>
           <div class="semuaproduk d-none d-lg-inline  text-center ">
            <button class="btn btnpro addToCartBtn ">Keranjang<i class="bi bi-cart-plus"></i></button>
            <a href="{{ url('kategori/'.$prod->name.'/'.$prod->slug) }}" class="btn btnpro">Lihat<i class="fa-solid fa-eye"></i></a>
        </div>
           <div class="card-body">
            <p class="card-title text-capitalize">{{ $prod->name }}</p>
            <span class="float-start fw-bolder">@currency($prod->harga_jual) </span>
          </div>
          </div>
        </div>
        @endforeach

      </div>
      

      <div class="text-center mt-3"><a class="btn btnproduk text-center more" href="{{ url('semuaproduk') }}">Lihat lebih banyak</a></div>
    </div>
    <hr>
    
  @endsection


  
  @section('scripts')
       
  <script>
$('.owl-carousel').owlCarousel({
 loop:true,
 margin:10,
 nav:false,
 dots:true,
 responsive:{
     0:{
         items:2
     },
     600:{
         items:3
     },
     1000:{
         items:5
     }
 }
})
</script>

@endsection


