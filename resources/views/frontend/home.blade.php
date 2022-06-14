@extends('frontend.index')

@section('sampul')
    @include('frontend.layouts.sampul')
@endsection


@section('conten')

  {{-- Trending --}}
  <div class="container-fluid mt-4">
    <h1 class="text-center">Trending</h1>
  <div class="row">
    <div class="owl-carousel owl-theme">
      @foreach ($produkunggulan as $item)
        
      <div class="item me-3">
        <a href="{{ url('kategori/'.$item->name.'/'.$item->slug) }}" style="color: black">


          <div class="card">
            <img src="{{ asset('assets/uploads/produk/'.$item->image) }}" alt="">
            <div class="card-body">
              <p class="card-tittle">{{ $item->name }}</p>
              <span class="float-start" style="font-size: 10px"><s>{{ "Rp. ".number_format($item->harga_asli,0,"",".") }}</s></span>
              <span class="float-end"> {{ "Rp. ".number_format($item->harga_jual,0,"",".")  }}</span>
              
            </div>
          </div>
        </a>
      </div>
      @endforeach
      
  </div>
  </div>
  </div>
  {{-- Batas Trending --}}



  {{-- Kategori --}}
  <div class="container mt-3">  
    <h1 class="text-center" style="margin-top: 70px">Kategori Produk</h1>
    <div class="row mt-4">
      @foreach ($kategori as $prod)        
        <div class="col-md-3 mb-3">
          <a href="{{ url('kategori/'.$prod->slug) }}" class="text-black">
          <div class="card">
              <div class="trending">
                  <img class="img-fluid" src="{{ asset('assets/uploads/category/'.$prod->image) }}" alt="produk" >
                  <div class="card-body text-center fw-bold" style="background-color: #D4ECE5;">
                     <h1 class="card-title fw-bolder">{{ $prod->name }}</h1>
                  </div>
              </div>
            </a>
        </div>
      </div>
      @endforeach    
    </div>
    {{-- Batas kategori --}}
  @endsection
  
    @section('scripts')
       
             <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            dots:false,
            responsive:{
                0:{
                    items:1
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





