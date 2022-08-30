@extends('dashboard.layouts.admin')

@section('conten')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Produk</h1>

</div>
<form method="POST" action="{{ url('update-produk/'.$produk->id) }}"   enctype="multipart/form-data">
   
  @csrf
  @method('PUT')
  <div class="row">
      <div class="col-md-12">
        <select  class="form-select"  aria-label="Default select example">
            <option  value="">{{ $produk->category->name }}</option>
          </select>
      </div>
    <div class="col-md-6">
      <label for="name" class="form-label">Nama Produk</label>
      <input type="text"  class="form-control" value="{{ $produk->name }}"  name="name" id="name">
    </div>
    
    <div class="col-md-6">
      <label for="slug" class="form-label">slug</label>
      <input type="text" value="{{ $produk->slug }}"  class="form-control"  name="slug" id="slug">
    </div>
    <div class="col-md-6">
      <label for="">Pria/Wanita</label>
      <select name="gender" class="form-select" aria-label="Default select example">
        <option  {{ $produk->gender=='0' ? 'selected':'' }}   value="0">Pria dan Wanita</option>
        <option  {{ $produk->gender=='1' ? 'selected':'' }}  value="1">Pria</option>
        <option  {{ $produk->gender=='2' ? 'selected':'' }}  value="2">Wanita</option>
      </select>
    </div>
    <div class="col-md-6">
      <label for="deskripsi" class="form-label">Deskripsi</label>
      <input type="text"  value="{{ $produk->deskripsi }}" class="form-control" name="deskripsi" id="deskripsi" ">
    </div>
 
    <div class="col-md-6 d-inline mb-3">
      <input type="checkbox" {{ $produk->status == "1" ? 'checked' : '' }} class="form-check-input" name="status">
     <label for="status">Status</label>
    </div>
    <div class="col-md-6 d-inline mb-3">
      <input type="checkbox" {{ $produk->trending == "1" ? 'checked':'' }} class="form-check-input" name="trending">
      <label for="trending">trending</label>
    </div>
    


    <div class="col-md-3">
        <label for="harga_jual" class="form-label">Harga Jual</label>
        <input type="number" value="{{ $produk->harga_jual }}"  class="form-control"  name="harga_jual" id="harga_jual">
      </div>

    <div class="col-md-3">
        <label for="jumlah" class="form-label">Jumlah</label>
        <input type="number" value="{{ $produk->qty }}"  class="form-control"  name="jumlah" id="jumlah">
      </div>

    
    <div class="col-md-5 mt-2">
        @if ($produk->image)
        <img src="{{ asset('assets/uploads/produk/'.$produk->image) }}" width="80px" alt="Produk image">
         @endif
        <label for="image" class="form-label">Foto produk</label>
        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" >
        @error('image')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    
  
    <div class="col-12 mt-4">
      <button type="submit" class="btn btnproduk">Simpan <i class="fa-regular fa-floppy-disk"></i></button>
      <a href="{{ url('produk') }}" class="btn btnproduk">Batal</a>
    </div>
    </form>

 
@endsection