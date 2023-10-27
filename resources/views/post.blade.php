@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post["title"] }}</h2>
        <h5>Oleh: {{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>

    <a href="/blog">Kembali ke Halaman Blog</a>
@endsection
