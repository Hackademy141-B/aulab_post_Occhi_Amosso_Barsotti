<x-layout>
    <div class="container  my-5 text-center mt-5 p-5">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-6 shadow border bg-light border-light-subtle rounded-4 p-5 ">
    <h1 class="">Registrati</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('register') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="InputPassword" class="form-label">Nome</label>
                        <input name="name" type="text" class="form-control" id="InputPassword"
                            value="{{ old('name') }}">
                    </div>

                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="InputEmail"
                            aria-describedby="emailHelp" value="{{ old('email') }}">

                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleCheck">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleCheck">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleCheck">Conferma la password</label>
                        <input name="password_confirmation" type="password" class="form-control" id="Check">
                    </div>


                    <button type="submit" class="btn btn-primary">Registrati</button>
                    <p class="small mt-2">Gia registrato? <a href="{{ route('login') }}">Clicca qui</a></p>
                </form>



            </div>
        </div>
    </div>
</x-layout>
