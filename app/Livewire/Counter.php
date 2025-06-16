<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $click;
    public function render()
    {
        return view('livewire.counter');
    }

    public function handelClick()
    {
        dump('clicked');
    }
}
