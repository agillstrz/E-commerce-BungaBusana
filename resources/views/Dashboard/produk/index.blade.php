@extends('dashboard.layouts.admin')
@section('conten')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Produk</h1>

</div>
<a href="{{ url('add-produk') }}" class="btn btn-info mb-3 ">Tambah Produk <span data-feather="plus-circle"></span></a>
<div class="table-responsive">
  <table class="table align-middle table-bordered border-dark table-hover text-center table-sm">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">category</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Harga jual</th>
        <th scope="col">Image</th>
        <th scope="col">action</th>
       
      </tr>
    </thead>
    <tbody>
    @foreach ($produk as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->category->name }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->harga_jual }}</td>
        <td><img src="{{ asset('assets/uploads/produk/'.$item->image) }}" class="cate-image" alt="image-here" width="80px"></td>
        <td><div class="">
         <a href="{{ url('edit-produk/'.$item->id) }}" class="btn btn-danger"> <i class="fa-regular fa-pen-to-square"> Edit</i></a>
         <a href="{{ url('delete-produk/'.$item->id) }}" class="btn btn-primary"> <i class="fa-regular fa-trash-can"> Delete</i></a>
        </div></td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection