<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Javascript extends Component
{
    public $title;

    public function initialize()
    {
       $this->title = 'teste';
    }
    public function render()
    {
        return view('livewire.javascript');
    }
}
