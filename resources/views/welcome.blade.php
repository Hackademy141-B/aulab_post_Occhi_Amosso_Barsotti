<x-layout>

    {{-- <div class="container-fluid  text-center text-dark">
        <div id="title" class="display-2">
          Prima pagina
        </div>
    </div> --}}

    @if (session('message'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
    @endif

    <section class="hero">
        <div class="hero-text">
            <h1 class="fade-in">AuLab Post</h1>
            <h2 class="fade-in">Create your article, for free</h2>
            <p class="fade-in">Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>

        </div>
        {{-- <div class="hero-img">
            <img src="./img1.png" alt="">
        </div> --}}
    </section>

    {{-- <div class="container my-5 ">
        <div class="row justify-content-around">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3">
                    <div class="card">
                        <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text">{{$article->subtitle}}</p>
                            <p class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</p>
                        </div>
                        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                            Redatto il {{ $article->created_at->format('d/m/Y') }} da {{ $article->user->name }}
                            <a href="{{route('article.show', compact('article'))}}" class="btn btn-outline-dark ">Leggi</a>
                            <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}" class="small text-muted fst-italic text-capitalize">{{ $article->category->name }}</a>
                            <a href="{{ route('article.byRedactor', ['user' => $article->user->id]) }}" class="small text-muted fst-italic text-capitalize">  {{ $article->user->name }}</a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div> --}}
    <div class="box">
        <div class="boxtitle  text-center  pt-3 d-flex justify-content-center">
            <h1 class="title pt-3  blockquote-4">Articoli</h1>
        </div>
        <div id="carouselExampleInterval" class="carousel slide carousel-dark" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <div class="cards-wrapper">
                        <div class="container my-5">
                            <div class="row justify-content-around ">
                                @foreach ($articles as $article)
                                    <div class="col-10 col-md-3 my-2 ">
                                        <div class="card  shadow  border border-3  rounded-4">
                                            <img class="img-thumbnail border border-0 rounded-4 card-img-top h-img"
                                                src="{{ Storage::url($article->img) }}" alt="">
                                            <div class="card-body ">
                                                <h5 class="card-title text-truncate">{{ $article->title }}</h5>
                                                <p class="card-text text-truncate">{{ $article->subtitle }}</p>
                                                <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}"
                                                    class="small text-muted  text-capitalize text-truncate">{{ $article->category->name }}</a>
                                                <a href="{{ route('article.byRedactor', ['user' => $article->user->id]) }}"
                                                    class="small text-muted  text-capitalize text-truncate">
                                                    {{ $article->user->name }}</a>
                                                <p class="small text-muted  text-capitalize">
                                                    {{ $article->category->name }}</p>
                                                <div
                                                    class="text-muted d-none d-flex justify-content-between align-items-center">
                                                    Redatto il {{ $article->created_at->format('d/m/Y') }} da
                                                    {{ $article->user->name }}
                                                </div>
                                                <a href="{{ route('article.show', compact('article')) }}"
                                                    class="btn btn-secondary ">Leggi</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <div class="cards-wrapper">
                        <div class="container  my-5">
                            <div class="row  justify-content-around ">
                                @foreach ($articles as $article)
                                    <div class="col-10 col-md-3 my-2 ">
                                        <div class="card  shadow  border border-3  rounded-4">
                                            <img class="img-thumbnail border border-0 rounded-4 card-img-top h-img"
                                                src="{{ Storage::url($article->img) }}" alt="">
                                            <div class="card-body ">
                                                <h5 class="card-title text-truncate">{{ $article->title }}</h5>
                                                <p class="card-text text-truncate">{{ $article->subtitle }}</p>
                                                <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}"
                                                    class="small text-muted  text-capitalize text-truncate">{{ $article->category->name }}</a>
                                                <a href="{{ route('article.byRedactor', ['user' => $article->user->id]) }}"
                                                    class="small text-muted  text-capitalize text-truncate">
                                                    {{ $article->user->name }}</a>
                                                <p class="small text-muted  text-capitalize">
                                                    {{ $article->category->name }}</p>
                                                <div
                                                    class="text-muted d-none d-flex justify-content-between align-items-center">
                                                    Redatto il {{ $article->created_at->format('d/m/Y') }} da
                                                    {{ $article->user->name }}
                                                </div>
                                                <a href="{{ route('article.show', compact('article')) }}"
                                                    class="btn btn-secondary ">Leggi</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="container  my-5">
                            <div class="row  justify-content-around ">
                                @foreach ($articles as $article)
                                    <div class="col-10 col-md-3 my-2 ">
                                        <div class="card  shadow  border border-3  rounded-4">
                                            <img class="img-thumbnail border border-0 rounded-4 card-img-top h-img"
                                                src="{{ Storage::url($article->img) }}" alt="">
                                            <div class="card-body ">
                                                <h5 class="card-title text-truncate">{{ $article->title }}</h5>
                                                <p class="card-text text-truncate">{{ $article->subtitle }}</p>
                                                <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}"
                                                    class="small text-muted  text-capitalize text-truncate">{{ $article->category->name }}</a>
                                                <a href="{{ route('article.byRedactor', ['user' => $article->user->id]) }}"
                                                    class="small text-muted  text-capitalize text-truncate">
                                                    {{ $article->user->name }}</a>
                                                <p class="small text-muted  text-capitalize">
                                                    {{ $article->category->name }}</p>
                                                <div
                                                    class="text-muted d-none d-flex justify-content-between align-items-center">
                                                    Redatto il {{ $article->created_at->format('d/m/Y') }} da
                                                    {{ $article->user->name }}
                                                </div>
                                                <a href="{{ route('article.show', compact('article')) }}"
                                                    class="btn btn-secondary ">Leggi</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <footer class="footer ">
        <div class="container ">
            <div class="row ">
                <div class="col-12 col-md-3 ">
                    <h4 class="text-light">Aulab Post</h4>
                    <ul class="ulfooter">
                        <li><a class="link-offset-2 link-underline link-underline-opacity-0 text-light" href="#">About Us</a></li>
                        <li><a class="link-offset-2 link-underline link-underline-opacity-0 text-light"href="#">Service</a></li>
                        <li><a class="link-offset-2 link-underline link-underline-opacity-0 text-light"href="#">Privacy Policy</a></li>
                        <li><a class="link-offset-2 link-underline link-underline-opacity-0 text-light"href="#">Affiliate Program</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-3">
                        <h4 class="text-light">About Us</h4>
                        <ul class="ulfooter">
                            <li><a class="link-offset-2 link-underline link-underline-opacity-0 text-light"href="#">About Us</a></li>
                            <li><a class="link-offset-2 link-underline link-underline-opacity-0 text-light"href="#">Service</a></li>
                            <li><a class="link-offset-2 link-underline link-underline-opacity-0 text-light"href="#">Privacy Policy</a></li>
                            <li><a class="link-offset-2 link-underline link-underline-opacity-0 text-light"href="#">Affiliate Program</a></li>
                        </ul>
                    </div> 
                    <div class="col-12 col-md-3">
                            <h4 class="text-light">Contact</h4>
                            <ul class="ulfooter">
                                <li><a class="link-offset-2 link-underline link-underline-opacity-0 text-light"href="#">About Us</a></li>
                                <li><a class="link-offset-2 link-underline link-underline-opacity-0 text-light"href="#">Service</a></li>
                                <li><a class="link-offset-2 link-underline link-underline-opacity-0 text-light"href="#">Privacy Policy</a></li>
                                <li><a class="link-offset-2 link-underline link-underline-opacity-0 text-light"href="#">Affiliate Program</a></li>
                            </ul>
                        </div> 
                        <div class="col-12 col-md-3">
                                <h4 class="text-light">Social</h4>
                                <div class="social">
                                    <a class=" text-light" href="#"><i class="bi bi-facebook"></i></a>
                                    <a class=" text-light" href="#"><i class="bi bi-twitter"></i></a>
                                    <a class=" text-light" href="#"><i class="bi bi-instagram"></i></a>
                                    <a class="text-light" href="#"><i class="bi bi-telegram"></i></a>
                                </ul>
                            </div>
                        </div> 
                </div>
            </div>
    </footer>

    <div class="Copyright bg-dark text-light">
        <div class="container d-flex justify-content-center">
            <div class="row">
                <h4 class="copytext">Copyright© Aulab Post</h4>
            </div>
        </div>
    </div>
    


</x-layout>
