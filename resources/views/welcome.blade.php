<x-layout>

    {{-- <div class="container-fluid  text-center text-dark">
        <div id="title" class="display-2">
          Prima pagina
        </div>
    </div> --}}

    @if(session('message'))
    <div class="alert alert-success text-center">
        {{ session('message') }}
    </div>
@endif

   <section class="hero">
        <div class="hero-text">
            <h1>Aulab Post</h1>
            <h2>Create your article, for free</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>

        </div>
        <div class="hero-img">
            <img src="./img1.png" alt="">
        </div>
   </section>

    {{-- <div class="container my-5 ">
        <div class="row justify-content-around">
            @foreach($articles as $article)
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