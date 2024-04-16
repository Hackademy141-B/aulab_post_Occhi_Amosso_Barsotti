<x-layout>

    {{-- <div class="container-fluid  text-center text-dark">
        <div id="title" class="display-2">
          Prima pagina
        </div>
    </div> --}}
   <section class="hero">
        <div class="hero-text">
            <h1>Aulab Post</h1>
            <h2>Create your card, for free</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
            <button  href="{{ route('login') }}" type="button"  class="btn btn-outline-dark" >Crea la tua prima card</button>
        </div>
        <div class="hero-img">
            <img src="./img1.png" alt="">
        </div>
   </section>

    {{-- <div class="container my-5">
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
    
</x-layout>