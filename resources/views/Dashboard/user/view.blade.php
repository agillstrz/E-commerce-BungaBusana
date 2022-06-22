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
                        <div class="card-header">
                            <h4>User detail</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-2">
                                <label for="">Role</label>
                                <div class="p-2 border mt-2">{{ $user->role_as == '0' ? 'User' : 'Admin' }}</div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label for="">Nama Lengkap</label>
                                <div class="p-2 border mt-2">{{ $user->name }}</div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label for="">Username</label>
                                <div class="p-2 border mt-2">{{ $user->username }}</div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label for="">Email</label>
                                <div class="p-2 border mt-2">{{ $user->email }}</div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label for="">Nomor Handphone</label>
                                <div class="p-2 border mt-2">{{ $user->Nohp }}</div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label for="">Alamat Lengkap</label>
                                <div class="p-2 border mt-2">{{ $user->alamat }}</div>
                            </div>

                            <div class="col-md-4 mb-2">
                                <label for="">Kode Pos</label>
                                <div class="p-2 border mt-2">{{ $user->kodepos }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
