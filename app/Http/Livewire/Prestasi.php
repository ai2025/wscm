<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Prestasi extends Component
{
    public function render()
    {
        return view('livewire.kesiswaan.prestasi')->layout('layouts.landingpage');
    }
}
