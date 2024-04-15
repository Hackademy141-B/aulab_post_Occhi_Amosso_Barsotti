<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homePage')}}">Aulab Post</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Accedi
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
              <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
              <form action=""></form>

            </ul>
          </li>
        </div>
        </div>
        </nav>
          
{{-- @auth
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toogle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Benvenuto {{ Auth::user()->name }}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href=""></a>Profilo</li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href=""
                    onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
            <form method="post" action="{{ route('logout') }}" id="form-logout" class="d-none">@csrf</form>
        </ul>
    </li>

@endauth --}}



