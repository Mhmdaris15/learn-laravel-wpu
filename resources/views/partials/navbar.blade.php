<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">ArisLaravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {!! ($title == 'Home') ? 'active': '' !!}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {!! ($title == 'About') ? 'active': '' !!}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {!! ($title == 'Blog') ? 'active': '' !!}" href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {!! ($title == 'Post Categories') ? 'active': '' !!}"
                        href="/categories">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {!! ($title == 'Users') ? 'active': '' !!}" href="/authors">Authors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {!! ($title == 'Welcome') ? 'active': '' !!}" href="/welcome">Welcome</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {!! ($title == 'Dashboard') ? 'active': '' !!}" href="/dashboard">Dashboard</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> --}}
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                        <li><a class="dropdown-item" href="/dashboard/settings">Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="text-decoration-none nav-link {!! ($title == 'Login') ? 'active': '' !!}"
                            href="/login"><i class="bi bi-box-arrow-in-right"></i>Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-decoration-none nav-link {!! ($title == 'Register') ? 'active': '' !!}"
                            href="/register"><i class="bi bi-r-circle-fill"></i>Register</a>
                    </li>
                </ul>
                @endauth
        </div>
    </div>
</nav>
