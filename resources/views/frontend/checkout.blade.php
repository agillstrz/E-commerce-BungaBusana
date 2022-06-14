@extends('frontend.index')
@section('Title')
    Checkout
@endsection
@section('conten')
    <div class="container" style="margin-top: 110px;">
        <form action="{{ url('place-order') }}" method="POST">
            @csrf
        <div class="row">
           
            <div class="col-md-7">
                <div class="card-body">
                    <h6>Basic detail</h6>
                    <hr>
                    <div class="row checkout-form">
                        <div class="col-md-6">
                            <label for="namadepan">Nama Depan</label>
                            <input type="text" value="{{ Auth()->User()->namedepan }}" required name="namadepan" class="form-control"  id="namadepan" placeholder="nama depan">
                        </div>
                        <div class="col-md-6">
                            <label for="namabelakang">Nama Belakang</label>
                            <input type="text" value="{{ Auth::user()->namabelakang }}" required name="namabelakang" class="form-control" " id="namabelakang" placeholder="nama belakang">
                        </div>
                        <div class="col-md-6">
                            <label for="Email">Email</label>
                            <input type="email" value="{{ Auth::user()->email }}" required name="email" class="form-control" " id="Email" placeholder="Masukkan Email">
                        </div>
                        <div class="col-md-6">
                            <label for="Nohp">Nomor Handphone</label>
                            <input type="text" value="{{ Auth::user()->Nohp }}" required name="Nohp" class="form-control" " id="Nohp" placeholder="08-**-**-**-**">
                        </div>
                        <div class="col-md-6">
                            <label for="Alamat">Alamat</label>
                            <input type="text" value="{{ Auth::user()->alamat }}" required name="alamat" class="form-control" " id="Alamat" placeholder="Alamat Lengkap">
                        </div>
                        <div class="col-md-6">
                            <label for="Kota">Kota</label>
                            <input type="text" value="{{ Auth::user()->kota }}" required name="kota" class="form-control" " id="Kota" placeholder="Kota">
                        </div>
                        <div class="col-md-6">
                            <label for="Kodepos">Kode Pos</label>
                            <input type="text" value="{{ Auth::user()->kodepos }}" required name="Kodepos" class="form-control" " id="Kodepos" placeholder="Kode pos">
                        </div>
                       
                       
                    </div>
                    
                </div>
            </div>

            <div class="col-md-5">
                <h6 class="text-center">Order detail</h6>
            <table class="table table-striped border border-warning">
                <thead>
                    <tr>
                        <th class="col">Nama produk</th>
                        <th class="col">Jumlah</th>
                        <th class="col">Harga</th>
                     
                    </tr>
                    <tbody>
                        @php
                            $total=0;
                        @endphp
                        @foreach ($keranjang as $item)
                        <tr>
                            <td>{{ $item->product->name }}</td>
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
            <h4>Total Harga = {{"Rp. ".number_format ( $total ,0,"",".") }}</h4>
            <button type="submit" class="btn btnproduk">Place Order</button>
            </div>
            
        </form>
        </div>
    </div>
@endsection