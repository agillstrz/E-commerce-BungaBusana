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
                    <a class="btn btnproduk float-start" href="{{ url('orders') }}">New Order</a>
                    <table class="table">
                        <thead>
                            <tr>
                    
                                <th scope="col">Tanggal Pemesanan</th>
                                <th scope="col">Nomor Traking</th>
                                <th scope="col">Total Harga</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item)
                            <tr>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->nomortraking }}</td>
                                    <td>{{ $item->totalharga }}</td>
                                    <td>{{ $item->status == '0'?'pending':'selesai' }}</td>
                                    <td><a href="{{ url('admin/view-order/'.$item->id) }}" class="btn btn-primary">View</a><td>
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