@extends('layouts.app')

@section('title', 'katalogs')

@section('content')

@foreach ($katalogs as @katalog)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/katalogs/{{ $katalog['id'] }}" class="card-title">{{ $katalog['nama'] }}</a>
    <p class="card-subtitle mb-2 text-muted">{{ $katalog['persediaan'] }}</p>
    <p class="card-text">{{ $katalog['harga'] }}</p>

    <a href="/katalogs/{{ $katalog['id'] }}/edit" class="card-link" btn-Warning>Update</a>
    <a href="#" class="card-link" btn-denger>Delete</a>
  </div>
</div>

@endforeach 
<div>
    {{ $katalogs->LINKS()}};
</div>
@endsection