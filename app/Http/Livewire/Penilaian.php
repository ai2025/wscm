<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Penilaian extends Component
{
    public function render()
    {
        return view('livewire.kurikulum.penilaian')->layout('layouts.landingpage');
    }
}
