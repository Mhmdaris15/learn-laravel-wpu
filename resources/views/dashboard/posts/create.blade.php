@extends('dashboard.layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <form class="col-lg-8" method="post" action="/dashboard/posts">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="mb-3">
                        <label for="title" class="form-label text-light">Title</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label text-light">Slug</label>
                        <input type="text" name="slug" class="form-control" id="slug">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label text-light">Category</label>
                        <select class="form-select" name="category">
                            <option selected>Open this select menu</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" class="bg-warning">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <label for="content" class="form-label text-light">Content</label>
                    <div class="mb-3 bg-light p-2 rounded">
                        <input id="content" type="hidden" name="content">
                        <trix-editor input="content"></trix-editor>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
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
