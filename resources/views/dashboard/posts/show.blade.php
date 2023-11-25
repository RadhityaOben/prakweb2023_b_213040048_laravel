@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-5">
        <div class="col-lg-8">

            <h1 class="mb-3">{{ $post->title }}</h1>
            <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i> Back to my posts</a>
            <a href="" class="btn btn-warning"><i class="bi bi-pencil"></i> Edit</a>
            <a href="" class="btn btn-danger"><i class="bi bi-x-circle"></i> Delete</a>

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">

            <article class="my-3 fs-6">
                {!! $post->body !!}
            </article>

        </div>
    </div>
</div>
@endsection
