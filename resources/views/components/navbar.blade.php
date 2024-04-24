
  <nav id="navbar" class="navbar nav-bar fixed-top w-100 px-3 navbar-expand-lg bg-body-trasparent  navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('homePage') }}">Aulab Post</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex justify-content-between w-100 mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('article.index') }}">Tutti gli articoli</a>
          </li>
              @auth 
              @if(Auth::user()->is_admin)
              <li class="nav-item">
                <a class="nav-link" href="{{route('admin.dashboard')}}">Dashboard Admin</a>
              </li>
              @endIf
              @if(Auth::user()->is_revisor)
              <li class="nav-item">
                <a class="nav-link" href="{{route('revisor.dashboard')}}">Dashboard dal revisore</a>
              </li>
              @endIf
              <li class="nav-item ">
                <a class="nav-link" href="{{route('careers')}}">Lavora con noi</a>
             </li>
              <li class="nav-item me-auto ">
                <a class="nav-link" href="{{route('article.create')}}">Inserisci un articolo</a>
              </li>
        </ul>
        <form action="{{route('article.search')}}" method="GET" class="search p-0 ps-2 " id="search-bar">
          <input type="search" placeholder="Cosa Stai Cercando?" class="search__input">
          <div class="search__button" id="search-button">
            <i class="bi bi-search search__icon"></i>
            <i class="bi bi-x-lg search__close"></i>
          </div>
        </form>
        <div class=" ms-3">
          <ul class="navbar-nav"> 
            <li class="me-2 mt-2 small">Benvenuto, {{ Auth::user()->name }}</li>
            <li class="mt-2"><a type="button" class="btn btn-outline-dark mt-auto" href="#"
                    onclick="event.preventDefault();document.querySelector('#form-logout').submit();"><i class="bi bi-box-arrow-right"></i></a>
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
  {{-- <li>
    <form class="d-flex" method="GET" action="{{route('article.search')}}">
      <input class="search__input " id="search-bar" type="search" name="query" placeholder="Cosa stai cercando?" aria-label="Search">
      <div class=" btn me-5"  type="submit">
    
  
      </div>
    </form>                
  </li> --}}