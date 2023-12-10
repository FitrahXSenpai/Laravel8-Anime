@extends('dashboard.layouts.main')

@section('content')
    <div class="row mt-4 mb-3">
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="px-3 py-3">
                <h2 class="float-start mb-0">Dashboard &raquo; <b>Daftar Anime</b></h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="px-3 py-3">
                <h3 class="text-center mb-0">DAFTAR ANIME</h3>
            </div>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="px-3 py-3">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> 
                @endif
                @if (session()->has('delete'))
                    <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                        {{ session('delete') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> 
                @endif
                <a href="/dashboard/daftar-anime/create" class="btn btn-primary block-btn mb-3"><i class="bi bi-file-earmark-plus-fill"></i> Create New Data</a>
                <div class="table-responsive">
                    <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align: center;">No</th>
                                <th scope="col" style="text-align: center;">Title</th>
                                <th scope="col" style="text-align: center;">Genre</th>
                                <th scope="col" style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td scope="row" style="text-align: center;">{{ $loop->iteration }}</td>
                                <td style="text-align: center;">{{ $post->title }}</td>
                                <td style="text-align: center;">{{ $post->category->name }}, {{ $post->genre }}</td>
                                <td style="text-align: center;">
                                    <a href="/dashboard/daftar-anime/{{ $post->slug }}" class="text-info"><i class="bi bi-eye-fill"></i></a>
                                    <a href="/dashboard/daftar-anime/{{ $post->slug }}/edit" class="text-warning"><i class="bi bi-pencil-square"></i></a>
                                    <form action="/dashboard/daftar-anime/{{ $post->slug }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="text-danger border-0" onclick="return confirm('Are You Sure You Want To Delete This Data?')"><i class="bi bi-trash3"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection