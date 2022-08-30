@extends('dashboard.layouts.admin')
@section('conten')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Dashboard</h1>

</div>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="card semua text-white bg-primary mb-3" style="max-width: 16rem;">
        <div class="card-body">
        <h1 class="">{{ count($jumlahuser) }}  <span class="float-end"><i class="fa-solid fa-user"></i></span> </h1>
        <h4>Pengguna</h4>
        </div>
        <div class="total card-footer" onclick="location.href='{{ url('user-list') }}'"><b>Lihat user<i class=" fa-solid fa-caret-right float-end"></i></b>
        </div>  
  
      </div>
    </div>
  
    <div class="col-md-4">
      <div class="card semua text-white bg-danger mb-3" style="max-width: 16rem;">
        <div class="card-body">
        
        @if(count($jumlahorder)>=1)
        <h1 class="">{{ count($jumlahorder) }}  <span class="float-end"><i class="fa-solid fa-cart-arrow-down"></i></span> </h1>
        <h4>Pesanan Pending</h4>
        @else
        <h1><i class="fa-solid fa-cart-shopping"></i></h1>
        <h4>tidak ada pesanan</h4>
        @endif
        </div>
        <div class="total card-footer" onclick="location.href='{{ url('orders') }}'"><b>Lihat pesanan pending<i class=" fa-solid fa-caret-right float-end"></i></b>
        </div>  
  
      </div>
    </div>

    <div class="col-md-4">
      <div class="card semua text-white bg-success mb-3" style="max-width: 16rem;">
        <div class="card-body">
        
        @if(count($jumlahorderselesai)>=1)
        <h1 class="">{{ count($jumlahorderselesai) }}  <span class="float-end"><i class="fa-solid fa-check-to-slot"></i></span> </h1>
        <h4>pesanan selesai</h4>
        @else
        <h1><i class="fa-solid fa-cart-shopping"></i></h1>
        <h4>tidak ada pesanan</h4>
        @endif
        </div>
        <div class="total card-footer" onclick="location.href='{{ url('order-history') }}'"><b>Lihat pesanan selesai<i class=" fa-solid fa-caret-right float-end"></i></b>
        </div>  
  
      </div>
    </div>

    <div class="col-md-4 mt-5">
      <div class="card semua text-white bg-secondary mb-3" style="width: 16rem; height: 12em;">
        <div class="card-body">
        <h1 class="">{{ count($jumlahproduk) }}  <span class="float-end"><i class="fa-solid fa-suitcase-rolling"></i></span> </h1>
        <h4>Produk tersedia</h4>
        </div>
        <div class="total card-footer" onclick="location.href='{{ url('produk') }}'"><b>Lihat Produk<i class=" fa-solid fa-caret-right float-end"></i></b>
        </div>  
  
      </div>
    </div>

  
    <div class="col-md-4 mt-5">
      <div class="card semua text-white pendapatan mb-3" style="width: 20rem; height: 12em;">
        <div class="card-body">
        @if($jumlahorderselesai->count()<=0)
        <h2>Pendapatan Toko<span class="float-end"><i class="fa-solid fa-sack-dollar"></i></span></h2>
        <h2>0</h2>
        @else
        @php
            $total=0;
        @endphp
       @foreach ($jumlahorderselesai as $item)
          @php
               $total+=$item->totalharga;
          @endphp
       @endforeach
       <h2>Pendapatan Toko<span class="float-end"><i class="fa-solid fa-sack-dollar"></i></span></h2>
       <h2>@currency($total)</h2>
        @endif
        </div>
        <div class="total card-footer" onclick="location.href='{{ url('order-history') }}'"><b>Pendapatan Toko<i class=" fa-solid fa-caret-right float-end"></i></b>
        </div>  
  
      </div>
    </div>
  
  
  </div>
</div>



@endsection