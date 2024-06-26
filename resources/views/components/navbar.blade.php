<nav id="navbar" class="navbar nav-bar fixed-top w-100 px-3 navbar-expand-lg bg-body-trasparent  navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand mb-1" href="{{ route('homePage') }}">Aulab Post</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-between w-100 mb-2 mb-lg-0">
                <div class="nav-item d-flex">
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('article.index') }}">Tutti gli articoli</a>
                    </li>
                    <li>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Categorie
                            </a>

                            <ul class="dropdown-menu dropdown-menu-dark">
                                @foreach ($categories as $category)
                                    <li><a class="dropdown dropdown-item"
                                            href= "{{ route('article.byCategory', compact('category')) }}">
                                            {{ $category->name }} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                </div>
                @auth
                    @if (Auth::user()->is_admin)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard Admin</a>
                        </li>
                    @endIf
                    @if (Auth::user()->is_revisor)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('revisor.dashboard') }}">Dashboard dal revisore</a>
                        </li>
                    @endIf
                    @if (Auth::user()->is_writer)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('writer.dashboard') }}">Dashboard dal redattore</a>
                        </li>
                    @endIf
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('careers') }}">Lavora con noi</a>
                    </li>
                    <li class="nav-item me-auto ">
                        <a class="nav-link" href="{{ route('article.create') }}">Inserisci un articolo</a>
                    </li>
                </ul>
                <form action="{{ route('article.search') }}" method="GET" class="search p-0 ps-2 " id="search-bar">
                    <input type="search" name="query" aria-label="Search" placeholder="Cosa Stai Cercando?"
                        class="search__input">
                    <div class="search__button" type="submit" id="search-button">
                        <i class="bi bi-search search__icon"></i>
                        <i class="bi bi-x-lg search__close"></i>
                    </div>
                </form>
                <div class=" ms-3">
                    <ul class="navbar-nav">
                        <li class="me-2 mt-2 small">Benvenuto, {{ Auth::user()->name }}</li>
                        <li class="mt-2"><a type="button" class="btn btn-outline-dark mt-auto" href="#"
                                onclick="event.preventDefault();document.querySelector('#form-logout').submit();"><i
                                    class="bi bi-box-arrow-right"></i></a>
                        </li>
                        <form id="form-logout" class="d-none" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    @else
                        <a type="button" class="btn btn-outline-dark mt-2" href="{{ route('login') }}"><i
                                class="bi bi-box-arrow-in-right"> </i>Accedi</a>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</nav>
