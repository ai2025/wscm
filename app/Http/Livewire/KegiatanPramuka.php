<?php

namespace App\Http\Livewire;

use Livewire\Component;

class KegiatanPramuka extends Component
{
    public function render()
    {
        return view('livewire.kesiswaan.kegiatan-pramuka')->layout('layouts.landingpage');
    }
}
