@extends('frontend.index')

@section('conten')
    
<div class="container" style="margin-top: 110px;">

    <div class="card">
        <div class="body-card">
            <div class="card-header bg-danger">
                
                <h2 class="text-white">Order view</h2>
            </div>
            <div class="row p-3" >

                <div class="col-md-6" style="width: 500px">
                   <label for="">Nama Lengkap</label>
                   <div class="border bg-white p-2">{{ $orders->namadepan . " ". $orders->namabelakang }}</div>
                   <label for="">Email</label>
                   <div class="border bg-white p-2">{{ $orders->email }}</div>
                   <label for="">Alamat lengkap</label>
                   <div class="border bg-white p-2">{{ $orders->alamat }}</div>
                   <label for="">Kode pos</label>
                   <div class="border bg-white p-2">{{ $orders->kodepos }}</div>
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
                        <h4>Harga Total : </h4>
                        
                            
                </div>
            </div>
        </div>
    </div>
</div>

@endsection