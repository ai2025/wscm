<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrganisasiPerpustakaan extends Component
{
    public function render()
    {
        return view('livewire.perpus.organisasi-perpustakaan')->layout('layouts.landingpage');
    }
}
