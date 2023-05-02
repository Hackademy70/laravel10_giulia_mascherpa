<x-layout>

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1>Lista Viaggi</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
               <livewire:articles-table :articles="$articles"/>
            </div>
        </div>
    </div>

</x-layout>