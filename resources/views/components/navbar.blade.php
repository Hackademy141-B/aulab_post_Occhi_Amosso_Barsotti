<nav class="navbar navbar-expand-lg  bg-body-trasparent navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homePage') }}">Aulab Post</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-between w-100 mb-2 mb-lg-0">

                <li class="nav-item ">
                    <a class="nav-link" href="{{route('article.index')}}">Tutti gli articoli</a>
                </li>
                {{-- <li class="nav-item dropdown"> --}}
                  {{-- <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Accedi
                </a> --}}
                {{-- <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                  <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                </ul> --}}
              {{-- </li> --}}
            
              @auth 
              <li class="nav-item me-auto">
                <a class="nav-link" href="{{route('article.create')}}">Inserisci un articolo</a>
              </li>
            {{-- </ul>
                  <ul class="navbar-nav"> --}}
                    <li class="me-3 mt-2">Benvenuto, {{Auth::user()->name}}</li>
                    <li><a  type="button" class="btn btn-outline-dark mt-auto"  href="#" onclick="event.preventDefault();document.querySelector('#form-logout').submit();">Logout</a></li>
                    <form id="form-logout" class="d-none" action="{{ route('logout') }}" method="POST" >
                      @csrf
                    </form>
                    @else 
                    <a type="button" class="btn btn-outline-dark" href="{{ route('login') }}">Ciao Accedi</a> 
                    @endauth 
                  </ul >
        </div>
    </div>
</nav>

{{-- <nav class="navbar bg-body-trasparent fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('homePage') }}">Aulab Post</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Aulab Post</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('article.index')}}">Articoli</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('article.create')}}">Inserisci Articolo</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Accedi
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
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
            <a type="button" class="btn btn-outline-dark justify-content-center mb-5" href="{{ route('login') }}">Ciao Accedi</a> 
            @endauth 
          </ul>
        </div>
      </div>
    </div>
  </nav> --}}