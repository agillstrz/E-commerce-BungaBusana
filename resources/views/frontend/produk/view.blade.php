@extends('frontend.index')
@section('title')
    Detail Produk
@endsection

@section('conten')

<div class="container min-vh-100" style="margin-top: 110px;">

  <div class="row">
    <div class="card bayangan product_data">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6 text-center position-relative">
            @if ($produk->status == 1)
            <label class="badge viewicon p-1 position-absolute bg-secondary fs-5">Trending</label>
            @else
            @endif
            <img class="img-fluid" src="{{ asset('assets/uploads/produk/'.$produk->image) }}" style="width: 420px" alt="" />
          </div>
          <div class="col-md-6 border">
            <div class="col-md-12 d-flex position-relative">
              <h4 class="text-capitalize mt-2 lg-fs-1 justify-content-between mb-0">
                {{ $produk->name }}
            </h4>
            </div>
            <hr>
            <div class="col-md-12 d-flex font-bold text-capitalize">
              <h5>Kategori : {{ $produk->category->name }}</h5>
            </div>
            <div class="col-md-12 d-flex">
              <h5>Harga : <span class="fw-bolder"> @currency($produk->harga_jual)</span> </h5>
            </div>
            <div class="col-md-12 d-flex">
              <p class="float-end fs-6"> @if($produk->gender == '0')
                 unisex 
          @elseif($produk->gender == '1')
         Untuk Pria
          @else
         Untuk Wanita
          @endif
          </p>
            </div>
            <div class="col-md-12 d-flex">
              <p>
                {{ $produk->deskripsi }}
              </p>
            </div>
            <div class="col-md-3">
              <input type="hidden" value="{{ $produk->id }}" class="prod_id">
              <label for="Quantity">Jumlah</label>
             <div class="input-group text-center mb-3"style="width:130px;">
                <button class="input-group-text decrement-btn">-</button>
                <input type="text" name="quantity" class="form-control qty-input text-center" value="1">
                <button class="input-group-text increment-btn">+</button>
             </div>
        </div>
            <hr>
          @if ($produk->qty > 0)
          <div class="col-md-6 mt-3">
            <span class="btn badge btn-success">Tersedia</span>
          </div>
          @else
          <div class="col-md-6 mt-3">
            <span class="btn  btn-danger">STOK HABIS</span>
          </div>
          @endif
            @if ($produk->qty > 0)
            <div class="col-md-6 justify-content-between   d-flex mt-3">
              <button type="submit" class="btn btnproduk d-flex addToCartBtn"
                >Keranjang<i class="bi bi-cart-plus fs-5"></i
              ></button>
            </div>
            @else
            <div class="col-md-6 justify-content-between d-flex mt-3">
              <button type="submit" class="btn disabled btnproduk d-flex addToCartBtn"
                >Keranjang<i class="bi bi-cart-plus fs-5"></i
              ></button>
              <a href=""  class="btn btnproduk disabled">Beli sekarang</a>
            </div>
            @endif
         
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

