@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="mb-3">{{ $post->title }}</h2>
            
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to All My Posts</a>
            <a href="/dashboard/posts/{{$post->slug}}/edit" class="btn btn-warning"><span data-feather="arrow-left"></span> Edit</a>
            <form action="/dashboard/posts/{{$post->slug}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0" onclick="return confirm('Are you sure')"><span data-feather="arrow-left"></span> Delete</button>
            </form>

            <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" class="img-fluid mt-3" alt="{{$post->category->name}}">
            <article class="my-3 fs-5">
                {!! $post->content !!}
            </article>
            <a href="/blog" class="d-block mt-3 text-decoration-none">Back to Post</a>
        </div>
    </div>
</div>
@endsection