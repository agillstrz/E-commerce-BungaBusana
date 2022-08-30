@extends('dashboard.layouts.admin')

@section('conten')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Tambah Kategori</h1>

</div>
<form method="post" action="{{ url('insert-category') }}"  enctype="multipart/form-data">
  @csrf
  <div class="row">
    <div class="col-md-6">
      <label for="name" class="form-label">Nama Kategori</label>
      <input type="text"  class="form-control"  name="name" id="name"  required>
    </div>
    
    <div class="col-md-6">
      <label for="slug" class="form-label">slug</label>
      <input type="text"  class="form-control"  name="slug" id="slug" required>
    </div>
 
    <div class="col-md-4">
        <label for="image" class="form-label">Foto Kategori</label>
        <input type="file" class="form-control" name="image" id="image" required>
    </div>
    
    <div class="col-12 mt-4">
      <button type="submit" class="btn btnproduk">Tambah Kategori</button>
    </div>
    </form>
@endsection