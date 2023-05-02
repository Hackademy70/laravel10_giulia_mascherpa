<div class="border border-primary p-4">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">SubTitle</th>
                <th scope="col">Creato il</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <th>{{ $article->title }}</th> 
                    <td>{{ $article->subtitle }}</td>
                    <td>{{ $article->body }}</td>
                    <td>{{ $article->created_at->format('d/m/Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
