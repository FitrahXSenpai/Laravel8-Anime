@extends('dashboard.layouts.main')

@section('content')
    <div class="row mt-4 mb-4">
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="px-3 py-3">
                <h1 class="text-center">{{ $post->title }}</h1>
                <h6 class="text-center">
                    <p><a class="texts" href="/dashboard/daftar-anime?category={{ $post->category->slug }}">{{ $post->category->name }}</a>, {{ $post->genre }}</p>
                </h6><hr>
                <div class="d-flex">
                    <div class="me-auto p-1"><p><a href="/dashboard/daftar-anime" class="btn btn-dark">&laquo; Back To Daftar Anime</a></p></div>
                    <div class="p-1"><p><a href="/dashboard/daftar-anime/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a></p></div>
                    <div class="p-1">
                        <form action="/dashboard/daftar-anime/{{ $post->slug }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm('Are You Sure You Want To Delete This Data?')"><i class="bi bi-trash3"></i> Delete</button>
                        </form>
                    </div>
                </div>
                <article class="mb-4">
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid card-img-top mb-3" alt="{{ $post->category->name }}" height="450px">
                    @else
                        <img src="../../img/522621.jpg" class="img-fluid card-img-top mb-3" alt="{{ $post->category->name }}" height="450px">
                    @endif
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection