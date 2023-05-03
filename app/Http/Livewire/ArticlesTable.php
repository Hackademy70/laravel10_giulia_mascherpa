<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticlesTable extends Component
{
    public $articles;
    
    public function render() {
        return view('livewire.articles-table', ['articles = $this->articles']);
    }

    public function deleteArticle(Article $article) {
        //$article = Article::find($id);
        $article->delete();
        return view('article.index');
    }
}
