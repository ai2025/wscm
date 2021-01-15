<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProgramKerjaKesiswaan extends Component
{
    public function render()
    {
        return view('livewire.kesiswaan.program-kerja-kesiswaan')->layout('layouts.landingpage');
    }
}
