<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use App\Models\Article;
use Livewire\Component;

class CreateArticleForm extends Component
{

    public $title;
    public $subtitle;
    public $body;
    public $tags;

    protected $rules = [
        'title'=>'required|min:6|max:100', 
        'subtitle'=>'required|min:10|max:100', 
        'body'=>'required|min:10|max:999'
    ];

    protected $messages = [
        'title.required'=>'Il campo title è richiesto', 
        'subtitle.required'=>'Il campo subtitle è richiesto', 
        'body.required'=>'Il campo body è richiesto'
    ];

    public function store(){
        $this->validate();

        $article = Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
        ]);

        $article->tags()->attach($this->tags);

        $this->reset(); 
    }

    public function render(){
        $tagsAll = Tag::all();
        return view('livewire.create-article-form', compact('tagsAll'));
    }
}
