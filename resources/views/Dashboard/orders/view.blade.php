@extends('dashboard.layouts.admin')
@section('conten')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Order List</h1>

</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-6" style="width: 500px">
                            <label for="">Nama Lengkap</label>
                            <div class="border bg-white p-2">{{ $orders->namadepan . " ". $orders->namabelakang }}</div>
                            <label for="">Email</label>
                            <div class="border bg-white p-2">{{ $orders->email }}</div>
                            <label for="">Kota</label>
                            <div class="border bg-white p-2">{{ $orders->kota }}</div>
                            <label for="">Provinsi</label>
                            <div class="border bg-white p-2">{{ $orders->provinsi }}</div>
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
                                        <th class="col">Jumlah</th>
                                        <th class="col">Harga</th>
                                        <th class="col">Image</th>
                               
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders->orderitems as $item)
                                    <tr>
                                            <td>{{ $item->product->name }}</td>
                                            <td>{{ $item->qty }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td><img src="{{ asset('assets/uploads/produk/'. $item->product->image) }}" width="70px" alt=""></td>
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                            <h1>Harga Total : Rp. {{ $orders->qty }}</h1>
                            <h2>Bukti Pembayaran : <img src="{{ asset('assets/uploads/bukti/'. $orders->image) }}" width="70px" alt=""></h2>
                            <label for="" class="mb-2">Order status</label>
                            <form action="{{ url('update-order/' .$orders->id) }}  " method="POST">
                                @csrf
                                @method('PUT')
                                <select class="form-select" name="order_status">
                                    <option {{ $orders->status == '0' ? 'selected' : '' }} value="0">Pending</option>
                                    <option {{ $orders->status ==  '1' ? 'selected' : '' }} value="1">Sudah selesai</option>
                                  </select>
                                  <button type="submit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection