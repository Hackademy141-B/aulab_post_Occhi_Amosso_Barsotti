<x-layout>

    <div class=" container-fluid p-5  text-center ">
    <div class=" container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <h1 class="writerDashboard pt-5">
                Bentornato
            </h1>
        </div>
    </div>

    @if (session('message'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
    @endif

    <div class="writerBox1 p-3 container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli in fase di revisione</h2>
                <x-writer-articles-table :articles="$unrevisionedArticles" />
            </div>
        </div>
    </div>

    <div class="writerBox2 p-3 container  my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli pubblicati</h2>
                <x-writer-articles-table :articles="$acceptedArticles" />
            </div>
        </div>
    </div>

    <div class="writerBox3 p-3 container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli respinti</h2>
                <x-writer-articles-table :articles="$rejectedArticles" />
            </div>
        </div>
    </div>

</x-layout>
