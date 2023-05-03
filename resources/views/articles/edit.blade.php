<x-layout>

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1>Modifica Articolo: {{ $article->title }}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <livewire:edit-article-form :article="$article"/>
            </div>
        </div>
    </div>

</x-layout>