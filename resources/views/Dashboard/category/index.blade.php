@extends('dashboard.layouts.admin')
@section('conten')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Category Produk</h1>

</div>
<a href="{{ url('add-category') }}" class="btn btn-info mb-3 ">Tambah Category <span data-feather="plus-circle"></span></a>
<div class="table-responsive">
  <table class="table align-middle table-bordered border-dark table-hover text-center table-sm">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nama Category</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Image</th>
        <th scope="col">action</th>
       
      </tr>
    </thead>
    <tbody>
    @foreach ($category as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->deskripsi }}</td>
        <td><img src="{{ asset('assets/uploads/category/'.$item->image) }}" alt="" width="80px"></td>
        <td><div class="">
         <a href="{{ url('edit-category/'.$item->id) }}" class="btn btn-danger"> <i class="fa-regular fa-pen-to-square"> Edit</i></a>
         <a href="{{ url('delete-category/'.$item->id) }}" class="btn btn-primary"> <i class="fa-regular fa-trash-can"> Delete</i></a>
        </div></td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection