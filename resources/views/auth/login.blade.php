<x-layout>
    <div class="container-fluid text-center p-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
    <h1>Accedi</h1>

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
            <input name="password" type="password" class="form-control" id="exampleCheck">
            <label class="form-label" for="exampleCheck1">Password</label>
          </div>

          


        <button type="submit" class="btn btn-primary">Accedi</button>
        <p class="small mt-2">Non sei registrto! <a href="{{route('register')}}">Clicca qui</a></p>
      </form>
        </div>
    </div>
</div>
    </x-layout>