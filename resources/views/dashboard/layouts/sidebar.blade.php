<?php
use \Illuminate\Support\Facades\Request;
?>

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
                    <img src="{{ asset('feather/home.svg') }}" alt="">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('dashboard/posts') ? 'active' : ''}}" href="/dashboard/posts">
                    <img src="{{ asset('feather/file-text.svg') }}" alt="">
                    Posts
                </a>
            </li>
        </ul>

        <h6
            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Saved reports</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle" class="align-text-bottom"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="{{ asset('feather/file-text.svg') }}" alt="">
                    Current month
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="{{ asset('feather/file-text.svg') }}" alt="">

                    Last quarter
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="{{ asset('feather/file-text.svg') }}" alt="">

                    Social engagement
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="{{ asset('feather/file-text.svg') }}" alt="">

                    Year-end sale
                </a>
            </li>
        </ul>
    </div>
</nav>
