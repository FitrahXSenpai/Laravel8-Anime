{{-- @dd($post); --}}

@extends('layouts.main')

@section('contents')
    <div class="row mb-5">
        <div class="col-xl-12 col-lg-12 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="px-3 py-3">
                        <h1 class="text-center">{{ $post->title }}</h1>
                        <h6 class="text-center">
                            <p><a class="texts" href="/daftar-anime?category={{ $post->category->slug }}">{{ $post->category->name }}</a>, {{ $post->genre }}</p>
                        </h6><hr>
                        <article class="mb-4">
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid card-img-top mb-3" alt="{{ $post->category->name }}" height="450px">
                            @else
                                <img src="../img/522621.jpg" class="img-fluid card-img-top mb-3" alt="{{ $post->category->name }}" height="450px">
                            @endif
                            {!! $post->body !!}
                        </article>
                        <div class="d-flex justify-content-around">
                            <div class="p-2">
                                <p><a class="btn btn-dark" href="/daftar-anime">&laquo; Back To Daftar Anime</a></p>
                            </div>
                            <div class="p-3">
                                <p>Posted By : <a class="texts" href="/daftar-anime?author={{ $post->author->username }}">{{ $post->author->name }}</a> In <a class="texts" href="/daftar-anime?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection