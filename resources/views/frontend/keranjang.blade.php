@extends('frontend.index')
@section('title')
    Keranjang
@endsection
@section('conten')
<div class="container-fluid p-2 keranjang" style="margin-top: 90px;">

    <h1 class="text-center fs-1 fw-bold">Keranjang <br><p class="fw-normal fs-5">Belanja</p></h1>
  </div>

  <div class="container">
    @if ($keranjang->count()>0)
        
    <div class="table-responsive">

        <table class="table align-middle text-center">
          <thead class="table-dark">
            <tr>
              <th scope="col" class=" text-start">Foto</th>
              <th scope="col" class=" text-start">Nama</th>
              <th scope="col">harga satuan</th>
              <th scope="col" style="width:110px;">Kuantitas</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          @php
              $total=0;
          @endphp
          <tbody>
             @foreach ($keranjang as $item)

             <tr class="fw-bold border border-dark product_data">
              <td class=""><img src="{{ asset('assets/uploads/produk/'. $item->product->image) }}" width="100px" alt=""></td>
              <td><h4 class="fw-bold">{{ $item->product->name }}</h4></td>
              <td>{{ "Rp. ".number_format($item->product->harga_jual * $item->prod_qty,0,"",".")   }}</td>

              @if ($item->product->qty >= $item->prod_qty)
              <td> 
                <input type="hidden" value="{{ $item->product->id }}" class="prod_id">
                <div class="input-group text-center mb-3"style="width:110px;">
                   <button class="input-group-text ubahharga decrement-btn">-</button>
                   <input type="text" name="quantity" class="form-control qty-input text-center" value="{{ $item->prod_qty }}">
                   <button class="input-group-text ubahharga increment-btn">+</button>
                  </td>
                  @else
                 <td>KOSONG</td>
                @endif
            
                

              <td><button class="btn btn-danger hapuskeranjang">Hapus</button></td>
            </tr>
            @php
           $total+=$item->product->harga_jual *  $item->prod_qty;
        @endphp
          @endforeach
          </tbody>
         
        </table>
        <div class="card-footer">
          <h5>Total Harga :  {{"Rp. ".number_format($total,0,"",".")  }}</h5>
          <a href="{{ url('Checkout') }}" class="float-end btn btnproduk">Checkout</a>
        </div>
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
@endsection  

