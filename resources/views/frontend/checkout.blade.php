@extends('frontend.index')
@section('title')
    Checkout
@endsection
@section('conten')
<div class="container" style="margin-top: 110px;">
    <form action="{{ url('place-order') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="row">
           
            <div class="col-md-7">
                <div class="card-body">
                    <h6>Basic detail</h6>
                    <hr>
                    <div class="row checkout-form">
                        <div class="col-md-6">
                            <label for="namadepan">Nama Depan</label>
                            <input type="text" value="{{ Auth()->User()->namedepan }}" required name="namadepan" class="form-control namadepan"  id="namadepan" placeholder="nama depan">
                        </div>
                        <div class="col-md-6">
                            <label for="namabelakang">Nama Belakang</label>
                            <input type="text" value="{{ Auth::user()->namabelakang }}" required name="namabelakang" class="form-control namabelakang " id="namabelakang" placeholder="nama belakang">
                           
                        </div>
                        <div class="col-md-6">
                            <label for="Email">Email</label>
                            <input type="email" value="{{ Auth::user()->email }}" required name="email" class="form-control email"  id="Email" placeholder="Masukkan Email">
                        </div>
                        <div class="col-md-6">
                            <label for="Nohp">Nomor Handphone</label>
                            <input type="text" value="{{ Auth::user()->Nohp }}" required name="Nohp" class="form-control nohp" " id="Nohp" placeholder="08-**-**-**-**">
                        </div>
                        <div class="col-md-6">
                            <label for="Kota">Kota</label>
                            <input type="text" value="{{ Auth::user()->kota }}" required name="kota" class="form-control kota" id="Kota" placeholder="Kota">
                        </div>
                        <div class="col-md-6">
                            <label for="provinsi">provinsi</label>
                            <input type="text" value="{{ Auth::user()->provinsi }}" required name="provinsi" class="form-control provinsi" id="provinsi" placeholder="provinsi">
                        </div>
                        <div class="col-md-6">
                            <label for="Alamat">Alamat Lengkap</label>
                            <input type="text" value="{{ Auth::user()->alamat }}" required name="alamat" class="form-control alamat" id="Alamat" placeholder="Alamat Lengkap">
                        </div>
                        <div class="col-md-6">
                            <label for="detail">Detail Pesanan</label>
                            <textarea type="text" required name="detail" class="form-control detail" id="detail" placeholder="detail Lengkap"></textarea>
                        </div>
                     
                        <div class="col-md-6">
                            <label for="Kodepos">Kode Pos</label>
                            <input type="text" value="{{ Auth::user()->kodepos }}" required name="Kodepos" class="form-control kodepos"  id="Kodepos" placeholder="Kode pos">
                        </div>
                        
                        <div class="col-md-6">
                            <label for="">Bukti bayar</label>
                            <input type="file" required name="image" class="form-control">
                        </div>
                  
                    </div>
                    
                </div>
            </div>

            <div class="col-md-5">
                <h6 class="text-center">Order detail</h6>
            <table class="table table-striped border border-warning">
                <thead>
                    <tr class="text-center">
                        <th class="col">Nama produk</th>
                        <th class="col">Gambar produk</th>
                        <th class="col">Jumlah</th>
                        <th class="col">Harga</th>
                     
                    </tr>
                    <tbody>
                        @php
                            $total=0;
                        @endphp
                        @foreach ($keranjang as $item)
                        <tr class="text-center">
                            <td>{{ $item->product->name }}</td>
                            <td><img src="{{ asset('assets/uploads/produk/'. $item->product->image) }}" height="70px" alt=""></td>
                            <td>{{ $item->prod_qty  }}</td>
                            <td>{{ "Rp. ".number_format ($item->product->harga_jual * $item->prod_qty,0,"",".")   }}</td>
                        </tr>
                       @php
                               $total+=$item->product->harga_jual *  $item->prod_qty;
                       @endphp
                     
                        @endforeach
                    </tbody>
                </thead>
            </table>
            <div id="paypal-button-container"></div>
            <h4>Total Harga = {{"Rp. ".number_format ( $total ,0,"",".") }}</h4>
            <h2></h2>
            <button type="submit" class="btn btnproduk">Place Order</button>
           
            </div>
            
        </form>


     
        </div>



    </div>


 
@endsection

@section('scripts')

@endsection

