@extends('frontend.index')
@section('title')
    Keranjang
@endsection
@section('conten')
<div class="container-fluid keranjang pb-4 mb-lg-5" style="margin-top: 89px;">

    <h1 class="text-center fs-1 fw-bold">Keranjang</h1>
  </div>

  <div class="container cartitem " >
    @if ($keranjang->count()>0)
        
    <div class=" mb-5">

        <table class=" table align-middle text-center  ">
          <thead class="table-dark">
            <tr>
              <th class="fot" scope="col" class=" text-center">Foto</th>
              <th scope="col" class="text-center ">Nama</th>
              <th scope="col">harga satuan</th>
              <th scope="col" style="width:110px;">Jumlah</th>
              <th  scope="col">Aksi</th>
            </tr>
          </thead>
          @php
              $total=0;
          @endphp
          <tbody>
             @foreach ($keranjang as $item)

             <tr class=" border border-dark product_data ">
              <td class="fot"><img src="{{ asset('assets/uploads/produk/'. $item->product->image) }}" width="100px" alt=""></td>
              <td ><p class="fs-6">{{ $item->product->name }}</p></td>
              <td>@currency($item->product->harga_jual)</td>

              @if ($item->product->qty >= $item->prod_qty)
              <td> 
                <input type="hidden" value="{{ $item->product->id }}" class="prod_id">
                <div class="input-group text-center mb-3"style="width:110px;">
                   <button class="input-group-text ubahharga decrement-btn">-</button>
                   <input type="text" name="quantity" class="form-control qty-input text-center" value="{{ $item->prod_qty }}">
                   <button class="input-group-text ubahharga increment-btn">+</button>
                  </td>
                  @else
                  <input type="hidden" value="{{ $item->product->id }}" class="prod_id">
                 <td>Produk Habis</td>
                @endif
            
                
                <td ><button class="btn btn-danger btn-md  hapuskeranjang"><i class="fa-solid fa-trash-can"></i> Hapus</button></td>

            </tr>
            @php
           $total+=$item->product->harga_jual *  $item->prod_qty;
        @endphp
          @endforeach
          </tbody>
         
        </table>
        <div class="card-footer pb-2">
          <h5>Total Pesanan : <span class="fw-bolder">@currency($total)</span></h5>
        </div>
        <a href="{{ url('Checkout') }}" class="float-end btn btnproduk me-1 mb-5">Checkout</a>
      </div>
    @else
        <div class="card mt-2">
          <div class="card-body text-center">
            <img src="{{ asset('assets/images/keranjang0.jpg') }}" height="300px" alt="">
            <h3 class="text-danger font-bold fs-1">Upss! Keranjang Masih Kosong!</h3>
            <a class="btn btnproduk" href="{{ url('home') }}">Ayo Belanja sekarang</a>
          </div>
        </div>
    @endif
  </div>
@endsection  

