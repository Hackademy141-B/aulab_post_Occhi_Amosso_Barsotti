
<x-layout>

    <div class="container-fluid  text-center text-dark">
        <div class="row justify-content-center pt-5">
            <h1 class="allArticles pt-5">
                Tutti gli articoli
            </h1>
        </div>
    </div>
    
    <div class="container  my-5">
        <div class="row  justify-content-around ">
            @foreach($articles as $article)
                <div class="col-10 col-md-4 my-2 ">
                    <div class="card  shadow  border border-3  rounded-4">
                        <img class="img-thumbnail border border-0 rounded-4 card-img-top h-img" src="{{ Storage::url($article->img) }}" alt="">
                        <div class="card-body ">
                            <h5 class="card-title text-truncate">{{ $article->title }}</h5>
                            <p class="card-text text-truncate">{{ $article->subtitle }}</p>
                            <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}"
                                class="small text-muted  text-capitalize text-truncate"><b>Categoria:</b> {{ $article->category->name }}</a>
                                <br>
                            <a href="{{ route('article.byRedactor', ['user' => $article->user->id]) }}"
                                class="small text-muted  text-capitalize text-truncate"><b>Redatto da:</b> 
                                {{ $article->user->name }}</a>
                            {{-- <p class="small text-muted  text-capitalize">{{ $article->category->name }}</p> --}}
                            {{-- <div class="text-muted d-none d-flex justify-content-between align-items-center">
                                Redatto il {{ $article->created_at->format('d/m/Y') }} da {{ $article->user->name }}
                        </div> --}}
                        <div class="mt-2">
                            <a href="{{route('article.show', compact('article'))}}" class="btn btn-secondary">Leggi</a>
                        </div>
                            
                        </div>
                    </div>
                </div>
            @endforeach
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
    