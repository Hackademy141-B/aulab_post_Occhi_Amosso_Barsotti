
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
    </div>



    
    </x-layout>
    