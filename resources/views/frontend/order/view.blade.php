@extends('frontend.index')
@section('title')
    Detail Pesanan
@endsection
@section('conten')
<div class="container h-100 " style="margin-top: 110px;margin-bottom: 120px;">
    <div class="card">
        <div class="body-card">
            <div class="card-header d-flex" style="background-color: #333333">
                <h2 class="text-white">Detail Pesanan</h2>
            </div>
            <div class="row p-3" >

                <div class="col-md-3" style=>
                    <label for="">Nama Lengkap</label>
                    <div class="border bg-white p-2">{{ $orders->namadepan . " ". $orders->namabelakang }}</div>
                    <label for="">Email</label>
                    <div class="border bg-white p-2">{{ $orders->email }}</div>
                    <label for="">No Handphone</label>
                    <div class="border bg-white p-2">{{ $orders->Nohp }}</div>
                    <label for="">Kota</label>
                    <div class="border bg-white p-2">{{ $orders->kota }}</div>
                    <label for="">Provinsi</label>
                    <div class="border bg-white p-2">{{ $orders->provinsi }}</div>
                   
                </div>
                <div class="col-md-3">
                    <label for="">Alamat lengkap</label>
                    <div class="border bg-white p-2">{{ $orders->alamat }}</div>
                    <label for="">Kode pos</label>
                    <div class="border bg-white p-2">{{ $orders->kodepos }}</div>
                    <label for="">Detail Pesanan</label>
                    <div class="border bg-white p-2">{{ $orders->detail }}</div>
                </div>
                <div class="col-md-6">
                    <table class="table border border-dark">
                        <thead>
                            <tr>
                                <th class="col">Nama Produk</th>
                                <th class="col">Foto</th>
                                <th class="col">Jumlah</th>
                                <th class="col" style="width: 120px">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            @foreach ($orders->orderitems as $item)
                            <tr>
                                    
                                    <td class="text-capitalize">{{ $item->product->name }}</td>
                                    <td><img height="40px" src="{{ asset("assets/uploads/produk/". $item->product->image ) }}" alt=""></td>
                                    <td>{{ $item->qty }}</td>
                                    <td>@currency($item->harga)</td>
                                </tr>
                              
                                @endforeach
        
                            </tbody>
                        </table>
                        <h6>Total Pesanan  : @currency($orders->totalharga)</h6>
                        <h6>
                            @if ($orders->pembayaran==1)
                            <img src="{{ asset('assets/images/gopay.png') }}" height="65px" alt="">
                            @elseif($orders->pembayaran==2)
                            <img src="{{ asset('assets/images/ovo.png') }}" height="50px" alt="">
                            @elseif($orders->pembayaran==3)
                            <img src="{{ asset('assets/images/BRI.png') }}" height="40px" alt="">
                            @elseif($orders->pembayaran==4)
                            <img src="{{ asset('assets/images/DANA.png') }}" height="30px" alt="">
                            @else
                            <img src="{{ asset('assets/images/MANDIRI.png') }}" height="30px" alt="">
                            @endif
                    </h6>
                        <h5>Bukti Pembayaran : <img id="myImg" src="{{ asset('assets/uploads/bukti/'. $orders->image) }}" width="70px" alt=""></h5>
                            <!-- The Modal -->
                                <div id="myModal" class="modal">
                                <span class="close">&times;</span>
                                <img class="modal-content" id="img01">
                                <div id="caption"></div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection