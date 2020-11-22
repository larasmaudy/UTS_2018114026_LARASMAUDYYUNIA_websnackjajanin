@extends('layouts.app')

@section('title', 'Katalogs')

@section('content')
<form action="/katalogs" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputNama">Nama Produk</label>
    <input type="text" class="form-control" id="exampleInputNama" name="nama" aria-describedby="emailHelp" value="{{old('nama')}}">
    @error('nama')
    <div class="alert alert-denger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputNotlp">Persediaan</label>
    <input type="text" class="form-control" name="persediaan" id="exampleInputPersediaan" value="{{old('persediaan')}}">
    @error('persediaan')
    <div class="alert alert-denger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputAlamat">Harga</label>
    <input type="text" class="form-control" name="harga" id="exampleInputHarga">
    @error('harga')
    <div class="alert alert-denger">{{$message}}</div>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection