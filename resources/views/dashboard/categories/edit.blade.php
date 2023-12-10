@extends('dashboard.layouts.main')

@section('content')
    <div class="row mt-4 mb-3">
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="px-3 py-3">
                <h2 class="float-start mb-0">Dashboard &raquo; <b>Edit Category</b></h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="px-3 py-3">
                <h3 class="text-center mb-0">EDIT CATEGORY</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="px-3 py-3">
                <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="mb-5">
                    @method('put')
                    @csrf
                    <div class="table-responsive">
                        <table class="table" cellpadding="10" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="text-align: center;"><label for="name" style="font-size: 20px;">Category Anime</label></th>
                                    <th style="text-align: center;"><label for="slug" style="font-size: 20px;">Slug Anime</label></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center;"><input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Category" value="{{ old('name', $category->name) }}" autofocus required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    </td>
                                    <td style="text-align: center;"><input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" placeholder="Slug" value="{{ old('slug', $category->slug) }}" required>
                                    @error('slug')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <button type="submit" class="btn btn-dark block-btn mt-2">Category Data</button>
                </form>
            </div>
        </div>
    </div>
    <script>

        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('change', function() {
            fetch('/dashboard/categories/checkSlugCategory?name=' + name.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
        
    </script>
@endsection