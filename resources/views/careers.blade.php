
<x-layout>
    <div class="container-fluid pt-5 text-center text-dark">
        <h1 class="workwithus pt-5">Lavora con noi</h1>
    </div>
    <div class="container my-5 mx-auto text-center  mt-5 pt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 shadow bg-light border border-light-subtle rounded-4 p-5 ">
            <h2>Lavora come amministratore</h2>
            <p>Cosa fai: Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo aspernatur doloribus, voluptates, sequi minus dignissimos ullam laboriosam fugia doloremque saepe voluptate nesciunt exercitationem obcaecati tenetur in, deleniti ea accusantium?</p>
            <h2>Lavora come revisore</h2>
            <p>Cosa fai: Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo aspernatur doloribus, voluptates, sequi minus dignissimos ullam laboriosam fugia doloremque saepe voluptate nesciunt exercitationem obcaecati tenetur in, deleniti ea accusantium?</p>
            <h2>Lavora come redattore</h2>
            <p>Cosa fai: Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo aspernatur doloribus, voluptates, sequi minus dignissimos ullam laboriosam fugia doloremque saepe voluptate nesciunt exercitationem obcaecati tenetur in, deleniti ea accusantium?</p>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form class="p-5" action="{{route('careers.submit')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="role" class="form-label">Quale ruolo ti stai candidando?</label>
                    <select name="role" id="role" class="form-control">
                        <option value="admin">Amministratore</option>
                        <option value="reviewer">Revisore</option>
                        <option value="writer">Redattore</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input class="form-control" name="email" type="email" value="{{old('email') ?? Auth::user()->email}}">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Parlaci di te</label>
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control">{{old('message')}}</textarea>
                </div>
                <button type="submit" class="btn btn-secondary text-white">Invia la candidatura</button>
            </form>
        </div>
    </div>
</x-layout>

