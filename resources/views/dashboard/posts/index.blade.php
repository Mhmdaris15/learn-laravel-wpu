@extends('dashboard.layouts.main')

@section('content')



    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2 text-light">Welcome to Your Dashboard! {{ Auth::user()->name }}</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-secondary dropdown-toggle">
                            <span data-feather="calendar" class="align-text-bottom"></span>
                            This week
                        </button>
                    </div>
                </div>
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="table-responsive">
                    <a href="/dashboard/posts/create" class="btn btn-info">Create New Post</a>
                    <table class="table table-striped table-sm rounded my-2">
                        <thead class="bg-warning rounded">
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody class="bg-success">
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $loop->iteration }}}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->slug }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>{{ $post->author->name }}</td>
                                <td>
                                    <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info text-decoration-none">
                                        <img src="{{ asset('/feather/eye.svg') }}" alt="Show"> <span data-feather="eye"></span> Show</a>
                                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning text-decoration-none">
                                        <img src="{{ asset('/feather/edit.svg') }}" alt="Edit"> Edit</a>
                                    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline-block">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="badge bg-danger border-0 d-inline-block">
                                            <img src="{{ asset('/feather/trash-2.svg') }}" alt="Delete"> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </main>
        </div>
    </div>



@endsection
