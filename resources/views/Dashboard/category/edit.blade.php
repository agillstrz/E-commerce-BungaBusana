@extends('dashboard.layouts.admin')

@section('conten')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit/Update Produk</h1>

  </div>
<form method="POST" action="{{ url('update-category/'.$category->id) }}"  enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="row">
    <div class="col-md-6">
      <label for="name" class="form-label">Nama Produk</label>
      <input type="text" value="{{ $category->name }}"  class="form-control"  name="name" id="name">
    </div>
    
    <div class="col-md-6">
      <label for="slug" class="form-label">slug</label>
      <input type="text" value="{{ $category->slug }}"  class="form-control"  name="slug" id="slug">
    </div>

 
    <div class="col-md-6 form-check-inline">
      <input type="checkbox" {{ $category->status == "1" ? 'checked' : ''}} class="form-check-input" name="status">
     <label class="form-check-label" for="status">Status</label>
    
    </div>
    <div class="col-md-6 form-check-inline mb-3">
      <input type="checkbox" {{ $category->popular == "1" ? 'checked' : ''}} class="form-check-input" name="popular">
     <label class="form-check-label" for="popular">Popular</label>
     
    </div>

    <div class="col-md-12">
      @if ($category->image)
<img src="{{ asset('assets/uploads/category/'. $category->image) }}" width="80px" alt="category image">
    
@endif
        <label for="image" class="form-label">image</label>
        <input type="file" class="form-control" name="image" id="image">
    </div>
    
  
    <div class="col-12 mt-4">
      <button type="submit" class="btn btn-primary">Tambah Produk</button>
      <a class="btn btn-primary" href="{{ url('categories') }}">Batal</a>
    </div>
    </form>

 
@endsection