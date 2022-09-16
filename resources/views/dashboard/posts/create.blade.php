@extends('dashboard.layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-4">
{{--if create form--}}
                @if (Request::is('dashboard/posts/create'))
                <form class="col-lg-8" method="post" action="/dashboard/posts" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="mb-3">
                        <label for="title" class="form-label text-light">Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}" required>
                        @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label text-light">Slug</label>
                        <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" value="{{ old('slug') }}" required>
                        @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label text-light">Category</label>
                        <select class="form-select" name="category">
                            @foreach ($categories as $category)
                                @if($category->id == old('category'))
                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                @else
                                    <option value="{{ $category->id }}" class="bg-warning">{{ $category->name }}</option>
                                @endif
                            @endforeach

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label text-light">Input your Image here</label>
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                        @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <label for="content" class="form-label text-light">Content</label>
                    <div class="mb-3 bg-light p-2 rounded">
                        <input id="content" type="hidden" name="content">
                        @if($errors->has('content'))
                            <div class="alert alert-danger" role="alert">
                                <i data-feather="alert-triangle"></i> {{ $errors->first('content') }}
                            </div>
                        @endif
                        <trix-editor input="content"></trix-editor>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>

                @else
                <form class="col-lg-8" method="post" action="/dashboard/posts/{{ $post->slug }}">
                        @method('put')
                        @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="mb-3">
                            <label for="title" class="form-label text-light">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title', $post->title) }}" required>
                            @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label text-light">Slug</label>
                            <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" value="{{ old('slug', $post->slug) }}" required>
                            @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label text-light">Category</label>
                            <select class="form-select" name="category">
                                @foreach ($categories as $category)
                                    @if($category->id == old('category', $post->category_id))
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                        <option value="{{ $category->id }}" class="bg-warning">{{ $category->name }}</option>
                                    @endif
                                @endforeach

                            </select>
                        </div>
                        <label for="content" class="form-label text-light">Content</label>
                        <div class="mb-3 bg-light p-2 rounded">
                            <input id="content" type="hidden" name="content" value="{{ old('content', $post->content) }}">
                            @if($errors->has('content'))
                                <div class="alert alert-danger" role="alert">
                                    <i data-feather="alert-triangle"></i> {{ $errors->first('content') }}
                                </div>
                            @endif
                            <trix-editor input="content"></trix-editor>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <main />
                </form>
                @endif
            <main />
        <div />
    <div />
    <script>
        const title = document.getElementById('title');
        const slug = document.getElementById('slug');

        title.addEventListener('keyup', function () {
            slug.value = convertToSlug(title.value);
        })


        function convertToSlug(Text) {
            return Text.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
        }
    </script>
@endsection
