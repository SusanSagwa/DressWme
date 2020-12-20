<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StartComponent extends Component
{
    public function render()
    {
        return view('livewire.start-component')->layout("layouts.footer");
    }
}
