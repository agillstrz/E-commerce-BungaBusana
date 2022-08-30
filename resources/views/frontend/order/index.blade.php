@extends('frontend.index')
@section('title')
    Pesanan
@endsection
@section('conten')
<div class="container-fluid keranjang p-2" style="margin-top: 90px;">

    <h1 class="text-center fs-1 fw-bold">Daftar Pesanan</h1>
  </div>
  @if($orders->count()<1)
  <div class="card mt-2">
    <div class="card-body text-center">
      <img src="{{ asset('assets/images/pesanankosong.png') }}" height="300px" alt="">
      <h3 class="text-danger font-bold fs-1">Halo {{ auth()->user()->name }} kamu belum memesan apapun</h3>
      <a class="btn btnproduk" href="{{ url('home') }}">Ayo Belanja sekarang</a>
    </div>
  </div>
  @else
<div class="container" style="margin-bottom: 255px">

    <table class="table align-middle text-center">
        <thead>
            <tr>
                <th scope="col">Nama pemesan</th>
                <th scope="col">Tanggal Pemesanan</th>
                <th class="totpro" scope="col">Total Pesanan</th>
                <th class="totpro" scope="col">Pembayaran melalui</th>
                <th scope="col">Status</th>
                <th scope="col">Detail pesanan</th>
               
            </tr>
        </thead>
        <tbody>
 
            @foreach ($orders as $item)
                    <tr>
                        <td> {{ $item->namadepan .' '. $item->namabelakang }}</td>
                        <td>{{ $item->created_at }}</td>    
                    <td class="totpro">@currency($item->totalharga)</td>
                    <td class="totpro">
                        @if ($item->pembayaran==1)
                        <img src="{{ asset('assets/images/gopay.png') }}" height="65px" alt="">
                        @elseif($item->pembayaran==2)
                        <img src="{{ asset('assets/images/ovo.png') }}" height="50px" alt="">
                        @elseif($item->pembayaran==3)
                        <img src="{{ asset('assets/images/BRI.png') }}" height="40px" alt="">
                        @elseif($item->pembayaran==4)
                        <img src="{{ asset('assets/images/DANA.png') }}" height="30px" alt="">
                        @else
                        <img src="{{ asset('assets/images/MANDIRI.png') }}" height="30px" alt="">
                        @endif
                    </td>
                    <td>{{ $item->status == '0' ? 'Pending ':'Selesai' }}</td>
                    <td><a href="{{ url('view-order/'.$item->id) }}" class="btn btnproduk">Lihat</a>
                    </td>
                  
                    </tr>
                    @endforeach
        </tbody>
  
    </table>
   
</div>
@endif

@endsection