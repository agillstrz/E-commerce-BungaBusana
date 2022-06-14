@extends('frontend.index')

@section('conten')

<div class="container" style="margin-top: 110px;">

  <div class="row">
    <div class="card bayangan product_data">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6 text-center">
            <img src="{{ asset('assets/uploads/produk/'.$produk->image) }}" style="width: 420px" alt="" />
          </div>
          <div class="col-md-6 border fw-bold">
            <div class="col-md-12 d-flex">
              <h2 class="fw-bold text-capitalize justify-content-between mb-0">
                @if ($produk->status == 1)
                <label class="badge p-1 btn btn-success fs-5" style="margin-left: 400px">Trending</label>
                @else
                    
                @endif
               
                {{ $produk->name }}
             
            </h2>
            </div>
            <hr>
            <div class="col-md-12 d-flex">
              <h3>{{"Rp. ".number_format($produk->harga_jual,0,"",".")  }}</h3>
            </div>
            <div class="col-md-12 d-flex">
              <h5>{{ $produk->category->name }}</h5>
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
              <a href="" class="btn btnproduk">Beli sekarang</a>
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

