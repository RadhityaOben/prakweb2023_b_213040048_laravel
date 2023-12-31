@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">

            <h1 class="mb-3">{{ $post->title }}</h1>
            <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

            <div style="max-height: 400px; overflow: hidden;">
                @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
                @endif
            </div>

            <article class="my-3 fs-6">
                {!! $post->body !!}
            </article>

            <a href="/posts" class="display-block mt-3 text-decoration-none">Kembali ke Halaman Blog</a>
        </div>
    </div>
</div>

@endsection
