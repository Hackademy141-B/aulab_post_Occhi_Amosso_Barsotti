<x-layout>

<div class=" container-fluid p-5 bg-info text-center text-white">
    <div class="row justify-content-center">
        <div class="display-1">
            Bentornato Amministratore
        </div>
    </div>
</div>

@if (session('message'))
    <div class="alert alert-success text-center">
        {{ session('message') }}
    </div>
@endif

<div class=" container my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>Richieste per ruolo Amministratore</h2>
            <x-requests-table :roleRequests="$adminRequests" role="amministratore" />
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>Richieste per ruolo Revisore</h2>
            <x-requests-table :roleRequests="$revisorRequests" role="revisore" />
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>Richieste per ruolo Redattore</h2>
            <x-requests-table :roleRequests="$writerRequests" role="redattore" />
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>I tags della piattaforma</h2>
            <x-metainfo-table :metaInfos="$tags" role="tags" />
        </div>
    </div>
</div>

</x-layout>
