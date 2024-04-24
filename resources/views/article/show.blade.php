<x-layout>

    <div class="container-fluid pt-5 text-center text-dark">
        <div class="row justify-content-center">
            <h1 class="showArticle pt-5">
                {{ $article->title }}
            </h1>
        </div>
    </div>
    
    <div class="container my-5 ">
        <div class="row justify-content-around margin">
            <div class="col-11 col-md-6 col-lg-4">
            <div class="card img-thumbnail shadow  border border-3  rounded-4">
                <img src="{{ Storage::url($article->img) }}" alt="" class="img-fluid my-3">
                <div class="text-center ">
                    <h2>{{ $article->subtitle }}</h2>
                    <div class="my-3 text-muted ">
                        <p>Redatto da {{ $article->user->name }} il {{ $article->created_at->format('d/m/Y') }}</p>
                    </div>
                </div>
                
                <p class="text-center p-4 ">{{ $article->body }}</p>
                <div class="d-flex justify-content-between ">
                    @if(Auth::user() && Auth::user()->is_revisor)
                    
                    <form action="{{route('revisor.acceptArticle', compact('article'))}}" method="POST">
                        @csrf
                        <div class="row ps-3">
                        <button class="btn btn-success text-white p-1 m-3">Accetta  <i class="bi bi-check-lg"></i></button>
                        </div>
                    </form>
                    <form action="{{route('revisor.rejectArticle', compact('article'))}}" method="POST">
                        <div class="row pe-5">
                        @csrf
                        <button class="btn btn-danger text-white p-1 m-3">Rifiuta  <i class="bi bi-ban"></i></button>
                    </div>
                    </form>
                        
                        
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
    
    <div class="text-center">
        <a href="{{ route('article.index') }}" class="btn btn-secondary text-white my-5">Torna indietro</a>
    </div>
    
    {{-- <div class="container  my-5">
        <div class="row  justify-content-around ">
            @foreach($articles as $article)
                <div class="col-10 col-md-3 my-2 ">
                    <div class="card  shadow  border border-3  rounded-4">
                        <img class="img-thumbnail border border-0 rounded-4 card-img-top h-img" src="{{ Storage::url($article->img) }}" alt="">
                        <div class="card-body ">
                            <h5 class="card-title text-truncate">{{ $article->title }}</h5>
                            <p class="card-text text-truncate">{{ $article->subtitle }}</p>
                            <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}" class="small text-muted  text-capitalize text-truncate">{{ $article->category->name }}</a>
                            <a href="{{ route('article.byRedactor', ['user' => $article->user->id]) }}" class="small text-muted  text-capitalize text-truncate">  {{ $article->user->name }}</a>
                            <p class="small text-muted  text-capitalize">{{ $article->category->name }}</p>
                            <div class="text-muted d-none d-flex justify-content-between align-items-center">
                                Redatto il {{ $article->created_at->format('d/m/Y') }} da {{ $article->user->name }}
                        </div>
                            <a href="{{route('article.show', compact('article'))}}" class="btn btn-secondary ">Leggi</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div> --}}


    
    


    </x-layout>
    