@extends('layouts.app')

@section('title', katalogs')

@section('content')

<form action="/katalogs/{{ $katalog['id'] }}" method="POST">
@csrf
@method('PUT')

    <div class="form-group">
        <label for="exampleInputNama">Nama Produk</label>
        <input type="text" class="form-control" id="exampleInputNama" name="nama" aria-describedby="emailHelp"> val
        @error('nama')
        <div class="alert alert-denger">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputNotlp">Persediaan</label>
        <input type="text" class="form-control" name="persediaan" id="exampleInputPersediaan" value="{{old('persediaan') ? old('persediaan') : $katalog['persediaan'] }}">
        @error('no_tlp')
        <div class="alert alert-denger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputHarga">Alamat</label>
        <input type="text" class="form-control" name="harga" id="exampleInputAlamat" value="{{old('harga') ? old('harga') : $katalogs['harga'] }}">
        @error('harga')
        <div class="alert alert-denger">{{$message}}</div>
        @enderror
    </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection