<?php

namespace App\Http\Livewire;

use Livewire\Component;

class KalenderPembelajaran extends Component
{
    public function render()
    {
        return view('livewire.kurikulum.kalender-pembelajaran')->layout('layouts.landingpage');
    }
}
