@extends('components.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3">{{ $post->title }}</h2>
            <p>By. <a href="/blog?author={{$post->author->username}}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/blog?category={{$post->category->slug}}"  class="text-decoration-none">{{$post->category->name}}</p></a>
            @if($post->image)
            <div style="max-height: 350px; overflow:hidden">
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{$post->category->name}}">
            </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" class="img-fluid" alt="{{$post->category->name}}">
            @endif
            <article class="my-3 fs-5">
                {!! $post->content !!}
            </article>
            <a href="/blog" class="d-block mt-3 text-decoration-none">Back to Post</a>
        </div>
    </div>
</div>
@endsection