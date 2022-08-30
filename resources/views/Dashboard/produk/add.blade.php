@extends('dashboard.layouts.admin')

@section('conten')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Tambah Produk</h1>

</div>
<form method="post" action="{{ url('insert-produk') }}"  enctype="multipart/form-data">
  @csrf
  <div class="row">
      <div class="col-md-12">
        <select class="form-select" name="cate_id" required aria-label="Default select example">
            <option value="">Pilih Kategori</option>
            @foreach ($category as $item)
            <option value="{{ $item->id }}" >{{ $item->name }}</option>
            @endforeach
          </select>
      </div>
    <div class="col-md-6">
      <label for="name" class="form-label">Nama Produk</label>
      <input type="text"  class="form-control"  name="name" id="name" required>
    </div>
    
    <div class="col-md-6">
      <label for="slug" class="form-label">slug</label>
      <input type="text"  class="form-control"  name="slug" id="slug" required>
    </div>
    <div class="col-md-6">
      <label for="">Pria/Wanita</label>
      <select name="gender" class="form-select" aria-label="Default select example">
        <option selected value="0">Pria dan wanita</option>
        <option value="1">Pria</option>
        <option value="2">Wanita</option>
      </select>
    </div>
    <div class="col-md-6">
      <label for="deskripsi" class="form-label">Deskripsi</label>
      <input type="text" class="form-control" name="deskripsi" id="deskripsi">
    </div>
 
    <div class="col-md-6 d-inline mb-3">
      <input type="checkbox" checked class="form-check-input" name="status">
     <label for="status">Status</label>
    </div>
    <div class="col-md-6 d-inline mb-3">
      <input type="checkbox" class="form-check-input" name="trending">
      <label for="trending">Trending</label>
    </div>
    
  

    <div class="col-md-3">
        <label for="harga_jual" class="form-label">Harga Jual</label>
        <input type="number"  class="form-control harga"  name="harga_jual" id="harga_jual" required>
      </div>

    <div class="col-md-3">
        <label for="jumlah" class="form-label">Jumlah</label>
        <input type="number" value="50" class="form-control"  name="jumlah" id="jumlah">
      </div>

    <div class="col-md-5 mt-2">
        <label for="image" class="form-label">Foto Produk</label>
        <input type="file"  class="form-control mb-2 @error('image') is-invalid @enderror" name="image" id="image" required>
        @error('image')
          <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    
  
    <div class="col-12 mt-4">
      <button type="submit" class="btn btnproduk">Tambah Produk</button>
    </div>
    </form>

 
@endsection
