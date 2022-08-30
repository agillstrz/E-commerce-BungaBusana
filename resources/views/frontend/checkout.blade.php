@extends('frontend.index')
@section('title')
    Pemesanan
@endsection
@section('conten')
<div class="container" style="margin-top: 110px;">
    <form action="{{ url('place-order') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-md-7">
                <div class="card-body">
                    <div class="d-flex">
                        <h3 class="text-bold">Pemesanan</h3>
                        
                            <h5 onclick="location.href='#carabayar'" class="text-bold btn btnpro border  ms-auto">cara bayar?</h5>
                    </div>
                    <hr>
                    <div class="row checkout-form">
                        <div class="col-md-6">
                            <label for="namadepan">Nama Depan</label>
                            <input type="text" value="{{ Auth::user()->namadepan }}" required name="namadepan" class="form-control namadepan"  id="namadepan" placeholder="nama depan">
                        </div>
                        <div class="col-md-6">
                            <label for="namabelakang">Nama Belakang</label>
                            <input type="text" value="{{ Auth::user()->namabelakang }}" required name="namabelakang" class="form-control namabelakang " id="namabelakang" placeholder="nama belakang">
                           
                        </div>
                        <div class="col-md-6">
                            <label for="Email">Email</label>
                            <input readonly type="email" value="{{ Auth::user()->email }}" required name="email" class="form-control email"  id="Email" placeholder="Masukkan Email">
                        </div>
                        <div class="col-md-6">
                            <label for="Nohp">Nomor Handphone</label>
                            <input type="number" value="{{ Auth::user()->Nohp }}" required name="Nohp" class="form-control nohp" " id="Nohp" placeholder="081234567890">
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
                            <label for="Kodepos">Kode Pos</label>
                            <input type="text" value="{{ Auth::user()->kodepos }}" required name="Kodepos" class="form-control kodepos"  id="Kodepos" placeholder="Kode pos">
                        </div>
                        <div class="col-md-6">
                            <label for="detail">Detail Pesanan</label>
                            <textarea type="text"  name="detail" class="form-control detail" id="detail" ></textarea>
                        </div>

                       
                        
                        <div class="col-md-6">
                            <label for="detail">Pilihan Pembayaran</label>
                            <select  class="form-select " aria-label="Default select example" name="pembayaran" required>
                                <option value="">Pilih</option>
                                <option value="1">Gopay</option>
                                <option value="2">OVO</option>
                                <option value="3">BRI</option>
                                <option value="4">Dana</option>
                                <option value="5">Mandiri</option>
                            </select>
                            
                        </div>
                        
                        <div class="col-md-6">
                            <label for="">Bukti bayar</label>
                            <input type="file" required  name="image" class="form-control" >
                        </div>
                  
                    </div>
                    
                </div>
            </div>

            <div class="col-md-5">
                <h5 class="text-center text-bold">Detail pesanan</h5>
            <table class="table table-striped border border-white">
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
                            <td style="width: 150px">{{ "Rp. ".number_format ($item->product->harga_jual * $item->prod_qty,0,"",".")   }}</td>
                        </tr>
                       @php
                               $total+=$item->product->harga_jual *  $item->prod_qty;
                       @endphp
                     
                        @endforeach
                    </tbody>
                </thead>
            </table>
            <h4>Total Pesanan : <span class="fw-bolder">@currency($total)</span> </h4>
            <input type="hidden" name="totalakhir" value="{{ $total }}" id="">
            <button type="submit" class="btn btnproduk more">Pesan sekarang</button>
           
            </div>
            
        </form>

        <div id="carabayar" class="row" style="padding-top: 5rem">
        <div class="col-md-4">
            <div class="card text-white bg-dark ms-4 mb-3" style="height: 20rem;">
                <div class="card-header text-center bg-white d-inline-block">
                    <img   src="{{ asset('assets/images/gopay.png') }}" height="40px" alt="">  
                    <img  src="{{ asset('assets/images/ovo.png') }}" height="40px" alt=""> 
                    <img  src="{{ asset('assets/images/DANA.png') }}" height="30px" alt=""> 
                </div>
                <div class="card-body">
                  <h5 class="card-title text-center">Cara bayar</h5>
                <ol>
                    <li>Isi semua form dengan benar</li>
                    <li>Transfer sesuai dengan total harga ke nomor 082281788810 an Muhammad Agil</li>
                    <li>Screenshot atau foto bukti pembayaran</li>
                    <li>Upload bukti pembayaran</li>
                    <li>Pesan sekarang</li>
                </ol>
                </div>
              </div>
        </div>
        <div class="col-md-4">

            <div class="card text-white bg-dark ms-4 mb-3" style="height: 20rem;">
                <div class="card-header text-center bg-white d-inline-block">
                    <img class="m-2" src="{{ asset('assets/images/BRI.png') }}" height="30px" alt=""> 
                </div>
                <div class="card-body">
                  <h5 class="card-title text-center">Cara bayar</h5>
                <ol>
                    <li>Isi semua form dengan benar</li>
                    <li>Transfer sesuai dengan total harga ke Rekening 3554-01-031552-53-1 an Muhammad Agil</li>
                    <li>Screenshot atau foto bukti pembayaran</li>
                    <li>Upload bukti pembayaran</li>
                    <li>Pesan sekarang</li>
                </ol>
                </div>
              </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-dark ms-4 mb-3" style="height: 20rem;">
                <div class="card-header text-center bg-white d-inline-block">
                    <img class="m-2" src="{{ asset('assets/images/MANDIRI.png') }}" height="30px" alt=""> 
                </div>
                <div class="card-body">
                  <h5 class="card-title text-center">Cara bayar</h5>
                <ol>
                    <li>Isi semua form dengan benar</li>
                    <li>Transfer sesuai dengan total harga ke Rekening 3554-01-031552-53-1 an Muhammad Agil</li>
                    <li>Screenshot atau foto bukti pembayaran</li>
                    <li>Upload bukti pembayaran</li>
                    <li>Pesan sekarang</li>
                </ol>
                </div>
              </div>
        
        
        
        
        
        </div>
        </div>

    </div>

<script>


    
</script>


 
@endsection


@section('scripts')

@endsection

