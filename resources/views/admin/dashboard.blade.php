<x-layout>

<div class=" container-fluid pt-5  text-center ">
    <div class="row pt-5  justify-content-center">
        <div class="adminWelcome">
            Bentornato!
        </div>
    </div>
</div>

@if (session('message'))
<div class="containermessage  pb-5">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="alert alert-success text-center">
        {{ session('message') }}
            </div>
        </div>
    </div>
</div>
@endif
<div class="adbox1 container  mt-5 p-4 my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>Richieste per ruolo Amministratore</h2>
            <x-requests-table :roleRequests="$adminRequests" role="amministratore" />
        </div>
    </div>
</div>

<div class="adbox2 container p-4 my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>Richieste per ruolo Revisore</h2>
            <x-requests-table :roleRequests="$revisorRequests" role="revisore" />
        </div>
    </div>
</div>

<div class="adbox3 container p-4  my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>Richieste per ruolo Redattore</h2>
            <x-requests-table :roleRequests="$writerRequests" role="redattore" />
        </div>
    </div>
</div>

<div class="adbox4 container p-4 my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>I tags della piattaforma</h2>
            <x-metainfo-table :metaInfos="$tags" metaType="tags" />
        </div>
    </div>
</div>

<div class="adbox5 container p-4 my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>Le categorie della piattaforma</h2>
            <x-metainfo-table :metaInfos="$categories" metaType="categorie" />
            <form class="d-flex" action="{{route('admin.storeCategory')}}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Inserisci una nuova categotia" class="form-control me-2">
                <button type="submit" class="btn btn-success text-white">Aggiungi</button>
            </form>
        </div>
    </div>
</div>

</x-layout>
