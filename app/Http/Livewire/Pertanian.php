<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Pertanian extends Component
{
    public function render()
    {
        return view('livewire.paketKeahlian.pertanian')->layout('layouts.landingpage');
    }
}
