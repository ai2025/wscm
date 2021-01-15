<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrganisasiKurikulum extends Component
{
    public function render()
    {
        return view('livewire.kurikulum.organisasi-kurikulum')->layout('layouts.landingpage');
    }
}
