<x-layout>
    <div class="container my-5 text-center mt-5 p-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 shadow border border-light-subtle rounded-4 p-5 ">
    <h1 class="">Accedi</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{route('login')}}" method="post">
        @csrf

        <div class="mb-3">
          <label for="InputPassword" class="form-label">Nome</label>
          <input name="name" type="text" class="form-control" id="InputPassword"  value="{{old('name')}}">
        </div>

        
        <div class="mb-3 form-check">
            <label class="form-label" for="exampleCheck1">Password</label>
            <input name="password" type="password" class="form-control" id="exampleCheck">
          </div>

          


        <button type="submit" class="btn btn-primary">Accedi</button>
        <p class="small mt-2">Non sei registrato! <a href="{{route('register')}}">Clicca qui</a></p>
        </form>
        </div>
    </div>
</div>
    </x-layout>