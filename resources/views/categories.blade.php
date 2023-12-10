{{-- @dd($categories); --}}

@extends('layouts.main')

@section('contents')
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-sm-block">
            <div class="px-3 py-3">
                <div class="d-flex justify-content-start">
                    <h2 class="float-start mb-0">ANIME &raquo; <b>ALL CATEGORIES</b></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-2">
        @foreach ($categories as $category)
            <div class="col-lg-4 col-md-2">
                <a class="texts" href="/daftar-anime?category={{ $category->slug }}">
                    <div class="card bg-dark text-white mt-4">
                        <img src="../img/522621.jpg" class="img-fluid card-img-top" alt="{{ $category->name }}" height="250px">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-3 fs-3" style="background-color: rgba(0,0,0,0.7)">{{ $category->name }}</h5>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="px-3 py-3">
                <div class="d-flex justify-content-start">
                    <div class="p-2">
                        <p><a class="btn btn-dark" href="/daftar-anime">&laquo; Back To Daftar Anime</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection