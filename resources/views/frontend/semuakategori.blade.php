@extends('frontend.index')

@section('title')
    Kategori
@endsection
@section('conten')

  {{-- Kategori --}}
  <div class="container" style="margin-top: 100px">
    <h1 class="text-center mt-2 pt-4 text-capitalize fw-bold" style="color: #333333;">Semua Kategori</h1>
    <div class="row">
        @foreach ($semuakategori as $item)
        <div class="col col-6 col-lg-3 mt-3">
                <a class="text-black " href="{{ url('kategori/'.$item->slug) }}">
                <div class="card hovertrend " >
                    <img src="{{ asset('assets/uploads/category/'.$item->image) }}" alt="">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bolder text-capitalize" >{{ $item->name }}</h5>
                    </div>
                </div>
            </a>
            </div>
        @endforeach
    </div>
 </div>
  

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





