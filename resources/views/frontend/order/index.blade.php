@extends('frontend.index')

@section('conten')
    
<div class="container" style="margin-top: 110px;">

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
                    <td> {{ $item->nomortraking }}</td>
                    <td>{{ $item->totalharga }}</td>
                    <td>{{ $item->status == '0' ? 'pending':'selesai' }}</td>
                    <td><a href="{{ url('view-order/'.$item->id) }}" class="btn btn-primary">View</a><td>
                    </tr>
                    @endforeach
        </tbody>
  
    </table>
   
</div>

@endsection