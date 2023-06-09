<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count = 0;
    public $numberToAdd = 0;

    public function increment(){
        $this->count++;
    }

    public function decrement(){
        $this->count--;
    }

    public function incrementByNumber($number){
        $this->count += $number;
    }

    public function decrementByNumber($number){
        $this->count -= $number;
    }

    public function addNumberToCounter(){
        $this->count += $this->numberToAdd;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
