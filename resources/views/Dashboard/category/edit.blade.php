@extends('dashboard.layouts.admin')

@section('conten')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit/Update Kategori</h1>

  </div>
<form method="POST" action="{{ url('update-category/'.$category->id) }}"  enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="row">
    <div class="col-md-6">
      <label for="name" class="form-label">Nama Kategori</label>
      <input type="text" value="{{ $category->name }}"  class="form-control"  name="name" id="name" required>
    </div>
    
    <div class="col-md-6">
      <label for="slug" class="form-label">slug</label>
      <input type="text" value="{{ $category->slug }}"  class="form-control"  name="slug" id="slug" required>
    </div>

    <div class="col-md-4">
      @if ($category->image)
<img src="{{ asset('assets/uploads/category/'. $category->image) }}" width="80px" alt="category image">
    
@endif
        <label for="image" class="form-label">Foto Kategori</label>
        <input type="file" class="form-control" name="image" id="image" >
    </div>
    
  
    <div class="col-12 mt-4">
      <button type="submit" class="btn btnproduk">Simpan <i class="fa-regular fa-floppy-disk"></i></button>
      <a class="btn btnproduk" href="{{ url('categories') }}">Batal</a>
    </div>
    </form>

 
@endsection