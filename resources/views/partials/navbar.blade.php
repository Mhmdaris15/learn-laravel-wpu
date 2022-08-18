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
                {{-- <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>