<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TentangKesiswaan extends Component
{
    public function render()
    {
        return view('livewire.kesiswaan.tentang-kesiswaan')->layout('layouts.landingpage');
    }
}
