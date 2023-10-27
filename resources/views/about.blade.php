@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="rounded-circle shadow">
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
@endsection
