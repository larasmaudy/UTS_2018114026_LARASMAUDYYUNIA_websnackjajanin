@extends('layouts.app')

@section('title', 'cobaaa')

@section('content')
<div class='card'>
    <div class='cardbody'>
        <h3> Nama Produk :{{ $katalogs['nama'] }} </h3>
        <h3> Persediaan :{{ $katalogs['persediaan'] }} </h3>
        <h3> Harga :{{ $katalogs['harga'] }} </h3>
    </div>
</div>
@endsection
