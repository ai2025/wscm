<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Landingpage extends Component
{
    public function render()
    {
        return view('livewire.landingpage')->layout('layouts.landingpage');
    }
}
