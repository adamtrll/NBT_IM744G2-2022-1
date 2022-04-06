<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="link-secondary" href="#">Subscribe</a>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="{{ route('home') }}">
                    {{ config('app.name') }}
                </a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="link-secondary" href="#" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img"
                        viewBox="0 0 24 24">
                        <title>Search</title>
                        <circle cx="10.5" cy="10.5" r="7.5" />
                        <path d="M21 21l-5.2-5.2" />
                    </svg>
                </a>
                @auth
                    <a class="btn btn-sm btn-primary" href="{{ route('post.create') }}">
                        {{ __('Publish') }}
                    </a>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="rounded-circle me-2" width="25" src="{{ Auth::user()->avatar }}" />
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="#">
                                    {{ __('Profile') }}
                                </a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item" type="submit">
                                        {{ __('Sign out') }}
                                    </button>
                                </form>
                            </li>
                        </ul>
                      </div>
                @else
                    <a class="btn btn-sm btn-outline-secondary" href="{{ route('login') }}">
                        {{ __('Sign in') }}
                    </a>
                    <a class="btn btn-sm btn-success ms-2" href="{{ route('register') }}">
                        {{ __('Sign up') }}
                    </a>
                @endauth
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            @foreach ($topics as $topic)
                <a class="p-2 link-secondary" href="#">
                    {{ $topic->title }}
                </a>
            @endforeach
        </nav>
    </div>
</div>
