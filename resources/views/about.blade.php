@extends('layouts.main')

@section('contents')
    <div class="row mt-5">
        <div class="col-xl-12 col-lg-12 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="px-3 py-3">
                        <div class="text-center">
                            <div class="profile_info">
                                <img src="img/{{ $image }}" alt="{{ $name }}" class="profile_image">
                                <h4>{{ $name }}</h4>
                                <h4>{{ $email }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection