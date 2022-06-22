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
    <h1 class="text-center mt-2 p-4 text-capitalize fw-bold" style="color: #333333;">Trending</h1>
  <div class="row">
    <div class="owl-carousel owl-theme">
      @foreach ($produkunggulan as $item)
        
      <div class="item me-3">
        <a href="{{ url('kategori/'.$item->name.'/'.$item->slug) }}" style="color: black">
          <div class="card hovertrend">
            <img class="" src="{{ asset('assets/uploads/produk/'.$item->image) }}" alt="">
            <div class="card-body">
              <p class="card-tittle ">{{ $item->name }}</p>
              <span class="float-start" style="font-size: 10px"><s>{{ "Rp. ".number_format($item->harga_asli,0,"",".") }}</s></span>
              <span class="float-end font-bold"> {{ "Rp. ".number_format($item->harga_jual,0,"",".")  }}</span>
              
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
    <h1 class="text-center mt-2 p-4 text-capitalize fw-bold" style="color: #333333;">Kategori Produk</h1>
    <div class="row">
      @foreach ($kategori as $prod)        
        <div class="col-md-3 mb-3">
          <a href="{{ url('kategori/'.$prod->slug) }}" class="text-black ">
          <div class="card">
              <div class="trending">
                  <img class="img-fluid" src="{{ asset('assets/uploads/category/'.$prod->image) }}" alt="produk" >
                  <div class="card-body text-center fw-bold" style="background-color: #D4ECE5;">
                     <h1 class="card-title fw-bolder text-capitalize">{{ $prod->name }}</h1>
                  </div>
              </div>
            </a>
        </div>
      </div>
      @endforeach    
    </div>
    {{-- Batas kategori --}}


    <div class="container mt-3">
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
                <p class="card-title" >{{ $prod->name }}</p>
                <span class="float-start font-bold" >{{"Rp. ".number_format( $prod->harga_jual,0,"",".") }}</span>
              </div>
              <div class="produk text-center">
                
                <button href="" class="btn btnpro addToCartBtn ">Keranjang<i class="bi bi-cart-plus"></i></button>
                <a href="{{ url('kategori/'.$prod->name.'/'.$prod->slug) }}" class="btn btnpro">Lihat<i class="bi bi-binoculars"></i></a>
              </div>
             
           
          </div>
        </div>
        @endforeach

      </div>
      <div class="text-center"><a class="btn btnproduk text-center" href="{{ url('semuaproduk') }}">Lihat lebih banyak</a></div>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus sint, sapiente, libero cumque repellat ipsum at temporibus modi quibusdam ullam esse dicta voluptatum, maiores corporis porro explicabo dolore facere natus! Quasi architecto et, commodi vero, voluptates sint, deleniti itaque repellat placeat voluptatum non pariatur corporis mollitia maxime eligendi at quam repudiandae. Tempore, quisquam quo facilis sequi asperiores dolores ipsam cupiditate autem quaerat laboriosam! Delectus facere, iure ratione accusamus ipsum maxime dignissimos aliquid suscipit voluptatibus repudiandae cumque praesentium, ex numquam rem neque corrupti reprehenderit nesciunt. Qui veniam eum ullam minima officia expedita quaerat consequuntur error, ex ratione exercitationem deserunt animi incidunt aliquam temporibus quis quae recusandae iste illo magnam nobis! Voluptatum iure distinctio quos consequatur ad expedita esse excepturi, accusantium nam nostrum fugiat, aliquam quae? Facilis a inventore tempora libero nam sed sapiente excepturi laboriosam voluptates alias laudantium dolores ut velit autem fugit fuga deleniti est, corrupti minus necessitatibus. Recusandae sit numquam necessitatibus distinctio, exercitationem provident magni facere minus laudantium excepturi aliquam blanditiis voluptate sequi facilis tenetur cupiditate non minima! Accusantium, inventore veritatis. Nisi inventore, consequatur culpa fugiat perspiciatis minus, magnam deleniti placeat optio eligendi magni nemo id commodi nihil debitis molestias, ipsa sit! Assumenda corporis id ad, incidunt pariatur facere.</p>
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





