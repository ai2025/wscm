<?php

namespace App\Http\Livewire;

use Livewire\Component;

class KegiatanOsis extends Component
{
    public function render()
    {
        return view('livewire.kesiswaan.kegiatan-osis')->layout('layouts.landingpage');
    }
}
