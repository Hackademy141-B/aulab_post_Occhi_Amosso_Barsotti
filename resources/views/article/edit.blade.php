{{-- layout --}}
<x-layout>
    <div class="container-fluid pt-5 text-center text-dark">
        <div class="insertArticle pt-5">
            Modifica articolo
        </div>
    </div>



    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                 @if (session('message'))
                    <div class="alert alert-seccess text-center">
                        {{ session('message') }}
                    </div>
                @endif 

                <form class="card p-5 shadow" action="{{route('article.update', compact('article'))}}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo:</label>
                        <input name="title" type="text" class="form-control" id="title"
                            value="{{$article->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo:</label>
                        <input name="subtitle" type="text" class="form-control" id="subtitle"
                            value="{{$article->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine:</label>
                        <input name="img" type="file" class="form-control" id="img">
                    </div>
                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags:</label>
                        <input name="tags" class="form-control" id="tags" value="{{$article->tags->implode('name', ',')}}">
                        <span class="small fst-italic">Dividi ogni tag con una virgola</span>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria:</label>
                        <select name="category" id="category" class="form-control capitalize">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if($article->category && $category->id == $article->category->id) selected @endIf>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo del testo:</label>
                        <textarea name="body" id="body" cols="30" rows="7" class="form-control">{{ $article->body }}</textarea>
                    </div>

                    <div class="mt-2">
                        <button class="btn btn-outline-dark ">Inserisci un articolo</button>
                        <p class="mt-3 "><a class="btn btn-outline-danger" href="{{ route('homePage') }}">Torna alla
                                home</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
