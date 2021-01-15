<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TentangPerpustakaan extends Component
{
    public function render()
    {
        return view('livewire.perpus.tentang-perpustakaan')->layout('layouts.landingpage');
    }
}
