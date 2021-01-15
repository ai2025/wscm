<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrganisasiKesiswaan extends Component
{
    public function render()
    {
        return view('livewire.kesiswaan.organisasi-kesiswaan')->layout('layouts.landingpage');
    }
}
