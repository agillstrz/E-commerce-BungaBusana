@extends('dashboard.layouts.admin')
@section('conten')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produk</h1>
    </div>
    <a href="{{ url('add-produk') }}" class="btn btnproduk mb-3 ">Tambah Produk <i class="fa-solid fa-circle-plus"></i></a>
    <form action="/produk" method="GET" class="d-flex">
        <input type="search" name="cari" class="form-control w-25" value="{{ request('cari') }}">
        <button class="btn btnproduk ms-2" type="submit">cari</button>
    </form>
    <div class="table-responsive mt-2">
        <table class="table align-middle table-bordered border-dark table-hover text-center table-sm">
            <thead>
                <tr class="bgtable">
                    <th scope="col">No</th>
                    <th scope="col">Kategori</th>
                    <th style="width: 25%" scope="col">Nama Produk</th>
                    <th style="width: 10%" scope="col">Stock Produk</th>
                    <th scope="col">Harga jual</th>
                    <th style="width: 22%" scope="col">Foto Produk</th>
                    <th scope="col">Aksi</th>

                </tr>
            </thead>
            <tbody>
                @php
                $nomor=0;
                @endphp
                @foreach ($produk as $item)
                    <tr class="position-relative">
                        <td>{{++$nomor }}</td>
                        <td>{{ $item->category->name }}</td>
                        <td class="text-capitalize">{{ $item->name }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>@currency($item->harga_jual)</td>
                        <td class="position-relative">@if($item->trending == 1)
                            <button class="icontrend position-absolute bg-secondary badge text-white  border-white">trending</button>
                            @else
                            @endif<img src="{{ asset('assets/uploads/produk/' . $item->image) }}" class="cate-image"
                                alt="image-here" width="80px"> 
                                </td>
                        <td>
                            <div>
                                <a href="{{ url('edit-produk/' . $item->id) }}" class="btn btnpros"><span
                                        class="fa-regular fa-pen-to-square">Edit</span></a>
                                <a href="{{ url('delete-produk/' . $item->id) }}" class="btn btnpros"><span
                                        class="fa-regular fa-trash-can"> Delete</span></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
