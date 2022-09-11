@extends('dashboard.layouts.main')

@section('content')

<div class="container-fluid">
    <div class="row">
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
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



        </main>
    </div>
</div>



@endsection