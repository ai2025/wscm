<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Pkl extends Component
{
    public function render()
    {
        return view('livewire.humas.pkl')->layout('layouts.landingpage');
    }
}
