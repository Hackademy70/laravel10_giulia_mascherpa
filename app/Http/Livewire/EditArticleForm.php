<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class EditArticleForm extends Component
{
    public $title;
    public $subtitle;
    public $body;
    public Article $article;

    public function mount(){
        $this->title = $this->article->title;
        $this->subtitle = $this->article->subtitle;
        $this->body = $this->article->body;
    }

    public function updateArticle(){
        $this->article->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
        ]);
        return redirect()->route('article.index');
    }


    public function render()
    {
        return view('livewire.edit-article-form');
    }
}
