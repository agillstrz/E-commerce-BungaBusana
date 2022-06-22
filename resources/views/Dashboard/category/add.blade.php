@extends('dashboard.layouts.admin')

@section('conten')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Tambah Category</h1>

</div>
<form method="post" action="{{ url('insert-category') }}"  enctype="multipart/form-data">
  @csrf
  <div class="row">
    <div class="col-md-6">
      <label for="name" class="form-label">Nama category</label>
      <input type="text"  class="form-control"  name="name" id="name" >
    </div>
    
    <div class="col-md-6">
      <label for="slug" class="form-label">slug</label>
      <input type="text"  class="form-control"  name="slug" id="slug">
    </div>
  
 
    <div class="col-md-12 form-check-inline">
      <input type="checkbox" class="form-check-input" name="status">
     <label for="status">Status</label>
    </div>
    <div class="col-md-12 form-check-inline">
      <input type="checkbox" class="form-check-input" name="popular">
      <label for="popular">Popular</label>
    </div>

    <div class="col-md-4">
        <label for="image" class="form-label">image</label>
        <input type="file" class="form-control" name="image" id="image">
    </div>
    
  
    <div class="col-12 mt-4">
      <button type="submit" class="btn btn-primary">Tambah Produk</button>
    </div>
    </form>

 
@endsection