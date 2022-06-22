@extends('dashboard.layouts.admin')

@section('conten')
    <div class="container" style="margin-top: 110px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>

                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">No Handphone</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->username }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->Nohp }}</td>
                                        <td><a href="{{ url('view-user/' . $item->id) }}" class="btn btn-primary">View</a>
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
