@extends('dashboard.layouts.main')

@section('content')
    <div class="row mt-4 mb-3">
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="px-3 py-3">
                <h2 class="float-start mb-0">Dashboard &raquo; <b>Daftar Categories</b></h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="px-3 py-3">
                <h3 class="text-center mb-0">DAFTAR CATEGORIES</h3>
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
                <a href="/dashboard/categories/create" class="btn btn-primary block-btn mb-3"><i class="bi bi-file-earmark-plus-fill"></i> Create New Category</a>
                <div class="table-responsive">
                    <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align: center;">No</th>
                                <th scope="col" style="text-align: center;">Category Name</th>
                                <th scope="col" style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td scope="row" style="text-align: center;">{{ $loop->iteration }}</td>
                                <td style="text-align: center;">{{ $category->name }}</td>
                                <td style="text-align: center;">
                                    <a href="/dashboard/categories/{{ $category->slug }}/edit" class="text-warning"><i class="bi bi-pencil-square"></i></a>
                                    <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="text-danger border-0" onclick="return confirm('Are You Sure You Want To Delete This Category?')"><i class="bi bi-trash3"></i></button>
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