<div class="border border-primary p-4">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Sub Title</th>
                <th scope="col">Creato il</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <th>{{ $article->title }}</th> 
                    <td>{{ $article->subtitle }}</td>
                    <td>{{ $article->body }}</td>
                    <td>{{ $article->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('article.edit', $article)}}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                        <button wire:click="deleteArticle({{$article}})" class="btn btn-primary" type="button"><i class="fa-solid fa-trash"></i></button>
                        <a href="{{ route('article.show', $article)}}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
