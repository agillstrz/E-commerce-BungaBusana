@extends('frontend.index')

@section('conten')
    
<div class="container" style="margin-top: 110px;">

    <table class="table">
        <thead>
            <tr>
    
                <th scope="col">id</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Email</th>
                <th scope="col">No Handphone</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $item)
            <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->Nohp }}</td>
                    <td><a href="{{ url('view-user/'.$item->id) }}" class="btn btn-primary">View</a><td>
                    </tr>
                    @endforeach
        </tbody>
  
    </table>
   
</div>

@endsection