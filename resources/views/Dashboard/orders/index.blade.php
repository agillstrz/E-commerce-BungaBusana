@extends('dashboard.layouts.admin')
@section('conten')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Pesanan</h1>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <a class="btn btnproduk float-end mt-2" href="{{ url('order-history') }}">Pesanan selesai</a>
                        <table class="table align-middle text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Pemesan</th>
                                    <th scope="col">Tanggal Pemesanan</th>
                                    <th scope="col">Total Pesanan</th>
                                    <th scope="col">Pembayaran melalui</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Detail pesanan</th>
                                </tr>
                            </thead>
                            <tbody>
                         
                                @foreach ($orders as $item)
                                    <tr>
                                        <td>{{ $item->namadepan . ' ' . $item->namabelakang }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>@currency($item->totalharga) </td>
                                        <td>
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
                                        <td>{{ $item->status == '0' ? 'pending' : 'selesai' }}</td>
                                        <td><a href="{{ url('admin/view-order/' . $item->id) }}"
                                                class="btn btnpros">Lihat</a>
                                        <td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
