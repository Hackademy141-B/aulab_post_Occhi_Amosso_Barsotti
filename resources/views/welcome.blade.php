<x-layout>


    {{-- message --}}

<div class="container-fluid">

    @if (session('message'))
    <div class=" alert alert-success text-center mt-5">
        {{ session('message') }}
    </div>
    @elseif (session('notmessage'))
    <div class=" alert alert-danger text-center mt-5">
        {{ session('notmessage') }}
    </div>
    @endif
</div>


{{--  --}}
    <section class="hero">
    </div>
        <div class="hero-text">
            <h1 class="fade-in">AuLab Post</h1>
            <h2 class="fade-in">Create your article, for free</h2>
            <p class="fade-in">Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>               
    </section>



    
    {{-- carosello --}}
    
    <div class="box">
        <div class="boxtitle  text-center  pt-5 d-flex justify-content-center">
            <h2 class="title pt-3  blockquote-4">Gli Ultimi Articoli</h2>
        </div>
        <div id="carouselExampleInterval" class="carousel slide carousel-dark" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <div class="cards-wrapper pb-5">
                        <div class="container my-5">
                            <div class="row justify-content-center">
                                @foreach ($articles as $article)
                                    <div class="col-10 col-md-3 my-2 ">
                                        <div class="card  shadow  border border-3  rounded-4">
                                            <img class="img-thumbnail border border-0 rounded-4 card-img-top h-img"
                                                src="{{ Storage::url($article->img) }}" alt="">
                                            <div class="card-body ">
                                                <h5 class="card-title text-truncate">{{ $article->title }}</h5>
                                                <p class="card-text text-truncate">{{ $article->subtitle }}</p>
                                                @if($article->category)

                                                <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}"
                                                    class="small text-muted  text-capitalize text-truncate"><b>Categoria:</b> {{ $article->category->name }}</a>
                                                    @else
                                                    <p class="small text-muted fst-italic text-capitalize">Non categorizzato</p>
                                                    @endif
                                                    <span class="text-muted small">- Tempo di lettura {{$article->readDuration()}} min </span>
                                                    <br>
                                                    <p class="small fst-italic text-capitalize">
                                                        @foreach ($article->tags as $tag)
                                                            #{{ $tag->name }}
                                                        @endforeach
                                                    </p>
                                                <a href="{{ route('article.byRedactor', ['user' => $article->user->id]) }}"
                                                    class="small text-muted  text-capitalize text-truncate"><b>Redatto da:</b> 
                                                    {{ $article->user->name }}</a>
                                                <br>
                                                <a href="{{ route('article.show', compact('article')) }}"
                                                    class="btn btn-secondary mt-2">Leggi</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item " data-bs-interval="5000">
                    <div class="cards-wrapper pb-5">
                        <div class="container my-5">
                            <div class="row justify-content-center">
                                @foreach ($articles as $article)
                                    <div class="col-10 col-md-3 my-2 ">
                                        <div class="card  shadow  border border-3  rounded-4">
                                            <img class="img-thumbnail border border-0 rounded-4 card-img-top h-img"
                                                src="{{ Storage::url($article->img) }}" alt="">
                                            <div class="card-body ">
                                                <h5 class="card-title text-truncate">{{ $article->title }}</h5>
                                                <p class="card-text text-truncate">{{ $article->subtitle }}</p>
                                                @if($article->category)

                                                <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}"
                                                    class="small text-muted  text-capitalize text-truncate"><b>Categoria:</b> {{ $article->category->name }}</a>
                                                    @else
                                                    <p class="small text-muted fst-italic text-capitalize">Non categorizzato</p>
                                                    @endif
                                                    <span class="text-muted small">- Tempo di lettura {{$article->readDuration()}} min </span>
                                                    <br>
                                                    <p class="small fst-italic text-capitalize">
                                                        @foreach ($article->tags as $tag)
                                                            #{{ $tag->name }}
                                                        @endforeach
                                                    </p>
                                                <a href="{{ route('article.byRedactor', ['user' => $article->user->id]) }}"
                                                    class="small text-muted  text-capitalize text-truncate"><b>Redatto da:</b> 
                                                    {{ $article->user->name }}</a>
                                                <br>
                                                <a href="{{ route('article.show', compact('article')) }}"
                                                    class="btn btn-secondary mt-2">Leggi</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item " data-bs-interval="5000">
                    <div class="cards-wrapper pb-5">
                        <div class="container my-5">
                            <div class="row justify-content-center">
                                @foreach ($articles as $article)
                                    <div class="col-10 col-md-3 my-2 ">
                                        <div class="card  shadow  border border-3  rounded-4">
                                            <img class="img-thumbnail border border-0 rounded-4 card-img-top h-img"
                                                src="{{ Storage::url($article->img) }}" alt="">
                                            <div class="card-body ">
                                                <h5 class="card-title text-truncate">{{ $article->title }}</h5>
                                                <p class="card-text text-truncate">{{ $article->subtitle }}</p>
                                                @if($article->category)

                                                <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}"
                                                    class="small text-muted  text-capitalize text-truncate"><b>Categoria:</b> {{ $article->category->name }}</a>
                                                    @else
                                                    <p class="small text-muted fst-italic text-capitalize">Non categorizzato</p>
                                                    @endif
                                                    <span class="text-muted small">- Tempo di lettura {{$article->readDuration()}} min </span>
                                                    <br>
                                                    <p class="small fst-italic text-capitalize">
                                                        @foreach ($article->tags as $tag)
                                                            #{{ $tag->name }}
                                                        @endforeach
                                                    </p>
                                                <a href="{{ route('article.byRedactor', ['user' => $article->user->id]) }}"
                                                    class="small text-muted  text-capitalize text-truncate"><b>Redatto da:</b> 
                                                    {{ $article->user->name }}</a>
                                                <br>
                                                <a href="{{ route('article.show', compact('article')) }}"
                                                    class="btn btn-secondary mt-2">Leggi</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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

{{-- footer --}}


<div class="w-100">
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
