<x-layout>
    <div class="container my-5 mx-auto text-center  mt-5 pt-5 pb-5">
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
          <label for="email" class="form-label">Email</label>
          <input name="email" type="email" class="form-control" id="email"  value="{{old('email')}}">
        </div>

        
        <div class="mb-3 ">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleCheck">
          </div>

          


        <button type="submit" class="btn btn-primary">Accedi</button>
        <p class="small mt-2">Non sei registrato! <a href="{{route('register')}}">Clicca qui</a></p>
        </form>
        </div>
    </div>
</div>
    </x-layout>