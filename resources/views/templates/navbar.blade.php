<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">Zydane's Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Homepage' ? 'active' : '' }}" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Post Page' ? 'active' : '' }}" href="/post">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Book Page' ? 'active' : '' }}" href="/book">book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'My Book Page' ? 'active' : '' }}" href="/book/me">my books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'About Me' ? 'active' : '' }}" href="/about">about</a>
                </li>

            </ul>
            <form action="/logout" method="post">
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                {{ $user['name'] }}
                <button class="btn btn-primary">Log Out</button>
            </form>
        </div>
    </div>
</nav>
