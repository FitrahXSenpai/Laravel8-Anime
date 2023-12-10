{{-- @dd($posts); --}}

@extends('layouts.main')

@section('contents')
    <div class="row mb-3 mb-xl-3">
        <div class="col-xl-12 col-lg-12 col-12">
            <div class="px-3 py-3">
                <div class="d-flex justify-content-around">
                    <div class="p-2">
                        <h2 class="float-start mb-0">{!! $tags !!}</h2>
                    </div>
                    <div class="p-2">
                        <form action="/daftar-anime" method="get">
                            @if (request('category'))
                                <input type="hidden" name="category" value="{{ request('category') }}">
                            @endif
                            @if (request('author'))
                                <input type="hidden" name="author" value="{{ request('author') }}">
                            @endif
                            <div class="input-group mb-3">
                                <input type="text" name="search" class="form-control" placeholder="Search" value="{{ request('search') }}" autocomplete="off" autofocus>
                                <button type="submit" class="btn btn-dark">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-12">
            <div class="d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>

    @if ($posts->count())
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-12">
                <div class="card mt-4">
                    <div class="card-content">
                        <div class="px-3 py-3">
                            <article class="mb-6 pb-2">
                                <div class="card bg-dark text-white mt-4">
                                    @if ($posts[0]->image)
                                        <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-fluid card-img-top" alt="{{ $posts[0]->category->name }}" height="450px">
                                    @else
                                        <img src="../img/522621.jpg" class="img-fluid card-img-top" alt="{{ $posts[0]->category->name }}" height="450px">
                                    @endif
                                    <div class="card-img-overlay d-flex align-items-center p-0">
                                        <h5 class="card-title text-center flex-fill p-3 fs-3" style="background-color: rgba(0,0,0,0.7)">{{ $posts[0]->title }}</h5>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <hr><h1 class="card-title text-center">
                                        <p><a class="stexts" href="/anime/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></p>
                                    </h1>
                                    <h6 class="card-title text-center">
                                        <p><a class="texts" href="/daftar-anime?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>, {{ $posts[0]->genre }}</p>
                                    </h6><hr>
                                    <p class="card-text">{{ $posts[0]->excerpt }}</p>
                                    <div class="d-flex justify-content-around">
                                        <div class="p-2">
                                            <p><a class="btn btn-dark" href="/anime/{{ $posts[0]->slug }}">Read More &raquo;</a></p>
                                        </div>
                                        <div class="p-3">
                                            <p>Posted By : <a class="texts" href="/daftar-anime?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="row mb-5">
        @foreach ($posts->skip(1) as $post)
            <div class="col-lg-6 col-md-6">
                <div class="card mt-4">
                    <div class="card-content">
                        <div class="px-3 py-3">
                            <article class="mb-6 pb-2">
                                <div class="card bg-dark text-white mt-4">
                                    @if ($post->image)
                                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid card-img-top" alt="{{ $post->category->name }}" height="450px">
                                    @else
                                        <img src="../img/522621.jpg" class="img-fluid card-img-top" alt="{{ $post->category->name }}" height="450px">
                                    @endif
                                    <div class="card-img-overlay d-flex align-items-center p-0">
                                        <h5 class="card-title text-center flex-fill p-3 fs-3" style="background-color: rgba(0,0,0,0.7)">{{ $post->title }}</h5>
                                    </div>
                                </div>
                                <hr><h1 class="text-center">
                                    <p><a class="stexts" href="/anime/{{ $post->slug }}">{{ $post->title }}</a></p>
                                </h1>
                                <h6 class="text-center">
                                    <p><a class="texts" href="/daftar-anime?category={{ $post->category->slug }}">{{ $post->category->name }}</a>, {{ $post->genre }}</p>
                                </h6><hr>
                                <p>{{ $post->excerpt }}</p>
                                <div class="d-flex justify-content-around">
                                    <div class="p-2">
                                        <p><a class="btn btn-dark" href="/anime/{{ $post->slug }}">Read More &raquo;</a></p>
                                    </div>
                                    <div class="p-3">
                                        <p>Posted By : <a class="texts" href="/daftar-anime?author={{ $post->author->username }}">{{ $post->author->name }}</a>  {{ $post->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @else
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-12">
                <div class="px-3 py-3">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <h2 style="color: red; font-style: italic; font-size: 20px; text-align: center;">POST NOT FOUND</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="row mb-5">
        <div class="col-xl-12 col-lg-12 col-12">
            <div class="d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
    
@endsection