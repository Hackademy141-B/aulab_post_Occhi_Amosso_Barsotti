<x-layout>

    <div class="container-fluid pt-5 text-center text-dark">
        <div class="row justify-content-center">
            <h1 class="showArticle  pt-5">
                {{ $article->title }}
            </h1>
        </div>
    </div>
    
    <div class="container my-5 ">
        <div class="row justify-content-around margin">
            <div class="col-11 col-md-6 col-lg-9">
            <div class="card img-thumbnail shadow  border border-3  rounded-4">
                <img src="{{ Storage::url($article->img) }}" alt="" class="img-fluid my-3 border rounded-4 mt-1 ">
                <div class="text-center ">
                    <h2>{{ $article->subtitle }}</h2>
                    <div class="my-3 text-muted ">
                        <p>Redatto da {{ $article->user->name }} il {{ $article->created_at->format('d/m/Y') }}</p>
                    </div>
                </div>
                    
                
                    <p class="text-center p-4 ">{{ $article->body }}</p>
                    <div class="d-flex justify-content-around p-3">
                        @if(Auth::user() && Auth::user()->is_revisor)
                        
                    <form action="{{route('revisor.acceptArticle', compact('article'))}}" method="POST">
                        @csrf
                        <div class="row ps-3">
                        <button class="btn btn-success text-white p-2 m-1">Accetta  <i class="bi bi-check-lg"></i></button>
                        </div>
                    </form>
                    <form action="{{route('revisor.rejectArticle', compact('article'))}}" method="POST">
                        <div class="row pe-5">
                        @csrf
                        <button class="btn btn-danger text-white p-2  m-1">Rifiuta  <i class="bi bi-ban"></i></button>
                    </div>
                    </form>
                    <div>
                    </div>
                        
                        
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
    
    <div class="text-center">
        <a href="{{ route('article.index') }}" class="btn btn-secondary p-3 text-white my-5">Torna indietro</a>
    </div>
    

    
    


    </x-layout>
    