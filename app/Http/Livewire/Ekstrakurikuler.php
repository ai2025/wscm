<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Ekstrakurikuler extends Component
{
    public function render()
    {
        return view('livewire.kesiswaan.ekstrakurikuler')->layout('layouts.landingpage');
    }
}
