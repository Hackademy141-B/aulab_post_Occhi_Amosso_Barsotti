<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homePage') }}">Aulab Post</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Accedi
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                        <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                        <li><a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#form-logout').submit();">Logout</a></li>
                        <form id="form-logout" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                    </ul>
                </li>
            </ul> 
            @auth 
            Benvenuto, {{Auth::user()->name}}
            @else 
            Ciao Accedi
            @endauth 
        </div>
    </div>
</nav>

