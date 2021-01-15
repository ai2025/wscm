<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Perikanan extends Component
{
    public function render()
    {
        return view('livewire.paketKeahlian.perikanan')->layout('layouts.landingpage');
    }
}
