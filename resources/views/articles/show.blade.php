<x-layout>

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1>{{ $article->title }}</h1>
            </div>
        </div>
    </div>

    <div class="container my-2">
        <div class="row">
            <div class="col-6">
                <p class="lead">
                    <span class="fw-bold">Subtitle:</span>
                    {{ $article->subtitle }}
                </p>
                <p class="lead">
                    <span class="fw-bold">Creato da:</span>
                    {{ $article->created_at->diffForHumans() }}
                </p>
                <p class="lead">
                    <span class="fw-bold">Tag:</span>
                    <ul class="list-group">
                        {!! $article->getFormattedTags() !!}
                    </ul>
                </p>
            </div>
            <div class="col-6">
                <p class="lead">
                    <span class="fw-bold">Testo dell'articolo:</span>
                    <br>
                    {{ $article->body }}
                </p>
            </div>
        </div>
    </div>


</x-layout>