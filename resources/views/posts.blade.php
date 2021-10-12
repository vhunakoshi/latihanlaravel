@extends('components.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/blog">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{request('category')}}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{request('author')}}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{request('search')}}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>


    @if ($post->count())
        <div class="card mb-3">
            @if($posts[0]->image)
            <div style="max-height: 350px; overflow:hidden">
                <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-fluid" alt="{{$posts[0]->category->name}}">
            </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{$post[0]->category->name}}" class="card-img-top" alt="{{$posts[0]->category->name}}">
            @endif

            <div class="card-body text-center">
                <h3 class="card-title">
                <a href="/post/{{ $post[0]->slug }}" class="text-decoration-none text-dark">{{ $post[0]->title }}</a>
            </h3>
            <p>
                <small class="text-muted">
                    By. <a href="/blog?author={{$post[0]->author->username}}" class="text-decoration-none">{{ $post[0]->author->name }}</a> in <a href="/blog?category={{$post[0]->category->slug}}" class="text-decoration-none">{{$post[0]->category->name}}</a> {{ $post[0]->created_at->diffForHumans() }}
                </small>
            </p>
            <p class="card-text">{{ $post[0]->excerpt }}</p>
            <a href="/post/{{ $post[0]->slug }}" class="text-decoration-none btn btn-primary btn-sm">Read more..</a>
            </div>
        </div>

    <div class="container">
        <div class="row">
            @foreach ($post->skip(1) as $dat)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0,0,0,0.7)"><a href="/blog?category={{$dat->category->slug}}" class="text-white text-decoration-none">{{$dat->category->name}}</a></div>
                        @if($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{$post->category->name}}">
                        @else
                            <img src="https://source.unsplash.com/300x300?{{$dat->category->name}}" class="card-img-top" alt="{{$dat->category->name}}">
                        @endif
                        <div class="card-body">
                        <h3 class="card-title"<a href="/post/{{ $dat->slug }}" class="text-decoration-none">{{ $dat->title }}</a></h3>
                        <p>By. <a href="/blog?author={{$dat->author->username}}" class="text-decoration-none">{{ $dat->author->name }}</a>
                        <p class="card-text">{{ $dat->excerpt }}</p>
                        <a href="/post/{{ $dat->slug }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="d-flex justify-content-end">
        {{ $post->links() }}
    </div>
    {{-- <table class="table table-bordered table-responsive">
        <thead>
            <tr>
                <th>#</th>
                <th>Judul</th>
                <th>Author</th>
                <th>Details</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($post->skip(1) as $dat)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                        <a href="/post/{{ $dat->slug }}" class="text-decoration-none">{{ $dat->title }}</a>
                    </td>
                    <td>
                        <p>By. <a href="/authors/{{$dat->author->username}}" class="text-decoration-none">{{ $dat->author->name }}</a> in <a href="/categories/{{$dat->category->slug}}" class="text-decoration-none">{{$dat->category->name}}</p></a>
                    </td>
                    <td>
                        {{ $dat->excerpt }}
                        <a href="/post/{{ $dat->slug }}" class="text-decoration-none">Read more..</a>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table> --}}
@endsection