@extends('dashboard.layouts.admin')
@section('conten')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kategori Produk</h1>

    </div>
    <a href="{{ url('add-category') }}" class="btn btnproduk mb-3 ">Tambah Category <i class="fa-solid fa-circle-plus"></i><span
            data-feather="plus-circle"></span></a>
    <div class="table-responsive">
        <table class="table align-middle table-bordered border-dark table-hover text-center table-sm">
            <thead>
                <tr class="bgtable">
                    <th style="width: 4%" scope="col">No</th>
                    <th style="width: 30%" scope="col">Nama Kategori</th>
                    <th scope="col">Foto Kategori</th>
                    <th style="width: 30%" scope="col">Aksi</th>

                </tr>
            </thead>
            <tbody>
                @php
                   $no = 1; 
                @endphp
                @foreach ($category as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->name }}</td>
                        <td><img src="{{ asset('assets/uploads/category/' . $item->image) }}" alt="" width="80px">
                        </td>
                        <td style="width: 200px">
                            <div class="">
                                <a href="{{ url('edit-category/' . $item->id) }}" class="btn btnpros"> <i
                                        class="fa-regular fa-pen-to-square"> Edit</i></a>
                                <a href="{{ url('delete-category/' . $item->id) }}" class="btn btnpros"> <i
                                        class="fa-regular fa-trash-can"> Hapus</i></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
