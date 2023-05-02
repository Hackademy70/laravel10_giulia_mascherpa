<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ArticlesTable extends Component
{
    public $articles;
    
    public function render()
    {
        return view('livewire.articles-table', ['articles = $this->articles']);
    }
}
