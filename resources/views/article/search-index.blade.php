<x-layout>
    <div class="container-fluid p-5 text-center ">
      <div class="row justify-content-center pt-5">
        <h1 class="ArticleSearch pt-5">
          Tutti gli articoli per: {{$query}}
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
                          @if($article->category)
                          <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}"
                              class="small text-muted  text-capitalize text-truncate"><b>Categoria:</b> {{ $article->category->name }}</a>
                              @else
                              <p class="small text-muted fst-italic text-capitalize">Non categorizzato</p>
                              @endif
                              <br>
                              <p class="small fst-italic text-capitalize">
                                @foreach ($article->tags as $tag)
                                    #{{ $tag->name }}
                                @endforeach
                            </p>
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

    {{-- <div class="container my-5">
      <div class="row justify-content-around">
        @foreach($articles as $article)
        <div class="col-12 col-md-3 my-2">
          <div class="card">
            <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$article->title}}</h5>
              <p class="card-text">{{$article->subtitle}}</p>
              <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</a>
            </div>
            <div class="card-footer text-muted d-flex justify-content-between align-items-center">
              <a class="small" href="{{route('article.byRedactor', ['user' => $article->user->id])}}">Redatto il {{$article->created_at->format('d/m/Y')}} da {{$article->user->name}}</a>
              <a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white">Leggi</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div> --}}
  </x-layout>
  