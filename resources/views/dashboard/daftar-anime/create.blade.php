@extends('dashboard.layouts.main')

@section('content')
    <div class="row mt-4 mb-3">
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="px-3 py-3">
                <h2 class="float-start mb-0">Dashboard &raquo; <b>Create New Data Anime</b></h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="px-3 py-3">
                <h3 class="text-center mb-0">CREATE NEW DATA ANIME</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="px-3 py-3">
                <form action="/dashboard/daftar-anime" method="post" enctype="multipart/form-data" class="mb-5">
                    @csrf
                    <div class="table-responsive">
                        <table class="table" cellpadding="10" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="text-align: center;"><label for="title" style="font-size: 20px;">Title Anime</label></th>
                                    <th style="text-align: center;"><label for="slug" style="font-size: 20px;">Slug Anime</label></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center;"><input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title" value="{{ old('title') }}" autofocus required>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    </td>
                                    <td style="text-align: center;"><input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" placeholder="Slug" value="{{ old('slug') }}" required>
                                    @error('slug')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    </td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th style="text-align: center;"><label for="genre" style="font-size: 20px;">Genre Anime</label></th>
                                    <th style="text-align: center;"><label for="category" style="font-size: 20px;">Category Anime</label></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center;"><input type="text" name="genre" id="genre" class="form-control @error('genre') is-invalid @enderror" placeholder="Genre" value="{{ old('genre') }}" required>
                                    @error('genre')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    </td>
                                    <td style="text-align: center;">
                                        <div class="input-group mb-3">
                                            <select class="form-select text-center" name="category_id" id="category">
                                                @foreach ($categories as $category)
                                                    {{-- <option value="{{ $category->id }}"  {{ old('category_id') == $category->id ? ' selected' : ' ' }}> --}}
                                                    @if (old('category_id') == $category->id)
                                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                                    @else
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            <label class="input-group-text" for="category">Options</label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th style="text-align: center;" colspan="2">
                                        <label for="image" style="font-size: 20px;">Upload Image</label>
                                        <img src="" alt="" class="img-preview img-fluid d-block rounded mx-auto mt-2 mb-2" width="250">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center;" colspan="2">
                                        <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" onchange="previewImage()">
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <label for="body" class="d-block text-center mb-3" style="font-size: 20px;"><b>Body Anime</b></label>
                    <input type="hidden" name="body" id="body" class="form-control" value="{{ old('body') }}">
                    <trix-editor class="mb-2" input="body" id="body"></trix-editor>
                    @error('body')
                        <p class="text-danger text-center mt-1 mb-1">{{ $message }}</p>
                    @enderror
                    <button type="submit" class="btn btn-dark block-btn mt-2">Create New Data</button>
                </form>
            </div>
        </div>
    </div>
    <script>

        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/daftar-anime/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0]);
            
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
        
    </script>
@endsection