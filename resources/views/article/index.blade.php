
<x-layout>

    <div class="container-fluid p-5 text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Tutti gli articoli
            </h1>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row  justify-content-around">
            @foreach($articles as $article)
                <div class="col-10 col-md-3 my-2">
                    <div class="card shadow p-3 border border-3  rounded-4">
                        <img src="{{ Storage::url($article->img) }}" class="card-img-top " alt="18remm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ $article->subtitle }}</p>
                            <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}" class="small text-muted  text-capitalize">{{ $article->category->name }}</a>
                            <a href="{{ route('article.byRedactor', ['user' => $article->user->id]) }}" class="small text-muted  text-capitalize">  {{ $article->user->name }}</a>
                            <p class="small text-muted  text-capitalize">{{ $article->category->name }}</p>
                            <div class="text-muted d-none d-flex justify-content-between align-items-center">
                                Redatto il {{ $article->created_at->format('d/m/Y') }} da {{ $article->user->name }}
                        </div>
                            <a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white">Leggi</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
    </x-layout>
    