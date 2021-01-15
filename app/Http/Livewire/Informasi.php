<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Informasi extends Component
{
    public function render()
    {
        return view('livewire.informasi')->layout('layouts.landingpage');
    }
}
